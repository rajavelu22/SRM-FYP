FROM php:7.4-apache

# Install PHP extensions required by the app
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git \
  && docker-php-ext-install mysqli pdo pdo_mysql \
  && apt-get clean && rm -rf /var/lib/apt/lists/*

# Enable mod_rewrite (often needed)
RUN a2enmod rewrite

WORKDIR /var/www/html

# (We mount ./srms into /var/www/html during development, but copy a safety fallback)
COPY srms/ /var/www/html/

# fix permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
