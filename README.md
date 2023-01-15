<p align="center">
<a href="https://github.com/s-damian/symfony-crud-example">
<img src="https://raw.githubusercontent.com/s-damian/medias/main/technos-logos/symfony.svg">
</a>
</p>

# Example of CRUD with Symfony 6 (6.2)

This example is made by [Stephen Damian](https://github.com/s-damian)

## Requirements

* PHP 8.1 || 8.2

## Summary

In this example of CRUD, there are:

* Examples of Article **Controllers** in **[src/Controller](https://github.com/s-damian/symfony-crud-example/tree/main/src/Controller)** directory.
* Example of Article **Entity** with **[src/Entity/Article.php](https://github.com/s-damian/symfony-crud-example/blob/main/src/Entity/Article.php)** file.
* Example of **Doctrine Event** with **[config/services.yaml](https://github.com/s-damian/symfony-crud-example/tree/main/config/services.yaml)** and **[App/EventListener/ArticleUpdatedListener.php](https://github.com/s-damian/symfony-crud-example/blob/main/src/EventListener/ArticleUpdatedListener.php)** files.
* Example of **Service** with **[src/Service/ActionTexts.php](https://github.com/s-damian/symfony-crud-example/blob/main/src/Service/ActionTexts.php)** file.
* Basic **validations** with **[config/validator/validation.yaml](https://github.com/s-damian/symfony-crud-example/tree/main/config/validator/validation.yaml)** file.
* Examples of Article **templates** in **[templates](https://github.com/s-damian/symfony-crud-example/tree/main/templates)** directory.
* Some basic **tests** (with PHPUnit) in **[tests](https://github.com/s-damian/symfony-crud-example/tree/main/tests)** directory.

## Configuration - Symfony App

Clone github repository:

```
git clone git@github.com:s-damian/symfony-crud-example.git
```

In terminal, position yourself in the ```symfony-crud-example``` directory:

```
cd /your_path/symfony-crud-example/
```

Create and configure your ```.env.local``` file:

```
cp .env.local.example .env.local
```

In your ```.env.local``` file, you need to configure ```DATABASE_URL```.

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

And you can **Create** / **Read** (listing or show a single article) / **Update** / **Delete** articles.
