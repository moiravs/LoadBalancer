

# Start from the official Nginx image
FROM nginx

# Remove the default Nginx configuration file
RUN rm /etc/nginx/conf.d/default.conf

# Copy our configuration file into the Docker image
COPY nginx.conf /etc/nginx/conf.d/