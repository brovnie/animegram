# Instagram clone

Clon of the instagram website build with Vue and Laravel.
Made in: 2020
Last update: 2022

## Technology used:

-   Vue.js v2.6.12
-   Laravel v8
-   PHP v8.0.28
-   MySQL v8.0.32
-   Docker

## How to run:

Add database credits in .env.example file and change file name to .env

### Docker

Install docker:

```
docker-compose build
```

Run docker container with sail

```
./vendor/bin/sail up
```

### npm

Install npm

```
docker-compose exec laravel.test npm install
```

Run npm

```
docker-compose exec laravel.test npm run dev
```

errno: -13 look at troubleshooting

### Laravel

Set app key

```
docker-compose exec laravel.test php artisan key:generate
```

Create database

```
docker-compose exec laravel.test php artisan migrate
//or
docker-compose exec laravel.test php artisan migrate fresh
```

Create storage for imgs

```
docker-compose exec laravel.test php artisan storage:link
```

Run laravel app

```
docker-compose exec laravel.test php artisan serve
```

## Paths

Home: http://localhost
phpmyadmin: http://localhost:8080/

## Troubleshooting

### Update composer

```
docker-compose exec laravel.test composer update
```

### Clear laravel cache

```
docker-compose exec laravel.test php artisan config:clear
docker-compose exec laravel.test php artisan route:clear
docker-compose exec laravel.test php artisan view:clear
```

### npm run premission error

```
glob error [Error: EACCES: permission denied, scandir '/root/.npm/_logs'] {
  errno: -13,
  code: 'EACCES',
  syscall: 'scandir',
  path: '/root/.npm/_logs'
}
```

**Solution:** run npm from sail

```
docker-compose exec  laravel.test sh
su sail
npm run watch
```
