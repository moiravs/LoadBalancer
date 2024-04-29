# Use the Nginx image from Docker Hub
FROM php:7.2-fpm-nginx

# Remove the default Nginx configuration file
RUN rm /etc/nginx/conf.d/default.conf

# Replace it with your own configuration file
COPY /etc/nginx/sites-available/default /etc/nginx/sites-available

# Copy your PHP file into the Docker image
COPY /home/emily/Documents/loadBalancing/website/index.php /var/www/html/