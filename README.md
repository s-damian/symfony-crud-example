<p align="center">
<a href="https://github.com/s-damian/symfony-crud-example">
<img src="https://raw.githubusercontent.com/s-damian/medias/main/technos-logos/symfony.svg">
</a>
</p>

# Example of CRUD with Symfony 6.2

This example is made by [Stephen Damian](https://github.com/s-damian)

## Requirements

* PHP >= 8.1


## Configuration

Clone github repository:

```
git@github.com:s-damian/symfony-crud-example.git
```

In terminal, position yourself in the ```symfony-crud-example``` repository:

```
cd /your_path/symfony-crud-example/
```

Create and configure your ```.env.local``` file:

```
cp .env.local.example .env.local
```

Install dependencies with composer:

```
composer install
```

Create the database:

```
php bin/console doctrine:database:create
```

Run migrations:

```
php bin/console doctrine:migrations:migrate
```


## Configuration - Web Server

You have to configure your web server (Linux / Nginx or Apache / MySQL or PostgreSQL / PHP).

## After configuring your Web Server, you can run these demo URLs

* http://www.your-domain.com/admin/articles

* http://www.your-domain.com/admin/articles/create

And you can **Create** / **Read** (listing or one article) / **Update** / **Delete** articles.


## Configuration - Testing with PHPUnit

### Prepare the test database

Create and configure your ```.env.test.local``` file. In this file you need to configure ```DATABASE_URL``` environment variable.

Create the test database:

```
php bin/console --env=test doctrine:database:create
```

Create the tables/columns int test database:

```
php bin/console --env=test doctrine:schema:create
```

### Run the tests

Run:

```
php bin/phpunit
```
