# Use an official PHP image
FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy project files to the container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Expose the correct port for Render
EXPOSE 10000

# Start Apache
CMD ["apache2-foreground"]
