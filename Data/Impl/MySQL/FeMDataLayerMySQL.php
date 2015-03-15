<?php

/**
 * Description of FeMDataLayerMySQL
 *
 * @author alex
 */
class FeMDataLayerMySQL extends DataLayerMySQL implements FeMDataLayer {

    private $sCommentByID, $sCommentsByPost, $sCommentsByUser, $sCommentsByPostAndUser, $sComments,
            $iComment,
            $uComment,
            $dComment;
    private $sGroupByID, $sGroupByUser, $sGroups,
            $iGroup,
            $uGroup,
            $dGroup;
    private $sImageByID, $sImagesByProduct, $sImages,
            $iImage,
            $uImage,
            $dImage;
    private $sPostByID, $sPostByComment, $sPostsByProduct, $sPostsByUser, $sPosts,
            $iPost,
            $uPost,
            $dPost;
    private $sProductByID, $sProductByImage, $sProductByProductUser, $sProductsByPost, $sProducts,
            $iProduct,
            $uProduct,
            $dProduct;
    private $sUserByID, $sUserByPost, $sUserByProductUser, $sUserByComment, $sUsersByGroup, $sUsers,
            $iUser,
            $uUser,
            $dUser;
    // Relationship
    // Relationship with attribute
    private $sProductUserByID, $sProductUserByProductAndUserAndDate, $sProductUserByProduct, $sProductUserByUser, $sProductUserByProductAndUser, $sProductUser,
            $iProductUser,
            $uProductUser,
            $dProductUser;
    // Relationship without attribute
    private $iPostProduct,
            $dPostProduct;

