postList.tpl

{foreach $posts as $post}
    <div class="post">
        <header>
            <h1>{$post->getTitle()}</h1>
        </header>
        <div>
            <p>{$post->getText()}</p>
        </div>
        <footer>
            <p>{$post->getDate()->toString()}</p>
        </footer>
    </div>
{/foreach}


