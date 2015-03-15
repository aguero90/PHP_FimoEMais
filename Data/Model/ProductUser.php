<?php

/**
 *
 * @author alex
 */
interface ProductUser {

    /**
     * @return int the productUser's ID
     */
    public function getID();

    /**
     * @return Product the productUser's product
     */
    public function getProduct();

    /**
     * @return user the productUser's user
     */
    public function getUser();

    /**
     * @return Date the productUser's date
     */
    public function getDate();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Date $date
     * @return ProductUser the productUser object
     */
    public function setDate(MyDate $date);

    /**
     * @return int the productUser's amount
     */
    public function getAmount();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param int $amount
     * @return ProductUser the productUser object
     */
    public function setAmount($amount);

    /**
     * @return boolean if the post is dirty
     */
    public function isDirty();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param boolean $dirty
     * @return ProductUser the productUser object
     */
    public function setDirty($dirty);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param ProductUser $productUser
     * @return ProductUser the productUser object
     */
    public function copyFrom(ProductUser $productUser);
}
