# Fortrigee

Welcome to the Fortrigge repository! This is a Property Management System.

## Getting Started

### Prerequisites

Before you begin, ensure you have the following installed on your machine:

- [PHP](https://www.php.net/downloads.php) (>= 7.4)
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

```bash
php artisan migrate
php artisan db:seed
