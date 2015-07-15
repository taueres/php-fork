FROM php:5.6

# set timezone
RUN echo "date.timezone = Europe/Rome" > /usr/local/etc/php/conf.d/timezone.ini

# install pcntl extension
RUN docker-php-ext-install pcntl

CMD php /root/php-fork/main.php
