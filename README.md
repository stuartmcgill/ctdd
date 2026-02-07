# Development

## Start the environment

Start the database:

```bash
sail up -d
```

Serve the site:

```bash
php artisan serve
```

```bash
npm run dev
```

## Setup

```bash
php artisan storage:link
```

The admin user for the site is a01@ctdd.uk.

# Production

## First-time setup

```bash
php artisan storage:link
```

## Update to a new version

```shell
git fetch

## Checkout to the appropriate tag
git checkout v.1.3.0

## PHP updates
composer install --no-dev
php artisan migrate

## JS updates
npm ci
npm run build
npm install --omit-dev
```
