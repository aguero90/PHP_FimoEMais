ProductList.tpl

{foreach $products as $product}
    <div class="post">
        <header>
            <h1>{$product->getName()}</h1>
        </header>
        <div>
            <p>{$product->getDescription()}</p>
        </div>
        <footer>
            <p>{$product->getPrice()}</p>
            <p>{$product->getAmount()}</p>
        </footer>
    </div>
{/foreach}