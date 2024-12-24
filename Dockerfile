# Dockerfile
FROM php:8.2-apache

# Copy your project files to the container
COPY . /var/www/html

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Install dependencies (if needed)
RUN docker-php-ext-install mysqli

# Make sure Apache can serve the static directory
COPY ./static /var/www/html/static
