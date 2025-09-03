<?php


function render($content)
{
    require __DIR__ . '/../views/includes/header.php';
    require __DIR__ . "/../views/$content.php";
    require __DIR__ . '/../views/includes/footer.php';
}
