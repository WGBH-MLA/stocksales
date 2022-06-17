FROM wordpress:latest

ENV WORDPRESS_DB_HOST "mysql:3306"
ENV WORDPRESS_DB_USER "root"
ENV WORDPRESS_DB_PASSWORD ""
ENV WORDPRESS_DB_NAME "wordpress_db"

COPY ./wordpress /var/www/html