    public function init() {
        try {

            parent::init();

            // Comment
            $this->sCommentByID = $this->connection->prepare("SELECT * FROM e_comment WHERE ID=?");
            $this->sCommentsByPost = $this->connection->prepare("SELECT ID FROM e_comment WHERE postID=?");
            $this->sCommentsByUser = $this->connection->prepare("SELECT ID FROM e_comment WHERE userID=?");
            $this->sCommentsByPostAndUser = $this->connection->prepare("SELECT ID FROM e_comment WHERE postID=? AND userID=?");
            $this->sComments = $this->connection->prepare("SELECT ID FROM e_comment");
            $this->iComment = $this->connection->prepare("INSERT INTO e_comment (username, text, date, postID, userID) VALUES (?, ?, ?, ?, ?)");
            $this->uComment = $this->connection->prepare("UPDATE e_comment SET username=?, text=?, date=?, postID=?, userID=? WHERE ID=?");
            $this->dComment = $this->connection->prepare("DELETE FROM e_comment WHERE ID=?");

            // Group
            $this->sGroupByID = $this->connection->prepare("SELECT * FROM e_group WHERE ID=?");
            $this->sGroupByUser = $this->connection->prepare("SELECT groupID FROM e_user WHERE ID=?");
            $this->sGroups = $this->connection->prepare("SELECT ID FROM e_group");
            $this->iGroup = $this->connection->prepare("INSERT INTO e_group (name, description) VALUES (?, ?)");
            $this->uGroup = $this->connection->prepare("UPDATE e_group SET name=?, description=? WHERE ID=?");
            $this->dGroup = $this->connection->prepare("DELETE FROM e_group WHERE ID=?");

            // Image
            $this->sImageByID = $this->connection->prepare("SELECT * FROM e_image WHERE ID=?");
            $this->sImagesByProduct = $this->connection->prepare("SELECT ID FROM e_image WHERE productID=?");
            $this->sImages = $this->connection->prepare("SELECT ID FROM e_image");
            $this->iImage = $this->connection->prepare("INSERT INTO e_image (realName, fakeName, description, productID) VALUES (?, ?, ?, ?)");
            $this->uImage = $this->connection->prepare("UPDATE e_image SET realName=?, fakeName=?, description=?, productID=? WHERE ID=?");
            $this->dImage = $this->connection->prepare("DELETE FROM e_image WHERE ID=?");

            // Post
            $this->sPostByID = $this->connection->prepare("SELECT * FROM e_post WHERE ID=?");
            $this->sPostByComment = $this->connection->prepare("SELECT postID FROM e_comment WHERE ID=?");
            $this->sPostsByProduct = $this->connection->prepare("SELECT postID FROM r_post_product WHERE productID=?");
            $this->sPostsByUser = $this->connection->prepare("SELECT ID FROM e_post WHERE userID=?");
            $this->sPosts = $this->connection->prepare("SELECT ID FROM e_post");
            $this->iPost = $this->connection->prepare("INSERT INTO e_post (title, text, date, userID) VALUES (?, ?, ?, ?)");
            $this->uPost = $this->connection->prepare("UPDATE e_post SET title=?, text=?, date=?, userID=? WHERE ID=?");
            $this->dPost = $this->connection->prepare("DELETE FROM e_post WHERE ID=?");

            // Product
            $this->sProductByID = $this->connection->prepare("SELECT * FROM e_product WHERE ID=?");
            $this->sProductByImage = $this->connection->prepare("SELECT productID FROM e_image WHERE ID=?");
            $this->sProductByProductUser = $this->connection->prepare("SELECT productID FROM r_product_user WHERE ID=?");
            $this->sProductsByPost = $this->connection->prepare("SELECT productID FROM r_post_product WHERE postID=?");
            $this->sProducts = $this->connection->prepare("SELECT ID FROM e_product ");
            $this->iProduct = $this->connection->prepare("INSERT INTO e_product (name, price, amount, description) VALUES (?, ?, ?, ?)");
            $this->uProduct = $this->connection->prepare("UPDATE e_product SET name=?, price=?, amount=?, description=? WHERE ID=?");
            $this->dProduct = $this->connection->prepare("DELETE FROM e_product WHERE ID=?");

            // User
            $this->sUserByID = $this->connection->prepare("SELECT * FROM e_user WHERE ID=?");
            $this->sUserByComment = $this->connection->prepare("SELECT userID FROM e_comment WHERE ID=?");
            $this->sUserByPost = $this->connection->prepare("SELECT userID FROM e_post WHERE ID=?");
            $this->sUserByProductUser = $this->connection->prepare("SELECT userID FROM r_product_user WHERE ID=?");
            $this->sUsersByGroup = $this->connection->prepare("SELECT ID FROM e_user WHERE groupID=?");
            $this->sUsers = $this->connection->prepare("SELECT ID FROM e_user");
            $this->iUser = $this->connection->prepare("INSERT INTO e_user (username, password, email, groupID) VALUES (?, ?, ?, ?)");
            $this->uUser = $this->connection->prepare("UPDATE e_user SET username=?, password=?, email=?, groupID=? WHERE ID=?");
            $this->dUser = $this->connection->prepare("DELETE FROM e_user WHERE ID=?");

            // Relationship
            // Relationship with attribute
            // ProductUser
            $this->sProductUserByID = $this->connection->prepare("SELECT * FROM r_product_user WHERE ID=?");
            $this->sProductUserByProductAndUserAndDate = $this->connection->prepare("SELECT ID FROM r_product_user WHERE productID=? AND userID=? and date=?");
            $this->sProductUserByProduct = $this->connection->prepare("SELECT ID FROM r_product_user WHERE productID=?");
            $this->sProductUserByUser = $this->connection->prepare("SELECT ID FROM r_product_user WHERE userID=?");
            $this->sProductUserByProductAndUser = $this->connection->prepare("SELECT ID FROM r_product_user WHERE productID=? AND userID=?");
            $this->sProductUser = $this->connection->prepare("SELECT ID FROM r_product_user");
            $this->iProductUser = $this->connection->prepare("INSERT INTO r_product_user (productID, userID, date, amount) VALUES (?, ?, ?, ?)");
            $this->uProductUser = $this->connection->prepare("UPDATE r_product_user SET productID=?, userID=?, date=?, amount=? WHERE ID=?");
            $this->dProductUser = $this->connection->prepare("DELETE FROM r_product_user WHERE ID=?");

            // Relationship without attribute
            // PostProduct
            $this->iPostProduct = $this->connection->prepare("INSERT INTO r_post_product (postID, productID) VALUES (?, ?)");
            $this->dPostProduct = $this->connection->prepare("DELETE FROM r_post_product WHERE postID=? AND productID=?");
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // =========================================================================
    // Comment
    // =========================================================================
    public function createComment() {
        return new CommentMySQL($this);
    }

    public function getComment($commentID) {
        return $this->selectCommentByID($commentID);
    }

    // sCommentByID = SELECT * FROM e_comment WHERE ID=?
    private function selectCommentByID($commentID) {
        $result = null;
        try {

            $this->sCommentByID->bindValue(1, $commentID);
            $this->sCommentByID->execute();
            // la variabile $rs contiene la "prossima riga" del resultset
            // se questa riga non esite viene restituito FALSE
            //
            // in questo caso ci aspettiamo un'unica riga nel resultset, per questo l'if()
            //
            // tramite PDO::FETCH_ASSOC diciamo che la riga la deve essere trasformata in un
            // array associativo in cui l'indice corrisponde al nome della colonna sul DB
            if (($rs = $this->sCommentByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new CommentMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function getComments(Post $post = null, User $user = null) {

        if (!MyUtils::isEmpty($post) && !MyUtils::isEmpty($user)) {
            return $this->selectCommentsByPostAndUser($post, $user);
        } elseif (!MyUtils::isEmpty($post)) {
            return $this->selectCommentsByPost($post);
        } elseif (!MyUtils::isEmpty($user)) {
            return $this->selectCommentsByUser($user);
        } else {
            return $this->selectComments();
        }
    }

    // sCommentsByPostAndUser = SELECT ID FROM e_comment WHERE postID=? AND userID=?
    private function selectCommentsByPostAndUser(Post $post, User $user) {
        $result = array();
        try {

            $this->sCommentsByPostAndUser->bindValue(1, $post->getID());
            $this->sCommentsByPostAndUser->bindValue(2, $user->getID());
            $this->sCommentsByPostAndUser->execute();
            while (($rs = $this->sCommentsByPostAndUser->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getComment((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sCommentsByPost = SELECT ID FROM e_comment WHERE postID=?
    private function selectCommentsByPost(Post $post) {
        $result = array();
        try {

            $this->sCommentsByPost->bindValue(1, $post->getID());
            $this->sCommentsByPost->execute();
            while (($rs = $this->sCommentsByPost->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getComment((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sCommentsByUser = SELECT ID FROM e_comment WHERE userID=?
    private function selectCommentsByUser(User $user) {
        $result = array();
        try {

            $this->sCommentsByUser->bindValue(1, $user->getID());
            $this->sCommentsByUser->execute();
            while (($rs = $this->sCommentsByUser->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getComment((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sComments = SELECT ID FROM e_comment
    private function selectComments() {
        $result = array();
        try {

            $this->sComments->execute();
            while (($rs = $this->sComments->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getComment((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function storeComment(Comment $comment) {
        try {
            if ($comment->getID() > 0) {
                // update
                return $comment->isDirty() ? $this->updateComment($comment) : $this;
            } else {
                // insert
                return $this->insertComment($comment);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // uComment = UPDATE e_comment SET username=?, text=?, date=?, postID=?, userID=? WHERE ID=?
    private function updateComment(Comment $comment) {
        try {

            $this->uComment->bindValue(1, $comment->getUsername());
            $this->uComment->bindValue(2, $comment->getText());
            $this->uComment->bindValue(3, $comment->getDate());
            $this->uComment->bindValue(4, $comment->getPost()->getID());
            MyUtils::isEmpty($comment->getUser()) ? $this->uComment->bindValue(5, NULL) : $this->uComment->bindValue(5, $comment->getUser()->getID());
            $this->uComment->bindValue(6, $comment->getID());
            $this->uComment->execute();

            $comment->copyFrom($this->getComment($comment->getID()));
            $comment->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    // iComment = INSERT INTO e_comment (username, text, date, postID, userID) VALUES (?, ?, ?, ?, ?)
    private function insertComment(Comment $comment) {
        try {

            $this->iComment->bindValue(1, $comment->getUsername());
            $this->iComment->bindValue(2, $comment->getText());
            $this->iComment->bindValue(3, $comment->getDate());
            $this->iComment->bindValue(4, $comment->getPost()->getID());
            MyUtils::isEmpty($comment->getUser()) ? $this->iComment->bindValue(5, NULL) : $this->iComment->bindValue(5, $comment->getUser()->getID());
            $this->iComment->execute();

            $comment->copyFrom($this->getComment((int) $this->connection->lastInsertId()));
            $comment->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    public function removeComment(Comment $comment) {
        return $this->deleteComment($comment);
    }

    // dComment = DELETE FROM e_comment WHERE ID=?
    private function deleteComment(Comment $comment) {
        try {

            $this->dComment->bindValue(1, $comment->getID());
            $this->dComment->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

// =========================================================================
// Group
// =========================================================================

    public function createGroup() {
        return new GroupMySQL($this);
    }

    public function getGroup($arg) {
        return is_int($arg) ? $this->selectGroupByID($arg) : $this->selectGroupByUser($arg);
    }

    // sGroupByID = SELECT * FROM e_group WHERE ID=?
    private function selectGroupByID($groupID) {
        $result = null;
        try {

            $this->sGroupByID->bindValue(1, $groupID);
            $this->sGroupByID->execute();

            if (($rs = $this->sGroupByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new GroupMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sGroupByUser = SELECT groupID FROM e_user WHERE ID=?
    private function selectGroupByUser(User $user) {
        $result = null;
        try {

            $this->sGroupByUser->bindValue(1, $user->getID());
            $this->sGroupByUser->execute();

            if (($rs = $this->sGroupByUser->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = $this->getGroup((int) $rs["groupID"]);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function getGroups() {
        return $this->selectGroups();
    }

    // sGroups = SELECT ID FROM e_group
    private function selectGroups() {
        $result = array();
        try {

            $this->sGroups->execute();
            while (($rs = $this->sGroups->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getGroup((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function storeGroup(Group $group) {
        try {
            if ($group->getID() > 0) {
                // update
                return $comment->isDirty() ? $this->updateGroup($group) : $this;
            } else {
                // insert
                return $this->insertGroup($group);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // uGroup = UPDATE e_group SET name=?, description=? WHERE ID=?
    private function updateGroup(Group $group) {
        try {

            $this->uGroup->bindValue(1, $group->getName());
            MyUtils::isEmpty($group->getDescription()) ? $this->uGroup->bindValue(2, NULL) : $this->uGroup->bindValue(2, $group->getDescription());
            $this->uGroup->bindValue(3, $group->getID());
            $this->uGroup->execute();

            $group->copyFrom($this->getGroup($group->getID()));
            $group->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    // iGroup = INSERT INTO e_group (name, description) VALUES (?, ?)
    private function insertGroup(Group $group) {
        try {

            $this->iGroup->bindValue(1, $group->getName());
            MyUtils::isEmpty($group->getDescription()) ? $this->iGroup->bindValue(2, NULL) : $this->iGroup->bindValue(2, $group->getDescription());
            $this->iGroup->execute();

            $group->copyFrom($this->getGroup((int) $this->connection->lastInsertId()));
            $group->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    public function removeGroup(Group $group) {
        return $this->deleteGroup($group);
    }

    // dGroup = DELETE FROM e_group WHERE ID=?
    private function deleteGroup(Group $group) {
        try {

            $this->dGroup->bindValue(1, $group->getID());
            $this->dGroup->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

// =========================================================================
// Image
// =========================================================================

    public function createImage() {
        return new ImageMySQL($this);
    }

    public function getImage($imageID) {
        return $this->selectImageByID($imageID);
    }

    // sImageByID = SELECT * FROM e_image WHERE ID=?
    private function selectImageByID($imageID) {
        $result = null;
        try {

            $this->sImageByID->bindValue(1, $imageID);
            $this->sImageByID->execute();

            if (($rs = $this->sImageByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new ImageMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function getImages(Product $product = null) {

        return !MyUtils::isEmpty($product) ? $this->selectImagesByProduct($product) : $this->selectImages();
    }

    // sImagesByProduct = SELECT ID FROM e_image WHERE productID=?
    private function selectImagesByProduct(Product $product) {
        $result = array();
        try {

            $this->sImagesByProduct->bindValue(1, $product->getID());
            $this->sImagesByProduct->execute();
            while (($rs = $this->sImagesByProduct->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getImage((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sImages = SELECT ID FROM e_image
    private function selectImages() {
        $result = array();
        try {

            $this->sImages->execute();
            while (($rs = $this->sImages->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getImage((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function storeImage(Image $image) {

        try {
            if ($image->getID() > 0) {
                // update
                return $image->isDirty() ? $this->updateImage($image) : $this;
            } else {
                // insert
                return $this->insertImage($image);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // uImage = UPDATE e_image SET realName=?, fakeName=?, description=?, productID=? WHERE ID=?
    private function updateImage(Image $image) {
        try {

            $this->uImage->bindValue(1, $image->getRealName());
            $this->uImage->bindValue(2, $image->getFakeName());
            MyUtils::isEmpty($image->getDescription()) ? $this->uImage->bindValue(3, NULL) : $this->uImage->bindValue(3, $image->getDescription());
            $this->uImage->bindValue(4, $image->getProduct()->getID());
            $this->uImage->bindValue(5, $image->getID());
            $this->uImage - execute();

            $image->copyFrom($this->getImage($image->getID()));
            $image->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    // iImage = INSERT INTO e_image (realName, fakeName, description, productID) VALUES (?, ?, ?, ?)
    private function insertImage(Image $image) {
        try {

            $this->iImage->bindValue(1, $image->getRealName());
            $this->iImage->bindValue(2, $image->getFakeName());
            MyUtils::isEmpty($image->getDescription()) ? $this->iImage->bindValue(3, NULL) : $this->iImage->bindValue(3, $image->getDescription());
            $this->iImage->bindValue(4, $image->getProduct()->getID());
            $this->iImage->execute();

            $image->copyFrom($this->getImage((int) $this->connection->lastInsertId()));
            $image->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    public function removeImage(Image $image) {
        return $this->deleteImage($image);
    }

    // dImage = DELETE FROM e_image WHERE ID=?
    private function deleteImage(Image $image) {
        try {

            $this->dImage->bindValue(1, $image->getID());
            $this->dImage->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

// =========================================================================
// Post
// =========================================================================

    public function createPost() {
        return new PostMySQL($this);
    }

    public function getPost($arg) {
        return is_int($arg) ? $this->selectPostByID($arg) : $this->selectPostByComment($arg);
    }

    // sPostByID = SELECT * FROM e_post WHERE ID=?
    private function selectPostByID($postID) {
        $result = null;
        try {

            $this->sPostByID->bindValue(1, $postID);
            $this->sPostByID->execute();

            if (($rs = $this->sPostByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new PostMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sPostByComment = SELECT postID FROM e_comment WHERE ID=?
    private function selectPostByComment(Comment $comment) {
        $result = null;
        try {

            $this->sPostByComment->bindValue(1, $comment->getID());
            $this->sPostByComment->execute();

            if (($rs = $this->sPostByComment->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = $this->getPost((int) $rs["postID"]);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function getPosts($arg = null) {
        return !MyUtils::isEmpty($arg) ? (is_a($arg, "Product") ? $this->selectPostsByProduct($arg) : $this->selectPostsByUser($arg) ) : $this->selectPosts();
    }

    // sPostsByProduct = SELECT postID FROM r_post_product WHERE productID=?
    private function selectPostsByProduct(Product $product) {
        $result = array();
        try {

            $this->sPostsByProduct->bindValue(1, $product->getID());
            $this->sPostsByProduct->execute();
            while (($rs = $this->sPostsByProduct->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getPost((int) $rs["postID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sPostsByUser = SELECT ID FROM e_post WHERE userID=?
    private function selectPostsByUser(User $user) {
        $result = array();
        try {

            $this->sPostsByUser->bindValue(1, $user->getID());
            $this->sPostsByUser->execute();
            while (($rs = $this->sPostsByUser->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getPost((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sPosts = SELECT ID FROM e_post
    private function selectPosts() {
        $result = array();
        try {
            $this->sPosts->execute();
            while (($rs = $this->sPosts->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getPost((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function storePost(Post $post) {
        try {
            if ($post->getID() > 0) {
                // update
                return $post->isDirty() ? $this->updatePost($post) : $this;
            } else {
                // insert
                return $this->insertPost($post);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // uPost = UPDATE e_post SET title=?, text=?, date=?, userID=? WHERE ID=?
    private function updatePost(Post $post) {
        try {
            $this->uPost->bindValue(1, $post->getTitle());
            $this->uPost->bindValue(2, $post->getText());
            $this->uPost->bindValue(3, $post->getDate());
            $this->uPost->bindValue(4, $post->getUser()->getID());
            $this->uPost->bindValue(5, $post->getID());
            $this->uPost->execute();

            // save relationship
            $memoryProduct = $post->getProducts();
            $DBProduct = $this->getProducts($post);
            // inseriamo la relazione $post $product per tutti quei prodotti
            // che sono in memoria ma non nel DB
            foreach (array_diff($memoryProduct, $DBProduct) as $product) {
                $this->insertPostProduct($post->getID(), $product->getID());
            }
            // eliminiamo la relazione $post $product per tutti quei prodotti
            // che sono nel DB ma non in memoria
            foreach (array_diff($DBProduct, $memoryProduct) as $product) {
                $this->deletePostProduct($post->getID(), $product->getID());
            }

            $post->copyFrom($this->getPost($post->getID()));
            $post->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    // iPost = INSERT INTO e_post (title, text, date, userID) VALUES (?, ?, ?, ?)
    private function insertPost(Post $post) {
        try {
            $this->iPost->bindValue(1, $post->getTitle());
            $this->iPost->bindValue(2, $post->getText());
            $this->iPost->bindValue(3, $post->getDate());
            $this->iPost->bindValue(4, $post->getUser()->getID());
            $this->iPost->execute();

            $ID = (int) $this->connection->lastInsertId();

            // save relationship
            foreach ($post->getProducts() as $product) {
                $this->insertPostProduct($ID, $product->getID());
            }

            $post->copyFrom($this->getPost($ID));
            $post->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    public function removePost(Post $post) {
        return $this->deletePost($post);
    }

    // dPost = DELETE FROM e_post WHERE ID=?
    private function deletePost(Post $post) {
        try {
            $this->dPost->bindValue(1, $post->getID());
            $this->dPost->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

// =========================================================================
// Product
// =========================================================================

    public function createProduct() {
        return new ProductMySQL($this);
    }

    public function getProduct($arg) {
        return is_int($arg) ? $this->selectProductByID($arg) : ( is_a($arg, "Image") ? $this->selectProductByImage($arg) : $this->selectProductByProductUser($arg));
    }

    // sProductByID = SELECT * FROM e_product WHERE ID=?
    private function selectProductByID($productID) {
        $result = null;
        try {

            $this->sProductByID->bindValue(1, $productID);
            $this->sProductByID->execute();

            if (($rs = $this->sProductByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new ProductMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sProductByImage = SELECT productID FROM e_image WHERE ID=?
    private function selectProductByImage(Image $image) {
        $result = null;
        try {

            $this->sProductByImage->bindValue(1, $image->getID());
            $this->sProductByImage->execute();

            if (($rs = $this->sProductByImage->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = $this->getProduct((int) $rs["productID"]);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sProductByProductUser = SELECT productID FROM r_product_user WHERE ID=?
    private function selectProductByProductUser(ProductUser $productUser) {
        $result = null;
        try {

            $this->sProductByProductUser->bindValue(1, $productUser->getID());
            $this->sProductByProductUser->execute();

            if (($rs = $this->sProductByProductUser->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = $this->getProduct((int) $rs["productID"]);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function getProducts(Post $post = null) {
        return !MyUtils::isEmpty($post) ? $this->selectProductsByPost($post) : $this->selectProducts();
    }

    // sProductsByPost = SELECT productID FROM r_post_product WHERE postID=?
    private function selectProductsByPost(Post $post) {
        $result = array();
        try {

            $this->sProductsByPost->bindValue(1, $post->getID());
            $this->sProductsByPost->execute();
            while (($rs = $this->sProductsByPost->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getProduct((int) $rs["productID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sProducts = SELECT ID FROM e_product
    private function selectProducts() {
        $result = array();
        try {
            $this->sProducts->execute();
            while (($rs = $this->sProducts->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getProduct((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function storeProduct(Product $product) {

        try {
            if ($product->getID() > 0) {
                // update
                return $product->isDirty() ? $this->updateProduct($product) : $this;
            } else {
                // insert
                return $this->insertProduct($product);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // uProduct = UPDATE e_product SET name=?, price=?, amount=?, description=? WHERE ID=?
    private function updateProduct(Product $product) {
        try {
            $this->uProduct->bindValue(1, $product->getName());
            $this->uProduct->bindValue(2, $product->getPrice());
            $this->uProduct->bindValue(3, $product->getAmount());
            MyUtils::isEmpty($product->getDescription()) ? $this->uProduct->bindValue(4, NULL) : $this->uProduct->bindValue(4, $product->getDescription());
            $this->uProduct->bindValue(5, $product->getID());
            $this->uProduct->execute();

            // save relationship
            $memoryPost = $product->getPosts();
            $DBPost = $this->getPosts($product);
            // inseriamo la relazione $post $product per tutti quei prodotti
            // che sono in memoria ma non nel DB
            foreach (array_diff($memoryPost, $DBPost) as $post) {
                $this->insertPostProduct($post->getID(), $product->getID());
            }
            // eliminiamo la relazione $post $product per tutti quei prodotti
            // che sono nel DB ma non in memoria
            foreach (array_diff($DBPost, $memoryPost) as $post) {
                $this->deletePostProduct($post->getID(), $product->getID());
            }

            // save relationship
            $memoryProductUser = $product->getAllProductUser();
            $DBProductUser = $this->getAllProductUser($product);

            foreach (array_diff($memoryProductUser, $DBProductUser) as $productUser) {
                $this->storeProductUser($productUser);
            }

            foreach (array_diff($DBProductUser, $memoryProductUser) as $productUser) {
                $this->deleteProductUser($productUser);
            }

            $product->copyFrom($this->getProduct($product->getID()));
            $product->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    // iProduct = INSERT INTO e_product (name, price, amount, description) VALUES (?, ?, ?, ?)
    private function insertProduct(Product $product) {
        try {
            $this->iProduct->bindValue(1, $product->getName());
            $this->iProduct->bindValue(2, $product->getPrice());
            $this->iProduct->bindValue(3, $product->getAmount());
            MyUtils::isEmpty($product->getDescription()) ? $this->iProduct->bindValue(4, NULL) : $this->iProduct->bindValue(4, $product->getDescription());
            $this->iProduct->execute();

            $ID = (int) $this->connection->lastInsertId();

            // save relationship
            foreach ($product->getPosts() as $post) {
                $this->insertPostProduct($ID, $post->getID());
            }

            // non salvo la relazione productUser poichè al momento della
            // creazione del prodotto nessuno può averlo già acquistato

            $product->copyFrom($this->getProduct((int) $this->connection->lastInsertId()));
            $product->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    public function removeProduct(Product $product) {
        return $this->deleteProduct($product);
    }

    // dProduct = DELETE FROM e_product WHERE ID=?
    private function deleteProduct(Product $product) {
        try {
            $this->dProduct->bindValue(1, $product->getID());
            $this->dProduct->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

// =========================================================================
// User
// =========================================================================

    public function createUser() {
        return new UserMySQL($this);
    }

    public function getUser($arg) {
        if (is_int($arg)) {
            return $this->selectUserByID($arg);
        } elseif (is_a($arg, "Comment")) {
            return $this->selectUserByComment($arg);
        } elseif (is_a($arg, "Post")) {
            return $this->selectUserByPost($arg);
        } else {
            return $this->selectUserByProductUser($arg);
        }
    }

    // sUserByID = SELECT * FROM e_user WHERE ID=?
    private function selectUserByID($userID) {
        $result = null;
        try {

            $this->sUserByID->bindValue(1, $userID);
            $this->sUserByID->execute();

            if (($rs = $this->sUserByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new UserMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sUserByComment = SELECT userID FROM e_comment WHERE ID=?
    private function selectUserByComment(Comment $comment) {
        $result = null;
        try {

            $this->sUserByComment->bindValue(1, $comment->getID());
            $this->sUserByComment->execute();

            if (($rs = $this->sUserByComment->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = $this->getuser((int) $rs["productID"]);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sUserByPost = SELECT userID FROM e_post WHERE ID=?
    private function selectUserByPost(Post $post) {
        $result = null;
        try {

            $this->sUserByPost->bindValue(1, $post->getID());
            $this->sUserByPost->execute();

            if (($rs = $this->sUserByPost->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = $this->getuser((int) $rs["userID"]);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sUserByProductUser = SELECT userID FROM r_product_user WHERE ID=?
    private function selectUserByProductUser(ProductUser $productUser) {
        $result = null;
        try {

            $this->sUserByProductUser->bindValue(1, $productUser->getID());
            $this->sUserByProductUser->execute();

            if (($rs = $this->sUserByProductUser->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = $this->getuser((int) $rs["userID"]);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function getUsers(Group $group = null) {
        return !MyUtils::isEmpty($group) ? $this->selectUsersByGroup($group) : $this->selectUsers();
    }

    // sUsersByGroup = SELECT ID FROM e_user WHERE groupID=?
    private function selectUsersByGroup(Group $group) {
        $result = array();
        try {

            $this->sUsersByGroup->bindValue(1, $group->getID());
            $this->sUsersByGroup->execute();
            while (($rs = $this->sUsersByGroup->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getUser((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sUsers = SELECT ID FROM e_user
    private function selectUsers() {
        $result = array();
        try {
            $this->sUsers->execute();
            while (($rs = $this->sUsers->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getUser((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function storeUser(User $user) {
        try {
            if ($user->getID() > 0) {
                // update
                return $user->isDirty() ? $this->updateUser($user) : $this;
            } else {
                // insert
                return $this->insertUser($user);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // uUser = UPDATE e_user SET username=?, password=?, email=?, groupID=? WHERE ID=?
    private function updateUser(User $user) {
        try {
            $this->uUser->bindValue(1, $user->getUsername());
            $this->uUser->bindValue(2, $user->getPassword());
            $this->uUser->bindValue(3, $user->getEmail());
            $this->uUser->bindValue(4, $user->getGroup()->getID());
            $this->uUser->bindValue(5, $user->getID());
            $this->uUser->execute();

            // save relationship
            $memoryProductUser = $user->getAllProductUser();
            $DBProductUser = $this->getAllProductUser(null, $user);

            foreach (array_diff($memoryProductUser, $DBProductUser) as $productUser) {
                $this->storeProductUser($productUser);
            }

            foreach (array_diff($DBProductUser, $memoryProductUser) as $productUser) {
                $this->deleteProductUser($productUser);
            }

            $user->copyFrom($this->getUser($user->getID()));
            $user->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    // iUser = INSERT INTO e_user (username, password, email, groupID) VALUES (?, ?, ?, ?)
    private function insertUser(User $user) {
        try {
            $this->iUser->bindValue(1, $user->getUsername());
            $this->iUser->bindValue(2, $user->getPassword());
            $this->iUser->bindValue(3, $user->getEmail());
            $this->iUser->bindValue(4, $user->getGroup()->getID());
            $this->iUser->execute();

            // non salvo la relazione poichè al momento della creazione dell'utente
            // questo di certo non può aver già acquistato qualche prodotto

            $user->copyFrom($this->getUser((int) $this->connection->lastInsertId()));
            $user->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    public function removeUser(User $user) {
        return $this->deleteUser($user);
    }

    // dUser = DELETE FROM e_user WHERE ID=?
    private function deleteUser(User $user) {
        try {
            $this->dUser->bindValue(1, $user->getID());
            $this->dUser->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

// =========================================================================
// ProductUser
// =========================================================================

    public function createProductUser() {
        return new ProductUserMySQL($this);
    }

    public function getProductUser($arg, User $user = null, MyDate $date = null) {
        return is_int($arg) ? $this->selectProductUserByID($arg) : $this->selectProductUserByProductAndUserAndDate($arg, $user, $date);
    }

    // sProductUserByID = SELECT * FROM r_product_user WHERE ID=?
    private function selectProductUserByID($productUserID) {
        $result = null;
        try {

            $this->sProductUserByID->bindValue(1, $productUserID);
            $this->sProductUserByID->execute();

            if (($rs = $this->sProductUserByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new ProductUserMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sProductUserByProductAndUserAndDate = SELECT ID FROM r_product_user WHERE productID=? AND userID=? and date=?
    private function selectProductUserByProductAndUserAndDate(Product $product, User $user, MyDate $date) {
        $result = null;
        try {

            $this->sProductUserByProductAndUserAndDate->bindValue(1, $product->getID());
            $this->sProductUserByProductAndUserAndDate->bindValue(2, $user->getID());
            $this->sProductUserByProductAndUserAndDate->bindValue(3, $date);
            $this->sProductUserByProductAndUserAndDate->execute();

            if (($rs = $this->sProductUserByProductAndUserAndDate->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = $this->getProductUser((int) $rs["ID"]);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function getAllProductUser(Product $product = null, User $user = null) {

        if (!MyUtils::isEmpty($product) && !MyUtils::isEmpty($user)) {
            return $this->selectProductUserByProductAndUser($product, $user);
        } elseif (!MyUtils::isEmpty($product)) {
            return $this->selectProductUserByProduct($product);
        } elseif (!MyUtils::isEmpty($user)) {
            return $this->selectProductUserByUser($user);
        } else {
            return $this->selectProductUser();
        }
    }

    // sProductUserByProductAndUser = SELECT ID FROM r_product_user WHERE productID=? AND userID=?
    private function selectProductUserByProductAndUser(Product $product, User $user) {
        $result = array();
        try {

            $this->sProductUserByProductAndUser->bindValue(1, $product->getID());
            $this->sProductUserByProductAndUser->bindValue(2, $user->getID());
            $this->sProductUserByProductAndUser->execute();
            while (($rs = $this->sProductUserByProductAndUser->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getProductUser((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sProductUserByProduct = SELECT ID FROM r_product_user WHERE productID=?
    private function selectProductUserByProduct(Product $product) {
        $result = array();
        try {

            $this->sProductUserByProduct->bindValue(1, $product->getID());
            $this->sProductUserByProduct->execute();
            while (($rs = $this->sProductUserByProduct->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getProductUser((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sProductUserByUser = SELECT ID FROM r_product_user WHERE userID=?
    private function selectProductUserByUser(User $user) {
        $result = array();
        try {

            $this->sProductUserByUser->bindValue(1, $user->getID());
            $this->sProductUserByUser->execute();
            while (($rs = $this->sProductUserByUser->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getProductUser((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sProductUser = SELECT ID FROM r_product_user
    private function selectProductUser() {
        $result = array();
        try {

            $this->sProductUser->execute();
            while (($rs = $this->sProductUser->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getProductUser((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function storeProductUser(ProductUser $productUser) {
        try {
            if ($productUser->getID() > 0) {
                // update
                return $productUser->isDirty() ? $this->updateProductUser($productUser) : $this;
            } else {
                // insert
                return $this->insertProductUser($productUser);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // uProductUser = UPDATE r_product_user SET productID=?, userID=?, date=?, amount=? WHERE ID=?
    private function updateProductUser(ProductUser $productUser) {
        try {
            $this->uProductUser->bindValue(1, $productUser->getProduct()->getID());
            $this->uProductUser->bindValue(2, $productUser->getUser()->getID());
            $this->uProductUser->bindValue(3, $productUser->getDate());
            $this->uProductUser->bindValue(4, $productUser->getAmount());
            $this->uProductUser->bindValue(5, $productUser->getID());
            $this->uProductUser->execute();

            $productUser->copyFrom($this->getProductUser($productUser->getID()));
            $productUser->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    // iProductUser = INSERT INTO r_product_user (productID, userID, date, amount) VALUES (?, ?, ?, ?)
    private function insertProductUser(ProductUser $productUser) {
        try {
            $this->iProductUser->bindValue(1, $productUser->getProduct()->getID());
            $this->iProductUser->bindValue(2, $productUser->getUser()->getID());
            $this->iProductUser->bindValue(3, $productUser->getDate());
            $this->iProductUser->bindValue(4, $productUser->getAmount());
            $this->iProductUser->execute();

            $productUser->copyFrom($this->getProductUser((int) $this->connection->lastInsertId()));
            $productUser->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    public function removeProductUser(ProductUser $productUser) {
        return $this->deleteProductUser($productUser);
    }

    // dProductUser = DELETE FROM r_product_user WHERE ID=?
    private function deleteProductUser(ProductUser $productUser) {
        try {
            $this->dProductUser->bindValue(1, $productUser->getID());
            $this->dProductUser->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

// =========================================================================
// PostProduct
// =========================================================================
    // iPostProduct = INSERT INTO r_post_product (postID, productID) VALUES (?, ?)
    private function insertPostProduct($postID, $productID) {
        try {

            $this->iPostProduct->bindValue(1, $postID);
            $this->iPostProduct->bindValue(2, $productID);
            $this->iPostProduct->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    // dPostProduct = DELETE FROM r_post_product WHERE postID=? AND productID=?
    private function deletePostProduct($postID, $productID) {
        try {

            $this->dPostProduct->bindValue(1, $postID);
            $this->dPostProduct->bindValue(2, $productID);
            $this->dPostProduct->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

}
