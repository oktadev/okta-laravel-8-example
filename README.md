# Okta Laravel 8 Demo

This repository is an example of adding Okta authentication to Laravel 8.

## Local development

Using Docker:

- Clone this repo to your local machine
- Install the packages: `docker run -v $(pwd):/app --rm composer install`
- Build the image: `docker build -t laravel-8 .`
- Add the `OKTA_` variables to your `.env` file.
- Set `DB_CONNECTION=sqlite` in your `.env` file.
- Run migrations: `docker run -v $(pwd):/var/www/html -it --rm laravel-8 php artisan migrate`
- Run with volume: `docker run -v $(pwd):/var/www/html -d --name=laravel-8 --rm -p 8000:80 laravel-8`

View the app at `localhost:8000`
