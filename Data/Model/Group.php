<?php

/**
 *
 * @author alex
 */
interface Group {

    /**
     * @return int the group's ID
     */
    public function getID();

    /**
     * @return String the group's name
     */
    public function getName();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $name
     * @return Group the group object
     */
    public function setName($name);

    /**
     * @return String the group's description
     * @return null if there isn't a description
     */
    public function getDescription();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param String $description
     * @return Group the group object
     */
    public function setDescription($description);

    /**
     * @return boolean if the group is dirty
     */
    public function isDirty();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param boolean $dirty
     * @return Group the group object
     */
    public function setDirty($dirty);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Group $group
     * @return Group the group object
     */
    public function copyFrom(Group $group);

    // ========================================================================
    // RELATIONSHIP
    // ========================================================================

    /**
     * @return Array the group's users
     */
    public function getUsers();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Array $users
     * @return Group the group object
     */
    public function setUsers(array $users);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param User $user
     * @return Group the group object
     */
    public function addUser(User $user);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param User $user
     * @return Group the group object
     */
    public function removeUser(User $user);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @return Group the group object
     */
    public function removeAllUsers();
}
