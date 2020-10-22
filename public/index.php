<?php
    
require "../vendor/autoload.php";

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__.'/../src/views');
$twig = new Environment($loader, ['debug' => true]);

$products = ['Kebab', 'Salami', 'Viande de cheval', 'VIANDE !'];

echo $twig->render('index.html.twig', ["products" => $products]);



