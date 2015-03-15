<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <form action="InsertTest.php" method="POST">
                <input type="hidden" name="what" value="1" />
                <p>Inserisci un commento</p>
                <input name="username" placeholder="username" />
                <textarea name="text" placeholder="text"></textarea>
                <input name="postID" placeholder="postID" />
                <input name="userID" placeholder="userID (optional)" />
                <button type="submit">inserisci</button>
            </form>
        </div>
        <div>
            <form action="InsertTest.php" method="POST">
                <input type="hidden" name="what" value="2" />
                <p>Inserisci un gruppo</p>
                <input name="name" placeholder="name" />
                <textarea name="description" placeholder="description (optional)"></textarea>
                <button type="submit">inserisci</button>
            </form>
        </div>
        <div>
            <form action="InsertTest.php" method="POST">
                <input type="hidden" name="what" value="3" />
                <p>Inserisci un'immagine</p>
                <input name="realName" placeholder="realName" />
                <input name="fakeName" placeholder="fakeName" />
                <textarea name="description" placeholder="description (optional)"></textarea>
                <input name="productID" placeholder="productID" />
                <button type="submit">inserisci</button>
            </form>
        </div>
        <div>
            <form action="InsertTest.php" method="POST">
                <input type="hidden" name="what" value="4" />
                <p>Inserisci un post</p>
                <input name="title" placeholder="title" />
                <textarea name="text" placeholder="text"></textarea>
                <input name="userID" placeholder="userID" />
                <button type="submit">inserisci</button>
            </form>
        </div>
        <div>
            <form action="InsertTest.php" method="POST">
                <input type="hidden" name="what" value="5" />
                <p>Inserisci un prodotto</p>
                <input name="name" placeholder="name" />
                <input name="price" placeholder="price" />
                <input name="amount" placeholder="amount" />
                <textarea name="description" placeholder="descriptionoptional ()"></textarea>
                <button type="submit">inserisci</button>
            </form>
        </div>
        <div>
            <form action="InsertTest.php" method="POST">
                <input type="hidden" name="what" value="6" />
                <p>Inserisci un utente</p>
                <input name="username" placeholder="username" />
                <input name="password" placeholder="password" />
                <input name="email" placeholder="email" />
                <input name="groupID" placeholder="groupID" />
                <button type="submit">inserisci</button>
            </form>
        </div>
        <br />
        <hr />
        <hr />
        <hr />
        <br />
        <div>
            <form action="SelectAllTest.php" method="POST">
                <p>Cosa vuoi vedere?</p>
                <button type="submit" name="what" value="1">Commenti</button>
                <button type="submit" name="what" value="2">Gruppi</button>
                <button type="submit" name="what" value="3">Immagini</button>
                <button type="submit" name="what" value="4">Post</button>
                <button type="submit" name="what" value="5">Prodotti</button>
                <button type="submit" name="what" value="6">Utenti</button>
            </form>
        </div>
    </body>
</html>
