# Start from the official Nginx image
FROM nginx

# Copy the configuration file into the Docker image
COPY nginxbasic.conf /etc/nginx/nginx.conf

# Expose port 80
EXPOSE 80