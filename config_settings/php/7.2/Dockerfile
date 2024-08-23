# Use the official PHP 7.2 image with Apache
FROM php:7.2-apache

# Install necessary PHP extensions and other packages
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysqli pdo pdo_mysql zip \
    && a2enmod rewrite \
    && service apache2 restart

# Copy custom PHP configuration if needed
# COPY ./php.ini /usr/local/etc/php/

# Set the working directory to the web root
WORKDIR /var/www/html

# Expose the default Apache port
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
