<?php

/**
 *
 * @author alex
 */
interface Comment {

    /**
     * @return int the comments ID
     */
    public function getID();

    /**
     * @return String the comment's username
     */
    public function getUsername();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $username
     * @return Comment the comment object
     */
    public function setUsername($username);

    /**
     * @return String the comment's text
     */
    public function getText();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $text
     * @return Comment the comment object
     */
    public function setText($text);

    /**
     * @return Date the comment's date
     */
    public function getDate();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Date $date
     * @return Comment the comment object
     */
    public function setDate(MyDate $date);

    /**
     * @return boolean if the comment is dirty
     */
    public function isDirty();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param boolean $dirty
     * @return Comment the comment object
     */
    public function setDirty($dirty);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Comment $comment
     * @return Comment the comment object
     */
    public function copyFrom(Comment $comment);

    // ========================================================================
    // RELATIONSHIP
    // ========================================================================

    /**
     * @return Post the comment's post
     */
    public function getPost();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Post $post
     * @return Comment the comment object
     */
    public function setPost(Post $post);

    /**
     * @return User if the comment has user
     * @return null if the comment has not user
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
}
