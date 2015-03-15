<?php

require_once "../../Utils/Autoloader.php";

        const COMMENTS = 1;
        const GROUPS = 2;
        const IMAGES = 3;
        const POSTS = 4;
        const PRODUCTS = 5;
        const USERS = 6;



var_dump($_POST);

$dl = new FeMDataLayerMySQL();
$dl->init();


switch ((int) $_POST["what"]) {

    case COMMENTS:
        $comments = $dl->getComments();
        var_dump($comments);
        break;

    case GROUPS:
        $groups = $dl->getGroups();
        var_dump($groups);
        break;

    case IMAGES:
        $images = $dl->getImages();
        var_dump($images);
        break;

    case POSTS:
        $posts = $dl->getPosts();
        var_dump($posts);
        break;

    case PRODUCTS:
        $products = $dl->getProducts();
        var_dump($products);
        break;

    case USERS:
        $users = $dl->getUsers();
        var_dump($users);
        break;

    default:
        echo "URL NON VALIDA!";
        break;
}

