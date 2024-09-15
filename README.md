- A permission is the right to have access to something, such as a page in a web app. A role is just a collection of permissions.
  
- Technology: HTML, Tailwind CSS, Laravel, Mysql, Spatie

- ** Major Features Include **
  - User Management
  - Role Management
  - Articles Management
  - Define roles such as admin, editor, user, etc
  - Create permissions such as create post, edit post, delete post
  - Middleware Restrict access based on user roles & permissions.

- ** Installation **
  - Clone or download repository then:
  - download zip file or clone the project
  - run : cd `laravel-roles-permissions`
  - run : `cp .env.example .env`
  - open .env and update DB_DATABASE Name
  - run : `composer install`
  - run : `php artisan key:generate`
  - run : `php artisan migrate:fresh --seed`
  - run : `php artisan serve`
