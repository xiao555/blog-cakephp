<div class="articles">
    <?php
        if ($articles->count() > 0) {
            foreach ($articles as $article) {
                echo '<div class="post">';
                echo '<h2 class="post-title"><a href="posts/"' . $article->slug . '>' . $article->title . '</a></h2>';
                echo '<div class="post-detail">' . date_format($article->create, "F j, Y h:i:s A") . '</div>';
                echo '<div class="post-desc">'. strip_tags($article->description) .'</div>';
                echo '<div class="readmore"><a href="posts/"' . $article->slug . '>READ MORE</a></div>';
                echo  '</div>';
            }
        } else {
            echo 'No Article';
        }
    ?>
</div>
