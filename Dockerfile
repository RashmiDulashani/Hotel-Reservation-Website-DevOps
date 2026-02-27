# Use the official PHP image with Apache, version 8.2
FROM php:8.2-apache

# Install PHP extensions for MySQL support
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy your PHP project files
COPY src/ /var/www/html/

# Set ownership of files to 'www-data' (Apache user)
# Ensures Apache can read/write files properly
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 to allow web traffic into the container
EXPOSE 80

# Optional: Health check to see if the web server is running
# Tries to curl the homepage; fails if server is down
HEALTHCHECK CMD curl --fail http://localhost/ || exit 1
