FROM php:8.2-cli

RUN apt-get update && apt-get install -y procps && rm -rf /var/lib/apt/lists/*

RUN echo "expose_php = Off" > /usr/local/etc/php/conf.d/security.ini

WORKDIR /var/www/html
COPY . .

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "router.php"]
