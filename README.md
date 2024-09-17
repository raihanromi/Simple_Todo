# TODO APP
Created a simple todo app in laravel 

## Tech Stack:
1. laravel
2. Tailwind 
3. Blade templet

## Features
- Create, update, and delete todo items
- Mark todos as complete
- Incomplete todos appear first, sorted by newest


## How to run the app

1. Clone the repository
 
2. Install PHP dependencies:
   ```
   composer install
   ```

3. Create a copy of the `.env.example` file and rename it to `.env`:
   ```
   cp .env.example .env
   ```

4. Generate an application key:
   ```
   php artisan key:generate
   ```

5. Run database migrations:
   ```
   php artisan migrate
   ```

6. Start the development server:
   ```
   php artisan serve
   ```
