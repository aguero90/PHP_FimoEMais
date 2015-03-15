<?php

/**
 *
 * @author alex
 */
interface Image {

    /**
     * @return int the image's ID
     */
    public function getID();

    /**
     * @return String the image's real name
     */
    public function getRealName();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $realName
     * @return Image the image object
     */
    public function setRealName($realName);

    /**
     * @return String the image's fake name
     */
    public function getFakeName();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $fakeName
     * @return Image the image object
     */
    public function setFakeName($fakeName);

    /**
     * @return String the image's description
     * @return null if the image has not description
     */
    public function getDescription();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $description
     * @return Image the image object
     */
    public function setDescription($description);

    /**
     * @return boolean if the image is dirty
     */
    public function isDirty();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param boolean $dirty
     * @return Image the image object
     */
    public function setDirty($dirty);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Imege $image
     * @return Image the image object
     */
    public function copyFrom(Image $image);

    // ========================================================================
    // RELATIONSHIP
    // ========================================================================

    /**
     * @return Product the comment's product
     */
    public function getProduct();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Product $product
     * @return Image the image object
     */
    public function setProduct(Product $product);
}
