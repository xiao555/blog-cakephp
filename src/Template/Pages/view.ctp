<article class="post">
    <header class="post-header">
        <h1><?php echo $article->title; ?></h1>
        <section class="post-meta">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posted in <?php echo '<a href="'.BASE_URL.'/category/'.$category->slug.'">'.$category->name.'</a>'; ?>
            &bull;
            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><time class="post-date" datetime="<?php echo $article->created; ?>"><?php echo $article->created; ?></time>
        </section>
    </header>
    <section class="post-content">
        <?php echo $article->content; ?>
    </section>
</article>
