<p align="center">
<a href="https://github.com/s-damian/symfony-crud-example">
<img src="https://raw.githubusercontent.com/s-damian/medias/main/technos-logos/symfony.svg">
</a>
</p>

# Example of CRUD with Symfony 6.2

This example is developed by [Stephen Damian](https://github.com/s-damian)

## Getting Started

### Requirements

* PHP >= 8.1

### Configuration

Clone github repository:

```
git@github.com:s-damian/symfony-crud-example.git
```

Position yourself in the repository:

```
cd /your_path/symfony-crud-example/
```

Create and configure your ```.env.local``` file:

```
cp .env.local.example .env.local
```

Install dependencies composer:

```
composer install
```

Create the DB:

```
php bin/console doctrine:database:create
```

Run migrations:

```
php bin/console doctrine:migrations:migrate
```

### Configuration - Web Server

You have to configure your web server (Linux / Nginx or Apache / MySQL or PostgreSQL / PHP).

### After configuring your Web Server, you can run these demo URLs

* http://www.your-domain.com/admin/articles

* http://www.your-domain.com/admin/articles/create
