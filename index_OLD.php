<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/storage') {
    require 'storage.php';
    exit;
}
echo "Hello World! Juan Antonio Ruiz Francés";
