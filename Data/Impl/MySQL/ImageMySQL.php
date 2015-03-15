<?php

/**
 * Description of ImageMySQL
 *
 * @author alex
 */
class ImageMySQL implements Image {

    private $ID;
    private $realName;
    private $fakeName;
    private $description;
    protected $dirty;
    protected $dataLayer;
    private $productID;
    private $product;

    public function __construct(FeMDataLayer $dataLayer, array $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(FeMDataLayer $dataLayer) {

        $this->ID = 0;
        $this->realName = "";
        $this->fakeName = "";
        $this->description = "";

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->productID = 0;
        $this->product = null;
    }

    private function constructorDataAndResult(FeMDataLayer $dataLayer, array $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->realName = $resultSet["realName"];
        $this->fakeName = $resultSet["fakeName"];
        $this->description = $resultSet["description"];
        $this->productID = (int) $resultSet["productID"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getRealName() {
        return $this->realName;
    }

    public function getFakeName() {
        return $this->fakeName;
    }

    public function getDescription() {
        return $this->description;
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

    public function setRealName($realName) {
        $this->realName = $realName;
        $this->dirty = true;
        return $this;
    }

    public function setFakeName($fakeName) {
        $this->fakeName = $fakeName;
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

    public function setProduct(Product $product) {
        $this->productID = $product->getID();
        $this->product = $product;
        $this->dirty = true;
        return $this;
    }

    public function copyFrom(Image $image) {

        $this->ID = $image->getID();
        $this->realName = $image->getRealName();
        $this->fakeName = $image->getFakeName();
        $this->description = $image->getDescription();

        if (!MyUtils::isEmpty($image->getProduct())) {
            $this->productID = $image->getProduct()->getID();
        }
        unset($this->product);
        $this->product = null;

        $this->dirty = true;

        return $this;
    }

}
