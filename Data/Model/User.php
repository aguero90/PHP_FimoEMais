<?php

/**
 *
 * @author alex
 */
interface User {

    /**
     * @return int the users's ID
     */
    public function getID();

    /**
     * @return String the users's username
     */
    public function getUsername();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $username
     * @return User the user object
     */
    public function setUsername($username);

    /**
     * @return String the users's password
     */
    public function getPassword();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $password
     * @return User the user object
     */
    public function setPassword($password);

    /**
     * @return String the users's email
     */
    public function getEmail();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $email
     * @return User the user object
     */
    public function setEmail($email);

    /**
     * @return boolean if the user is dirty
     */
    public function isDirty();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param boolean $dirty
     * @return User the user object
     */
    public function setDirty($dirty);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param User $user
     * @return User the user object
     */
    public function copyFrom(User $user);

    // ========================================================================
    // RELATIONSHIP
    // ========================================================================

    /**
     * @return Group the user's group
     */
    public function getGroup();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Group $group
     * @return User the user object
     */
    public function setGroup(Group $group);

    /**
     * @return Array the user's comments
     */
    public function getComments();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Array $comments
     * @return User the user object
     */
    public function setComments(array $comments);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Comment $comment
     * @return User the user object
     */
    public function addComment(Comment $comment);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Comment $comment
     * @return User the user object
     */
    public function removeComment(Comment $comment);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @return User the user object
     */
    public function removeAllComments();

    /**
     * @return Array the user's posts
     */
    public function getPosts();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Array $posts
     * @return User the user object
     */
    public function setPosts(array $posts);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Post $post
     * @return User the user object
     */
    public function addPost(Post $post);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Post $post
     * @return User the user object
     */
    public function removePost(Post $post);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @return User the user object
     */
    public function removeAllPosts();

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
     * @return User the user object
     */
    public function setProductUser(array $productUser);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param ProductUser $productUser
     * @return User the user object
     */
    public function addProductUser(ProductUser $productUser);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param ProductUser $productUser
     * @return User the user object
     */
    public function removeProductUser(ProductUser $productUser);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @return User the user object
     */
    public function removeAllProductUser();
}
