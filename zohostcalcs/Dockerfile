# FROM ubuntu:latest
# ARG DEBIAN_FRONTEND=noninteractive
# RUN apt update
# RUN apt upgrade -y
# RUN apt install -y apache2
# RUN apt-get update && apt-get install -y \
#     libpq-dev \
#     && docker-php-ext-install mysqli pdo pdo_mysql
# # RUN rm /var/www/html/index.html
# COPY ./SR-Flats-main/ /var/www/html 


# VOLUME ["/var/www/html"]
# CMD /usr/sbin/apache2ctl -D FOREGROUND
# Use the official PHP image as the base image
FROM php:latest

# Install required dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Install Adminer
WORKDIR /var/www/html

COPY ./SR-Flats-main/ /var/www/html 

# Expose port 80 for web access
EXPOSE 80

# Start PHP built-in web server
CMD ["php", "-S", "0.0.0.0:80"]
