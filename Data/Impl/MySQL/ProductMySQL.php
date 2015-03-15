<?php

/**
 * Description of ProductMySQL
 *
 * @author alex
 */
class ProductMySQL implements Product {

    private $ID;
    private $name;
    private $price;
    private $amount;
    private $description;
    protected $dirty;
    protected $dataLayer;
    private $posts;
    private $images;
    private $productUser;

    public function __construct(FeMDataLayer $dataLayer, array $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(FeMDataLayer $dataLayer) {

        $this->ID = 0;
        $this->name = "";
        $this->price = 0.0;
        $this->amount = 0;
        $this->description = "";

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->posts = null;
        $this->images = null;
        $this->productUser = null;
    }

    private function constructorDataAndResult(FeMDataLayer $dataLayer, array $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->name = $resultSet["name"];
        $this->price = (double) $resultSet["price"];
        $this->amount = (int) $resultSet["amount"];
        $this->description = $resultSet["description"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getDescription() {
        return $this->description;
    }

    public function isDirty() {
        return $this->dirty;
    }

    public function getPosts() {
        if (MyUtils::isEmpty($this->posts)) {
            $this->posts = $this->dataLayer->getPosts($this);
        }
        return $this->posts;
    }

    public function getImages() {
        if (MyUtils::isEmpty($this->images)) {
            $this->images = $this->dataLayer->getImages($this);
        }
        return $this->images;
    }

    public function getAllProductUser() {
        if (MyUtils::isEmpty($this->productUser)) {
            $this->productUser = $this->dataLayer->getAllProductUser($this);
        }
        return $this->productUser;
    }

    public function setName($name) {
        $this->name = $name;
        $this->dirty = true;
        return $this;
    }

    public function setPrice($price) {
        $this->price = $price;
        $this->dirty = true;
        return $this;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        $this->dirty = true;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        $this->dirty = true;
        return $this;
    }

    public function setDirty($dirty) {
        $this->dirty = $dirty;
        return $this;
    }

    public function setPosts(array $posts) {
        $this->posts = $posts;
        $this->dirty = true;
        return $this;
    }

    public function setImages(array $images) {
        $this->images = $images;
        $this->dirty = true;
        return $this;
    }

    public function setProductUser(array $productUser) {
        $this->productUser = $productUser;
        $this->dirty = true;
        return $this;
    }

    public function addImage(Image $image) {
        array_push($this->getImages(), $image);
        $this->dirty = true;
        return $this;
    }

    public function addPost(Post $post) {
        array_push($this->getPosts(), $post);
        $this->dirty = true;
        return $this;
    }

    public function addProductUser(ProductUser $productUser) {
        array_push($this->getAllProductUser(), $productUser);
        $this->dirty = true;
        return $this;
    }

    public function removeAllImages() {
        unset($this->images);
        $this->images = array();
        $this->dirty = true;
        return $this;
    }

    public function removeAllPosts() {
        unset($this->posts);
        $this->posts = array();
        $this->dirty = true;
        return $this;
    }

    public function removeAllProductUser() {
        unset($this->productUser);
        $this->productUser = array();
        $this->dirty = true;
        return $this;
    }

    public function removeImage(Image $image) {
        if (($key = array_search($image, $this->getImages())) !== false) {
            unset($this->images[$key]);
        }
        $this->dirty = true;
        return $this;
    }

    public function removePost(Post $post) {
        if (($key = array_search($post, $this->getPosts())) !== false) {
            unset($this->posts[$key]);
        }
        $this->dirty = true;
        return $this;
    }

    public function removeProductUser(ProductUser $productUser) {
        if (($key = array_search($productUser, $this->getAllProductUser())) !== false) {
            unset($this->productUser[$key]);
        }
        $this->dirty = true;
        return $this;
    }

    public function copyFrom(Product $product) {

        $this->ID = $product->getID();
        $this->name = $product->getName();
        $this->price = $product->getPrice();
        $this->amount = $product->getAmount();
        $this->description = $product->getDescription();

        unset($this->images);
        unset($this->posts);
        unset($this->productUser);
        $this->images = null;
        $this->posts = null;
        $this->productUser = null;

        $this->dirty = true;
        return $this;
    }

}
