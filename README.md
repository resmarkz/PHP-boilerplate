# PHP Boilerplate

A simple PHP boilerplate to kickstart your web application development.

## Features

- **Composer:** For dependency management.
- **Routing:** Using [bramus/router](https://github.com/bramus/router).
- **Simple View Rendering:** A basic structure with views, includes, and a render function.
- **Development Server:** Ready-to-use development server.

## Installation

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/resmarkz/PHP-boilerplate.git
    ```
2.  **Install dependencies:**
    ```bash
    composer install
    ```

## Usage

To start the development server, run one of the following commands:

```bash
composer start
```

or

```bash
composer run dev
```

Then, open your web browser and navigate to [http://localhost:1234](http://localhost:1234).

## Project Structure

- `public/`: The web root of the application. Contains the main `index.php`.
- `views/`: Contains the view files.
  - `includes/`: Contains reusable view partials like header and footer.
- `config/`: For configuration files like `database.php`.
- `vendor/`: Contains the Composer dependencies.
