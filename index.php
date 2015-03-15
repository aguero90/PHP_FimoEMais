<?php

require_once "Utils/Autoloader.php";

// definiamo alcune costanti
define("POST", 1);
define("POST_LIST", 2);
define("PRODUCT", 3);
define("PRODUCT_LIST", 4);

define("SECTION_ID", "s");
define("POST_ID", "p");
define("PRODUCT_ID", "o");


if (!MyUtils::isEmpty($_GET)) {

    var_dump($_GET);

    switch (filter_input(INPUT_GET, SECTION_ID, FILTER_SANITIZE_NUMBER_INT)) {

        case POST:
            echo 'POST';
            $postController = new PostController();
            $postController->processRequest();
            break;

        case POST_LIST:
            echo 'POST_LIST';
            $postListController = new PostListController();
            $postListController->processRequest();
            break;

        case PRODUCT:
            echo 'PRODUCT';
            $ProductController = new ProductController();
            $ProductController->processRequest();
            break;

        case PRODUCT_LIST:
            echo 'PRODUCT_LIST';
            $ProductListController = new ProductListController();
            $ProductListController->processRequest();
            break;

        default:
            // errore, inserita url non valida
            echo 'errore, inserita url non valida';
            break;
    }
} else {
    $postListController = new PostListController();
    $postListController->processRequest();
}


