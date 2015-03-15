<?php

/**
 * Description of PostMySQL
 *
 * @author alex
 */
class PostMySQL implements Post {

    private $ID;
    private $title;
    private $text;
    private $date;
    protected $dirty;
    protected $dataLayer;
    private $userID;
    private $user;
    private $comments;
    private $products;

    public function __construct(FeMDataLayer $dataLayer, array $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(FeMDataLayer $dataLayer) {

        $this->ID = 0;
        $this->title = "";
        $this->text = "";
        $this->date = null;

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->userID = 0;
        $this->user = null;
        $this->comments = null;
        $this->products = null;
    }

    private function constructorDataAndResult(FeMDataLayer $dataLayer, array $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->title = $resultSet["title"];
        $this->text = $resultSet["text"];
        $this->date = new MyDate($resultSet["date"]);
        $this->userID = (int) $resultSet["userID"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getText() {
        return $this->text;
    }

    public function getDate() {
        return $this->date;
    }

    public function isDirty() {
        return $this->dirty;
    }

    public function getUser() {
        if ($this->userID > 0 && MyUtils::isEmpty($this->user)) {
            $this->user = $this->dataLayer->getUser($this->userID);
        }
        return $this->user;
    }

    public function getComments() {
        if (MyUtils::isEmpty($this->comments)) {
            $this->comments = $this->dataLayer->getComments($this);
        }
        return $this->comments;
    }

    public function getProducts() {
        if (MyUtils::isEmpty($this->products)) {
            $this->products = $this->dataLayer->getProducts($this);
        }
        return $this->products;
    }

    public function setTitle($title) {
        $this->title = $title;
        $this->dirty = true;
        return $this;
    }

    public function setText($text) {
        $this->text = $text;
        $this->dirty = true;
        return $this;
    }

    public function setDate(MyDate $date) {
        $this->date = $date;
        $this->dirty = true;
        return $this;
    }

    public function setDirty($dirty) {
        $this->dirty = $dirty;
        return $this;
    }

    public function setUser(User $user) {
        $this->userID = $user->getID();
        $this->user = $user;
        $this->dirty = true;
        return $this;
    }

    public function setComments(array $comments) {
        $this->comments = $comments;
        $this->dirty = true;
        return $this;
    }

    public function setProducts(array $products) {
        $this->products = $products;
        $this->dirty = true;
        return $this;
    }

    public function addComment(Comment $comment) {
        array_push($this->getComments(), $comment);
        $this->dirty = true;
        return $this;
    }

    public function addProduct(Product $product) {
        array_push($this->getProducts(), $product);
        $this->dirty = true;
        return $this;
    }

    public function removeAllComments() {
        unset($this->comments);
        $this->comments = array();
        $this->dirty = true;
        return $this;
    }

    public function removeAllProducts() {
        unset($this->products);
        $this->products = array();
        $this->dirty = true;
        return $this;
    }

    public function removeComment(Comment $comment) {
        if (($key = array_search($comment, $this->getComments())) !== false) {
            unset($this->comments[$key]);
        }
        $this->dirty = true;
        return $this;
    }

    public function removeProduct(Product $product) {
        if (($key = array_search($product, $this->getProducts())) !== false) {
            unset($this->products[$key]);
        }
        $this->dirty = true;
        return $this;
    }

    public function copyFrom(Post $post) {

        $this->ID = $post->getID();
        $this->title = $post->getTitle();
        $this->text = $post->getText();
        $this->date = $post->getDate();

        if (!MyUtils::isEmpty($post->getUser())) {
            $this->userID = $post->getUser()->getID();
        }
        unset($this->user);
        $this->user = null;

        unset($this->comments);
        unset($this->products);
        $this->comments = null;
        $this->products = null;

        $this->dirty = true;

        return $this;
    }

}
