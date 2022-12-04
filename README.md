<p align="center">
<a href="https://github.com/s-damian/symfony-crud-example">
<img src="https://raw.githubusercontent.com/s-damian/medias/main/technos-logos/symfony.svg">
</a>
</p>

# Example of CRUD with Symfony 6.2

This example is made by [Stephen Damian](https://github.com/s-damian)

## Requirements

* PHP >= 8.1


## Summary

In this example of CRUD, there are:

* Examples of Article Controllers in **[src/Controller](https://github.com/s-damian/symfony-crud-example/tree/main/src/Controller)** directory.
* Example of Article Entity in **[src/Entity](https://github.com/s-damian/symfony-crud-example/tree/main/src/Entity)** directory.
* Example of Doctrine Event with **[config/services.yaml](https://github.com/s-damian/symfony-crud-example/tree/main/config/services.yaml)** and **[App/EventListener/ArticleUpdatedListener](https://github.com/s-damian/symfony-crud-example/blob/main/src/EventListener/ArticleUpdatedListener.php)** files.
* Basic validations in **[config/validator/validation.yaml](https://github.com/s-damian/symfony-crud-example/tree/main/config/validator/validation.yaml)** file.
* Examples of Article templates in **[templates](https://github.com/s-damian/symfony-crud-example/tree/main/templates)** directory.
* Some basic tests (with PHPUnit) in **[tests](https://github.com/s-damian/symfony-crud-example/tree/main/src/tests)** directory.


## Configuration

Clone github repository:

```
git@github.com:s-damian/symfony-crud-example.git
```

In terminal, position yourself in the ```symfony-crud-example``` directory:

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

And you can **Create** / **Read** (listing or one article) / **Update** / **Delete** articles.in/phpunit
