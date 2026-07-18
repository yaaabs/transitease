# Use the official PHP Apache image
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip mbstring exif gd

# Ensure Apache uses a single MPM and enable rewrite support
RUN set -eux; \
    a2dismod mpm_event || true; \
    a2enmod mpm_prefork; \
    a2enmod rewrite

# Copy project files
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create .env manually if needed
RUN cp .env.example .env || true

# Disable Apache default site config that may conflict with Railway's startup
RUN rm -f /etc/apache2/sites-enabled/000-default.conf || true

# Give storage/cache permissions
RUN chmod -R 775 storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Install Laravel dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Generate Laravel key AFTER env + vendor exist
RUN php artisan key:generate

# Set Apache document root to /public
COPY ./render.apache.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf

# Expose port
EXPOSE 80
