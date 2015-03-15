<?php

/**
 * Description of CommentMySQL
 *
 * @author alex
 */
class CommentMySQL implements Comment {

    private $ID;
    private $username;
    private $text;
    private $date;
    protected $dirty;
    protected $dataLayer;
    private $postID;
    private $post;
    private $userID;
    private $user;

    public function __construct(FeMDataLayer $dataLayer, array $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(FeMDataLayer $dataLayer) {

        $this->ID = 0;
        $this->username = "";
        $this->text = "";
        $this->date = null;

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->postID = 0;
        $this->post = null;
        $this->userID = 0;
        $this->user = null;
    }

    private function constructorDataAndResult(FeMDataLayer $dataLayer, array $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->username = $resultSet["username"];
        $this->text = $resultSet["text"];
        $this->date = new MyDate($resultSet["date"]);

        $this->postID = (int) $resultSet["postID"];
        $this->userID = (int) $resultSet["userID"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getText() {
        return $this->text;
    }

    public function getDate() {
        return $this->date;
    }

    public function isDirty() {
        return $this->dirty;
    }

    public function getPost() {

        // lazy loading: carico dal DB solo nel momento in cui me lo chiedono
        // inoltre lo carico SOLO se è possibile caricarlo ( ID > 0 )
        // e se non l'ho ancora caricato
        if ($this->postID > 0 && MyUtils::isEmpty($this->post)) {
            $this->post = $this->dataLayer->getPost($this->postID);
        }
        return $this->post;
    }

    public function getUser() {

        // lazy loading: carico dal DB solo nel momento in cui me lo chiedono
        // inoltre lo carico SOLO se è possibile caricarlo ( ID > 0 )
        // e se non l'ho ancora caricato
        if ($this->userID > 0 && MyUtils::isEmpty($this->user)) {
            $this->user = $this->dataLayer->getUser($this->userID);
        }
        return $this->user;
    }

    public function setUsername($username) {
        $this->username = $username;
        $this->dirty = true;
        return $this;
    }

    public function setText($text) {
        $this->text = $text;
        $this->dirty = true;
        return $this;
    }

    public function setDate(MyDate $date) {
        $this->date = $date;
        $this->dirty = true;
        return $this;
    }

    public function setDirty($dirty) {
        $this->dirty = $dirty;
        return $this;
    }

    public function setPost(Post $post) {
        $this->postID = $post->getID();
        $this->post = $post;
        $this->dirty = true;
        return $this;
    }

    public function setUser(User $user) {
        $this->userID = $user->getID();
        $this->user = $user;
        $this->dirty = true;
        return $this;
    }

    public function copyFrom(Comment $comment) {

        $this->ID = $comment->getID();
        $this->username = $comment->getUsername();
        $this->text = $comment->getText();
        $this->date = $comment->getDate();

        if (!MyUtils::isEmpty($comment->getPost())) {
            $this->postID = $comment->getPost()->getID();
        }
        if (!MyUtils::isEmpty($comment->getUser())) {
            $this->userID = $comment->getUser()->getID();
        }

        unset($this->post);
        $this->post = null;
        unset($this->user);
        $this->user = null;

        $this->dirty = true;

        return $this;
    }

}
