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


# Screnshots of the Project:
<img width="881" height="246" alt="Course_Home" src="https://github.com/user-attachments/assets/b99ef16f-caae-4ab3-85bd-3ff5925a877e" />

<img width="881" height="246" alt="Course_create" src="https://github.com/user-attachments/assets/81748605-d664-49c4-a93b-e36f58095362" />

<img width="881" height="246" alt="Course_created" src="https://github.com/user-attachments/assets/2745105a-d6a5-473a-86e8-83775cb0fec5" />

<img width="881" height="246" alt="Course_deleted" src="https://github.com/user-attachments/assets/2b9dad22-f199-4459-9bd0-5bbcef17be1b" />


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
