<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8>
        <title>{$app_name}</title>
    </head>
    <body>

        <header id="outlineHeader">
            <p>outlineHeader</p>
        </header>

        <nav id="outlineMenu">
            <ul>
                <li><a href="index.php?s=1">Post</a></li>
                <li><a href="index.php?s=2">PostList</a></li>
                <li><a href="index.php?s=3">Product</a></li>
                <li><a href="index.php?s=4">ProductList</a></li>
            </ul>
        </nav>


        <div id="outlineBody">
            {include file=$contentTemplate}
        </div>


        <aside id="outlineLeftCol">
            <p>outlineLeftCol</p>
        </aside>


        <footer id="outlineFooter">
            <p>outlineFooter</p>
        </footer>

    </body>
</html>