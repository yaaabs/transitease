# Use PHP with built-in FPM to avoid Apache MPM conflicts on Railway
FROM php:8.2-fpm-alpine

# Install necessary system packages and PHP extensions
RUN apk add --no-cache \
    nginx \
    composer \
    git \
    curl \
    zip \
    libpng-dev \
    oniguruma-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip mbstring exif gd

# Set working directory
WORKDIR /var/www/html

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
