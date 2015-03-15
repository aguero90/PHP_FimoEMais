<?php

require_once "../../Utils/Autoloader.php";

        const COMMENT = 1;
        const GROUP = 2;
        const IMAGE = 3;
        const POST = 4;
        const PRODUCT = 5;
        const USER = 6;



var_dump($_POST);

$dl = new FeMDataLayerMySQL();
$dl->init();


switch ((int) $_POST["what"]) {

    case COMMENT:
        $comment = $dl->createComment();
        $comment->setUsername($_POST["username"]);
        $comment->setText($_POST["text"]);
        $comment->setPost($dl->getPost((int) $_POST["postID"]));
        if (((int) $_POST["userID"]) > 0) {
            $comment->setUser($dl->getUser((int) $_POST["userID"]));
        }
        $dl->storeComment($comment);
        var_dump($comment);
        break;

    case GROUP:
        $group = $dl->createGroup();
        $group->setName($_POST["name"]);
        $group->setDescription($_POST["description"]);
        $dl->storeGroup($group);
        var_dump($group);
        break;

    case IMAGE:
        $image = $dl->createImage();
        $image->setRealName($_POST["realName"]);
        $image->setFakeName($_POST["fakeName"]);
        $image->setDescription($_POST["description"]);
        $image->setProduct($dl->getProduct((int) $_POST["productID"]));
        $dl->storeImage($image);
        var_dump($image);
        break;

    case POST:
        $post = $dl->createPost();
        $post->setTitle($_POST["title"]);
        $post->setText($_POST["text"]);
        $post->setUser($dl->getUser((int) $_POST["userID"]));
        $dl->storePost($post);
        var_dump($post);
        break;

    case PRODUCT:
        $product = $dl->createProduct();
        $product->setName($_POST["name"]);
        $product->setPrice((double) $_POST["price"]);
        $product->setAmount((int) $_POST["amount"]);
        $product->setDescription($_POST["description"]);
        $dl->storeProduct($product);
        var_dump($product);
        break;

    case USER:
        $user = $dl->createUser();
        $user->setUsername($_POST["username"]);
        $user->setPassword($_POST["password"]);
        $user->setEmail($_POST["email"]);
        $user->setGroup($dl->getGroup((int) $_POST["groupID"]));
        var_dump($user);
        $dl->storeUser($user);
        var_dump($user);
        break;

    default:
        echo "URL NON VALIDA!";
        break;
}







