# Emaus Rzeszów

Website for local church, live version: https://emaus.rzeszow.pl/

===

## Table of contents

- [Local setup](#Local-setup)
- [Production-build](#Production-build)
- [Change to local](#Change-to-local)
- [Technologies](#technologies)

## Local setup

- `composer install`
- check `APP_ENV=dev` in `.env`
- `./bin/console cache:clear` (clear cache)
- `yarn install`
- `yarn watch`
- `symfony serve`

## Production build

- Chenge `dev` to `prod` in `.env` (`APP_ENV=dev`)
- Reinstal vendor (remove `vendor` directory first)

```
composer install --no-dev --optimize-autoloader
```

- `yarn build` (compile production assets)
- `./bin/console cache:clear` (clear cache)
- `./bin/console cache:warmup` (rebuild cache)
- Upload all files except `.git`, `assets`, `node_modules`, `var`
- On production cereate `var` directory (or clear all directory)

## Change to local

- Chenge `prod` to `dev` in `.env` (`APP_ENV=dev`)
- Reinstal vendor (remove `vendor` directory first)
- `composer install`
- `yarn watch`
- `symfony serve`

## Technologies

Project is created with:

- Symfony
- Encore
- HTML 5
- CSS 3
- Bootstrap 4
- Swiper
- JavaScript ES 6
- jQuery
