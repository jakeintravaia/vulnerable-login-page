FROM php:7-buster

WORKDIR /code

COPY . /code

ENTRYPOINT ["php", "-S", "0.0.0.0:8000"]

