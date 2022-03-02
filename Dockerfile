FROM wordpress:latest

ENV WORDPRESS_DB_HOST 'wordpress-mysql:3306'
ENV WORDPRESS_DB_USER wordpress_user
ENV WORDPRESS_DB_PASSWORD wordpress_password
ENV WORDPRESS_DB_NAME wordpress_db

COPY ./wordpress /var/www/html

# CMD ["bundle", "exec", "puma", "-p", "3000", "-C", "config/puma.rb"]
