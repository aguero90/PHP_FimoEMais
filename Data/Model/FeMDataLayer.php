<?php

/**
 *
 * @author alex
 */
interface FeMDataLayer extends DataLayer {
    // ========================================================================
    // COMMENT
    // ========================================================================

    /**
     * @return Comment a new comment
     */
    public function createComment();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * @param int $commentID
     * @return Comment the comment object
     */
    public function getComment($commentID);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getComments() return all comments
     *      - getComments($post) return all comments of the post
     *      - getComments(null, $user) return all comments of the user
     *      - getComments($post, $user) return all comments of the user in the post
     *
     * @param Post|null $post optional
     * @param User $user optional
     * @return Array comments
     */
    public function getComments(Post $post = null, User $user = null);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Comment $comment
     * @return Comment the comment object
     */
    public function storeComment(Comment $comment);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Comment $comment
     * @return Comment the comment object
     */
    public function removeComment(Comment $comment);

    // ========================================================================
    // GROUP
    // ========================================================================

    /**
     * @return Group a new group
     */
    public function createGroup();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getGroup($groupID) return the group with the passed ID
     *      - getGroup($user) return the group of the user
     *
     * @param int|User $arg
     * @return Group the group object
     */
    public function getGroup($arg); // mixed indicates that a parameter may accept multiple (but not necessarily all) types.

    /**
     * @return Array all groups
     */
    public function getGroups();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Group $group
     * @return Group the group object
     */
    public function storeGroup(Group $group);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Group $group
     * @return Group the group object
     */
    public function removeGroup(Group $group);

    // ========================================================================
    // IMAGE
    // ========================================================================

    /**
     * @return Image a new image
     */
    public function createImage();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * @param int $imageID
     * @return Image the image object
     */
    public function getImage($imageID);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getImages() return all images
     *      - getImages($pruduct) return all images of the product
     *
     * @param Product $product optional
     * @return array
     */
    public function getImages(Product $product = null);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Image $image
     * @return Image the image object
     */
    public function storeImage(Image $image);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Image $image
     * @return Image the image object
     */
    public function removeImage(Image $image);

    // ========================================================================
    // POST
    // ========================================================================

    /**
     * @return Post a new post
     */
    public function createPost();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getPost($postID) return the post with the passed ID
     *      - getPost($comment) return the post of the comment
     *
     * @param int|Comment $arg
     * @return Post the post object
     */
    public function getPost($arg);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getPosts() return all posts
     *      - getPosts($pruduct) return all posts of the product
     *      - getPosts($user) return all posts of the user
     *
     * @param Product|User $arg optional
     * @return array
     */
    public function getPosts($arg = null);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Post $post
     * @return Post the post object
     */
    public function storePost(Post $post);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Post $post
     * @return Post the post object
     */
    public function removePost(Post $post);

    // ========================================================================
    // PRODUCT
    // ========================================================================

    /**
     * @return Product a new product
     */
    public function createProduct();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getPost($productID) return the product with the passed ID
     *      - getPost($image) return the product of the image
     *
     * @param int|Image $arg
     * @return Product the product object
     */
    public function getProduct($arg);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getProduct() return all product
     *      - getProduct($post) return all product of the post
     *
     * @param Post $post optional
     * @return array
     */
    public function getProducts(Post $post = null);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Product $product
     * @return Product the product object
     */
    public function storeProduct(Product $product);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param Product $product
     * @return Product the product object
     */
    public function removeProduct(Product $product);

    // ========================================================================
    // USER
    // ========================================================================

    /**
     * @return User a new user
     */
    public function createUser();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getUser($userID) return the user with the passed ID
     *      - getUser($post) return the user of the post
     *      - getUser($userProduct) return the user of the userProduct
     *      - getUser($comment) return the user of the comment if exist.
     *                          Otherwise return null
     *
     * @param int|Post|UserProduct|Comment $arg
     * @return User|null the user object
     */
    public function getUser($arg);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getUser() return all users
     *      - getUser($group) return all users of the group
     *
     * @param Group $group optional
     * @return array
     */
    public function getUsers(Group $group = null);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param User $user
     * @return User the user object
     */
    public function storeUser(User $user);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param User $user
     * @return User the user object
     */
    public function removeUser(User $user);

    // ========================================================================
    // PRODUCTUSER
    // ========================================================================

    /**
     * @return ProductUser a new ProductUser
     */
    public function createProductUser();

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getProductUser($productUserID) return the productUser with the passed ID
     *      - getProductUser($product, $user, $date) return the productUser with the
     *                                                   passed product, user and date
     *
     * @param int|Product $arg the ID of productUser or the product
     * @param user $user optional
     * @param MyDate $date optional
     * @return ProductUser the productUser object
     */
    public function getProductUser($arg, User $user = null, MyDate $date = null);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * how to use:
     *      - getProductUser() return all productUser
     *      - getProductUser($product) return all productUser of the product
     *      - getProductUser(null, $user) return all productUser of the user
     *      - getProductUser($product, $user) return all productUser of the product and user
     *
     * @param Product|null $product optional
     * @param User|null $user optional
     * @return array
     */
    public function getAllProductUser(Product $product = null, User $user = null);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param ProductUser $productUser
     * @return ProductUser the productUser object
     */
    public function storeProductUser(ProductUser $productUser);

    /**
     * We use the <Type Hinting> to hint the type of
     * the parameter.
     *
     * We return the object itself to concatenate method
     *
     * @param ProductUser $productUser
     * @return ProductUser the productUser object
     */
    public function removeProductUser(ProductUser $productUser);
}
