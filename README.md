## Description
his project is built on Laravel 10, a powerful PHP framework for web artisans. It integrates Laravel Breeze for quick and minimalistic scaffolding of authentication views and controllers, providing a simple way to implement user authentication features. Additionally, Laratrust, a flexible and easy-to-use package for managing roles and permissions in Laravel applications, is integrated to provide a robust foundation for implementing authentication, authorization, and access control.

Splade is also incorporated to enhance development by allowing the use of Vue.js with the familiarity and comfort of Laravel Blade syntax, facilitating seamless integration of front-end Vue components within Blade templates.

The project also utilizes a Tailwind CSS admin template to create a modern and responsive user interface for managing administrative tasks and interacting with the application's features.

## Features
Quick and minimalistic authentication scaffolding with Laravel Breeze
Role-based access control (RBAC) with Laratrust (https://laratrust.santigarcor.me)
Flexible permission management (https://laratrust.santigarcor.me)
Modern and responsive UI using Tailwind CSS admin template 
Seamless integration of Vue.js components with Laravel Blade syntax using Splade (https://splade.dev/)

## Installation
Clone the repository:

```git clone https://github.com/your_username/your_project.git```

Install dependencies:
```composer install```

Copy the .env.example file to .env and configure your environment variables, including database settings:
```cp .env.example .env```

Generate application key:
```php artisan key:generate```

Clear configuration cache:
```php artisan config:clear```

Migrate the database and seed with initial data:
```php artisan migrate --seed```

Run npm dev:
```npm run dev```

Serve the application:
```php artisan serve```
Visit http://localhost:8000 in your browser to view the application.
