<?php

/**
 *
 * @author alex
 */
interface Product {

    /**
     * @return int the product's ID
     */
    public function getID();

    /**
     * @return String the product's name
     */
    public function getName();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $name
     * @return Product the product object
     */
    public function setName($name);

    /**
     * @return double the product's price
     */
    public function getPrice();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param double $price
     * @return Product the product object
     */
    public function setPrice($price);

    /**
     * @return int the product's amount
     */
    public function getAmount();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param int $amount
     * @return Product the product object
     */
    public function setAmount($amount);

    /**
     * @return String the product's description
     */
    public function getDescription();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $description
     * @return Product the product object
     */
    public function setDescription($description);

    /**
     * @return boolean if the product is dirty
     */
    public function isDirty();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param boolean $dirty
     * @return Product the product object
     */
    public function setDirty($dirty);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Product $product
     * @return Product the product object
     */
    public function copyFrom(Product $product);

    // ========================================================================
    // RELATIONSHIP
    // ========================================================================

    /**
     * @return Array the product's posts
     */
    public function getPosts();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Array $posts
     * @return Product the product object
     */
    public function setPosts(array $posts);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Post $post
     * @return Product the product object
     */
    public function addPost(Post $post);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Post $post
     * @return Product the product object
     */
    public function removePost(Post $post);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @return Product the product object
     */
    public function removeAllPosts();

    /**
     * @return Array the product's images
     */
    public function getImages();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Array $images
     * @return Product the product object
     */
    public function setImages(array $images);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Image $image
     * @return Product the product object
     */
    public function addImage(Image $image);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Image $image
     * @return Product the product object
     */
    public function removeImage(Image $image);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @return Product the product object
     */
    public function removeAllImages();

    /**
     * @return Array the product-user info
     */
    public function getAllProductUser();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Array $productUser
     * @return Product the product object
     */
    public function setProductUser(array $productUser);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param ProductUser $productUser
     * @return Product the product object
     */
    public function addProductUser(ProductUser $productUser);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param ProductUser $productUser
     * @return Product the product object
     */
    public function removeProductUser(ProductUser $productUser);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @return Product the product object
     */
    public function removeAllProductUser();
}
