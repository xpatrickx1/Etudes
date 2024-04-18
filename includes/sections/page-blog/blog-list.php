<section class="blog">

<?php

?>
  <div class="container">
    <div class="blog__wrap">
      <?php if (have_posts() ) :
        while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" class="blog__item item">
              <a href="<?php the_permalink(); ?>" class="item__img" style="background-image: url(<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : bloginfo('template_url') . '/images/blog.jpg' ?>)">
                <h2><?php the_title(); ?></h2>
              </a>
          </article>
        <?php endwhile;
      endif; ?>

        <?php
        the_posts_pagination( array(
            'show_all' => false,
            'end_size' => 3,
            'mid_size' => 3,
            'prev_next' => true,
            'prev_text' => __('<'),
            'next_text' => __('>')
        ) );
        ?>

    </div>
  </div>
</section>