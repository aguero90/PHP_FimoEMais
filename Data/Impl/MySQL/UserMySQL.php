<?php

/**
 * Description of UserMySQL
 *
 * @author alex
 */
class UserMySQL implements User {

    private $ID;
    private $username;
    private $password;
    private $email;
    protected $dirty;
    protected $dataLayer;
    private $groupID;
    private $group;
    private $comments;
    private $posts;
    private $productUser;

    public function __construct(FeMDataLayer $dataLayer, array $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(FeMDataLayer $dataLayer) {

        $this->ID = 0;
        $this->username = "";
        $this->password = "";
        $this->email = "";

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->groupID = 0;
        $this->group = null;
        $this->comments = null;
        $this->posts = null;
        $this->productUser = null;
    }

    private function constructorDataAndResult(FeMDataLayer $dataLayer, array $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->username = $resultSet["username"];
        $this->password = $resultSet["password"];
        $this->email = $resultSet["email"];

        $this->groupID = (int) $resultSet["groupID"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function isDirty() {
        return $this->dirty;
    }

    public function getGroup() {
        if ($this->groupID > 0 && MyUtils::isEmpty($this->group)) {
            $this->group = $this->dataLayer->getGroup($this->groupID);
        }
        return $this->group;
    }

    public function getComments() {
        if (MyUtils::isEmpty($this->comments)) {
            $this->comments = $this->dataLayer->getComments(null, $this);
        }
        return $this->comments;
    }

    public function getPosts() {
        if (MyUtils::isEmpty($this->posts)) {
            $this->posts = $this->dataLayer->getPosts($this);
        }
        return $this->posts;
    }

    public function getAllProductUser() {
        if (MyUtils::isEmpty($this->productUser)) {
            $this->productUser = $this->dataLayer->getAllProductUser(null, $this);
        }
        return $this->productUser;
    }

    public function setUsername($username) {
        $this->username = $username;
        $this->dirty = true;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        $this->dirty = true;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        $this->dirty = true;
        return $this;
    }

    public function setDirty($dirty) {
        $this->dirty = $dirty;
        return $this;
    }

    public function setGroup(Group $group) {
        $this->groupID = $group->getID();
        $this->group = $group;
        $this->dirty = true;
        return $this;
    }

    public function setComments(array $comments) {
        $this->comments = $comments;
        $this->dirty = true;
        return $this;
    }

    public function setPosts(array $posts) {
        $this->posts = $posts;
        $this->dirty = true;
        return $this;
    }

    public function setProductUser(array $productUser) {
        $this->productUser = $productUser;
        $this->dirty = true;
        return $this;
    }

    public function addComment(Comment $comment) {
        array_push($this->getComments(), $comment);
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

    public function removeAllComments() {
        unset($this->comments);
        $this->comments = array();
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

    public function removeComment(Comment $comment) {
        if (($key = array_search($comment, $this->getComments())) !== false) {
            unset($this->comments[$key]);
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

    public function copyFrom(User $user) {

        $this->ID = $user->getID();
        $this->username = $user->getUsername();
        $this->password = $user->getPassword();
        $this->email = $user->getEmail();

        if (!MyUtils::isEmpty($user->getGroup())) {
            $this->groupID = $user->getGroup()->getID();
        }
        unset($this->group);
        $this->group = null;

        unset($this->comments);
        unset($this->posts);
        unset($this->productUser);
        $this->comments = null;
        $this->posts = null;
        $this->productUser = null;

        $this->dirty = true;
        return $this;
    }

}
