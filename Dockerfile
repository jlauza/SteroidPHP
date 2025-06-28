# Use the official PHP image
FROM php:8.1-cli

ARG ENABLE_PGSQL=false
ARG ENABLE_MYSQL=true
ARG ENABLE_SQLITE=false

# Install system dependencies, PHP extensions, and Composer.
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpq-dev \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN if [ "$ENABLE_PGSQL" = "true" ]; then \
      docker-php-ext-install pdo_pgsql; \
    fi

RUN if [ "$ENABLE_SQLITE" = "true" ]; then \
      apt-get install -y libsqlite3-dev && docker-php-ext-install pdo_sqlite; \
    fi

RUN if [ "$ENABLE_MYSQL" = "true" ]; then \
      docker-php-ext-install pdo_mysql; \
    fi

# Set the working directory.
WORKDIR /var/www/html

# Copy built assets from asset-builder
COPY . /var/www/html

# Start the Application
CMD ["composer", "start"]