<?php

/**
 * Description of ProductUserMySQL
 *
 * @author alex
 */
class ProductUserMySQL implements ProductUser {

    private $ID;
    private $date;
    private $amount;
    protected $dirty;
    protected $dataLayer;
    private $productID;
    private $product;
    private $userID;
    private $user;

    public function __construct(FeMDataLayer $dataLayer, array $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(FeMDataLayer $dataLayer) {

        $this->ID = 0;
        $this->date = null;
        $this->amount = 0;

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->productID = 0;
        $this->product = null;
        $this->userID = 0;
        $this->user = null;
    }

    private function constructorDataAndResult(FeMDataLayer $dataLayer, array $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->date = new MyDate($resultSet["date"]);
        $this->amount = (int) $resultSet["amount"];

        $this->productID = (int) $resultSet["productID"];
        $this->userID = (int) $resultSet["userID"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getDate() {
        return $this->date;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function isDirty() {
        return $this->dirty;
    }

    public function getProduct() {
        if ($this->productID > 0 && MyUtils::isEmpty($this->product)) {
            $this->product = $this->dataLayer->getProduct($this->productID);
        }
        return $this->product;
    }

    public function getUser() {
        if ($this->userID > 0 && MyUtils::isEmpty($this->user)) {
            $this->user = $this->dataLayer->getUser($this->userID);
        }
        return $this->user;
    }

    public function setDate(MyDate $date) {
        $this->date = $date;
        $this->dirty = true;
        return $this;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        $this->dirty = true;
        return $this;
    }

    public function setDirty($dirty) {
        $this->dirty = $dirty;
        return $this;
    }

    public function setProduct(Product $product) {
        $this->productID = $product->getID();
        $this->product = $product;
        $this->dirty = true;
        return $this;
    }

    public function setUser(User $user) {
        $this->userID = $user->getID();
        $this->user = $user;
        $this->dirty = true;
        return $this;
    }

    public function copyFrom(ProductUser $productUser) {

        $this->ID = $productUser->getID();
        $this->date = $productUser->getDate();
        $this->amount = $productUser->getAmount();

        if (!MyUtils::isEmpty($productUser->getProduct())) {
            $this->productID = $productUser->getProduct()->getID();
        }
        unset($this->product);
        $this->product = null;

        if (!MyUtils::isEmpty($productUser->getUser())) {
            $this->userID = $productUser->getUser()->getID();
        }
        unset($this->user);
        $this->user = null;

        $this->dirty = true;
        return $this;
    }

}
