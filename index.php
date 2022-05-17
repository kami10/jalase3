<?php

$address = $_GET['path'];
//echo $address;

switch($address){
    case 'contact':
        include 'src/Controller/contact.php';
        break;
    case 'about':
        include 'src/Controller/about.php';
        break;
    case 'news':
        include 'src/Controller/news.php';
        break;
    case 'home':
        include 'src/Controller/home.php';
        break;
    default:
        include 'src/Controller/error.html';
}
