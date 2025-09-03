<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/database.php';

$router = new \Bramus\Router\Router();

$router->get('/', function () {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Boilerplate</title>
    </head>

    <body>
        <h1>My PHP boilerplate</h1>
    </body>

    </html>
<?php
});

$router->get('/about', function () {
    echo '<h1>About Us</h1>';
});

$router->run();
