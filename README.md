# Fortrigee

Welcome to the Fortrigge repository! This is a Property Management System.

## Getting Started

### Prerequisites

Before you begin, ensure you have the following installed on your machine:

- [PHP](https://www.php.net/downloads.php) (>= 8.1)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/) (>= 14.x)
- [NPM](https://www.npmjs.com/get-npm) or [Yarn](https://yarnpkg.com/getting-started/install)

### Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/denyzabra/Fortrigge.git
    ```

2. **Navigate to the project folder:**

    ```bash
    cd Fortrigge
    ```

3. **Install PHP dependencies:**

    ```bash
    composer install
    ```

4. **Install JavaScript dependencies:**

    ```bash
    npm install
    ```

    or

    ```bash
    yarn install
    ```

5. **Create a copy of the `.env` file:**

    ```bash
    cp .env.example .env
    ```

6. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

7. **Configure the database:**

    - Create a new database and update the `.env` file with your database credentials.

    ```bash
    php artisan migrate
    ```

    Optionally, seed the database with sample data:

    ```bash
    php artisan db:seed
    ```

8. **Start the development server:**

    ```bash
    php artisan serve
    ```

    Your application should now be running at `http://localhost:8000`.

9. **optional: Compile assets:**

    ```bash
    npm run dev
    ```

    or

    ```bash
    yarn dev
    ```

### Database Migration and Seeding

To keep your local database in sync with the latest changes:



## Contributing to Frontend Development

If you are a frontend developer contributing to this Laravel project, here are some guidelines to help you get started with the frontend aspects.

### Laravel and Frontend Development

1. **Understanding Laravel:**

   Familiarize yourself with Laravel, the PHP framework used in this project. Refer to the official [Laravel Documentation](https://laravel.com/docs) for detailed information.

2. **Blade Templates:**

   Laravel uses Blade templating engine for views. Learn about Blade syntax and how to create dynamic views: [Blade Templates Documentation](https://laravel.com/docs/blade).

3. **Layouts and Views:**

   - Views are located in the `resources/views` directory.
   - Common layout components may be found in the `resources/views/layouts` directory.
   - Focus on building and enhancing frontend views for different features.

4. **Asset Compilation:**

   - Laravel Mix is used for asset compilation. Refer to [Laravel Mix Documentation](https://laravel-mix.com/docs) for compiling assets like CSS and JavaScript.

5. **Navigating the Application:**

   - The application's routes are defined in the `routes/web.php` file.
   - Explore and understand the routes to know how different views are linked.

### Where to Focus

1. **Views:**

   - Locate the views related to different features in the `resources/views` directory.
   - Enhance existing views for better user experience.
   - Create new views for additional features.

2. **Layouts:**

   - Reusable layout components can be found in the `resources/views/layouts` directory.
   - Modify layouts for consistent styling and structure.

3. **CSS and JavaScript:**

   - Stylesheets and JavaScript files are located in the `resources/assets` or `resources/js` directories.
   - Use Laravel Mix to compile and manage assets.

4. **Components and Partials:**

   - Break down views into components and partials for better maintainability.
   - Encourage reusability by creating modular components.


























```bash
php artisan migrate
php artisan db:seed
