<?php

/**
 * Description of GroupMySQL
 *
 * @author alex
 */
class GroupMySQL implements Group {

    private $ID;
    private $name;
    private $description;
    protected $dirty;
    protected $dataLayer;
    private $users;

    public function __construct(FeMDataLayer $dataLayer, array $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(FeMDataLayer $dataLayer) {

        $this->ID = 0;
        $this->name = "";
        $this->description = "";

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->users = null;
    }

    private function constructorDataAndResult(FeMDataLayer $dataLayer, array $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->name = $resultSet["name"];
        $this->description = $resultSet["description"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function isDirty() {
        return $this->dirty;
    }

    public function getUsers() {
        if (MyUtils::isEmpty($this->users)) {
            $this->users = $this->dataLayer->getUsers($this);
        }
        return $this->users;
    }

    public function setName($name) {
        $this->name = $name;
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

    public function setUsers(array $users) {
        $this->users = $users;
        $this->dirty = true;
        return $this;
    }

    public function addUser(User $user) {
        array_push($this->getUsers(), $user);
        $this->dirty = true;
        return $this;
    }

    public function removeAllUsers() {
        unset($this->users);
        $this->users = array();
        $this->dirty = true;
        return $this;
    }

    public function removeUser(User $user) {
        if (($key = array_search($user, $this->getUsers())) !== false) {
            unset($this->users[$key]);
        }
        $this->dirty = true;
        return $this;
    }

    public function copyFrom(Group $group) {

        $this->ID = $group->getID();
        $this->name = $group->getName();
        $this->description = $group->getDescription();

        unset($this->users);
        $this->users = null;

        $this->dirty = true;

        return $this;
    }

}
