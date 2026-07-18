# Use Debian-based PHP-FPM (not Alpine) to avoid extension compilation issues
FROM php:8.2-fpm

# Install system packages and pre-compiled extensions
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    liboniguruma-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install \
    pdo \
    pdo_mysql \
    zip \
    mbstring \
    exif \
    gd \
    session \
    dom \
    tokenizer \
    fileinfo \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create .env if it doesn't exist
RUN cp .env.example .env || true

# Install Laravel dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Generate Laravel key
RUN php artisan key:generate

# Set permissions for Laravel
RUN chmod -R 775 storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Configure Nginx
COPY ./render.apache.conf /etc/nginx/conf.d/default.conf

# Start PHP-FPM and Nginx
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]

EXPOSE 80

# Copy project files
COPY . .

# Install Composer dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Create .env if it doesn't exist
RUN cp .env.example .env || true

# Generate Laravel key
RUN php artisan key:generate

# Set permissions
RUN chmod -R 775 storage bootstrap/cache \
    && chown -R nobody:nobody storage bootstrap/cache

# Configure Nginx
COPY ./render.apache.conf /etc/nginx/conf.d/default.conf

# Start both PHP-FPM and Nginx
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]

EXPOSE 80
