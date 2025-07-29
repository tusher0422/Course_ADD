# Course++ — Laravel Course Management System

A simple, beginner-friendly Laravel project that allows users to:
- Add unlimited courses
- Create multiple modules within a course
- Add contents (text, video, image, link) to each module
- Delete courses easily
- View course list in a clean interface

---

## Features

- Create courses with title, description, and category
- Add modules dynamically with content types and values
- Frontend & backend validation to ensure clean data
- Error handling with friendly messages
- Clean UI using Bootstrap 5
- Eloquent relationships between Course → Module → Content
- Followed Laravel MVC pattern for clean structure

---

## Technologies Used

- Laravel Framework 12.16.0
- PHP 8.2.12
- Composer 2.8.4
- MySQL (or any supported DB)
- Bootstrap 5 (via CDN)
- jQuery (via CDN)

---

## Getting Started (Project Setup)

> Skip this section if you already have the project running.


# Step 1: Clone the repo
git clone [https://github.com/username/Course_ADD.git](https://github.com/tusher0422/Course_ADD.git)
cd laravel-course-system

# Step 2: Install dependencies
composer install

# Step 3: Copy and edit .env
cp .env.example .env
# Set DB credentials inside .env

# Step 4: Generate key & run migrations
php artisan key:generate
php artisan migrate

# Step 5: Serve the project
php artisan serve


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
