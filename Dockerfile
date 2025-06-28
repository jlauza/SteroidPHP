# Use the official PHP image
FROM php:8.1-cli

# Install system dependencies, PHP extensions, and Composer.
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install pdo_mysql \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Set the working directory.
WORKDIR /var/www/html

# Copy built assets from asset-builder
COPY . /var/www/html

CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]