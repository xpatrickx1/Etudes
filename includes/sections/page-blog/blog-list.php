<?php
    $categories = get_the_category();
    $catID = $categories[0]->cat_ID;
    $subcat_posts = get_posts('cat=' . $subcat->cat_ID);
?>

<section class="blog">
    <div class="container">
        <?php 
          $subcats = get_categories('child_of=' . $catID);
            // foreach($subcats as $subcat) {
                echo '<div class="blog__wrap">';
                    foreach($subcat_posts as $subcat_post) {
                        $postID = $subcat_post->ID;
                            echo '<article id="post-' . $postID . '" class="blog__item item">';
                            ?> 
                            <a href="<?php the_permalink(); ?>" class="item__img" style="background-image: url(<?= has_post_thumbnail($postID) ? get_the_post_thumbnail_url($postID) : bloginfo('template_url') . '/images/features/blog.jpg' ?>)"></a>
                            <?php
                                echo '</a>';
                                echo '<a href="' . get_permalink($postID) . '" class="item-title">';
                                echo get_the_title($postID);
                                echo '</a>';
                            echo '</article>';
                    }
                echo '</div>';
            // } 
        ?>

        <?php
          the_posts_pagination( array(
              'show_all' => false,
              'end_size' => 2,
              'mid_size' => 2,
              'prev_next' => true,
              'prev_text' => __('<'),
              'next_text' => __('>')
          ) );
        ?>
    </div>
</section>
