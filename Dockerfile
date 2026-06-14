FROM php:8.2-apache
# Enable Apache rewrite module for clean URLs
RUN a2enmod rewrite
# Install MySQL extension
RUN docker-php-ext-install mysqli
# Copy your project to the web directory
COPY . /var/www/html/
# Set permissions
RUN chown -R www-data:www-data /var/www/html