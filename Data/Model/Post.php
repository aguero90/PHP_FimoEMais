<?php

/**
 *
 * @author alex
 */
interface Post {

    /**
     * @return int the posts's ID
     */
    public function getID();

    /**
     * @return String the post's title
     */
    public function getTitle();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $title
     * @return Post the post object
     */
    public function setTitle($title);

    /**
     * @return String the post's text
     */
    public function getText();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $text
     * @return Post the post object
     */
    public function setText($text);

    /**
     * @return Date the post's date
     */
    public function getDate();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Date $date
     * @return Post the post object
     */
    public function setDate(MyDate $date);

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
     * @return Post the post object
     */
    public function setDirty($dirty);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Post $post
     * @return Post the post object
     */
    public function copyFrom(Post $post);

    // ========================================================================
    // RELATIONSHIP
    // ========================================================================

    /**
     * @return User the post's user
     */
    public function getUser();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param User $user
     * @return Comment the comment object
     */
    public function setUser(User $user);

    /**
     * @return Array the posts's comments
     */
    public function getComments();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Array $comments
     * @return Post the post object
     */
    public function setComments(array $comments);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Comment $comment
     * @return Post the post object
     */
    public function addComment(Comment $comment);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Comment $comment
     * @return Post the post object
     */
    public function removeComment(Comment $comment);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @return Post the post object
     */
    public function removeAllComments();

    /**
     * @return Array the posts's products
     */
    public function getProducts();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Array $products
     * @return Post the post object
     */
    public function setProducts(array $products);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Product $product
     * @return Post the post object
     */
    public function addProduct(Product $product);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Product $product
     * @return Post the post object
     */
    public function removeProduct(Product $product);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @return Post the post object
     */
    public function removeAllProducts();
}
