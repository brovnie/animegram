# Instagram clone

---

## Technology used:

-   Vue.js v2.6.12
-   Laravel v8
-   PHP v8.0.28
-   MySQL v8.0.32
-   Docker

---

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

### Troubleshooting

List of commands that can be helpful:

Update composer

```
docker-compose exec laravel.test composer update
```

Clear laravel cache

```
docker-compose exec laravel.test php artisan config:clear
docker-compose exec laravel.test php artisan route:clear
docker-compose exec laravel.test php artisan view:clear

```
