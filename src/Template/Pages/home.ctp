<div class="articles">
    <?php
        if (!empty($articles)) {
            foreach ($articles as $article) {
                echo '<div class="post">';
                echo '<h2 class="post-title"><a href="'. BASE_URL .'/posts/' . $article->slug . '">' . $article->title . '</a></h2>';
                echo '<div class="post-detail">' . $article->create . '</div>';
                echo '<div class="post-desc">'. strip_tags($article->description) .'</div>';
                echo '<div class="readmore"><a href="'. BASE_URL .'/posts/' . $article->slug . '">READ MORE</a></div>';
                echo  '</div>';
            }
        } else {
            echo 'No Article';
        }
    ?>
</div>
