# Use a proven PHP and Nginx image
FROM richarvey/nginx-php-fpm:latest

# Copy your entire project into the container
COPY . .

# Environment configurations for the image
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel environment configurations
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow Composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# The command to start the server
CMD ["/start.sh"]