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

               <!--<div class="item__info info">
                
                 <div class="info__col">
                  <span class="info__key"><?= get_bloginfo("language") == 'en' ? 'Format' : 'Формат' ?></span><?php custom_field('format'); ?>
                </div>
                <div class="info__col">
                  <span class="info__key"><?= get_bloginfo("language") == 'en' ? 'Genre' : 'Жанр' ?></span> <?php custom_field('genre'); ?>
                </div>
                <div class="info__col">
                  <span class="info__key"><?= get_bloginfo("language") == 'en' ? 'Year' : 'Рік' ?></span> <?php custom_field('year'); ?>
                </div> 
              </div> -->

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
<div class="glitch" style="background-image: url(https://images.unsplash.com/photo-1493514789931-586cb221d7a7?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1920&q=80);">
  <div class="channel r"></div>
  <div class="channel g"></div>
  <div class="channel b"></div>
</div>

<div class="glitch" style="background-image: url(https://images.unsplash.com/photo-1544794040-a6ab770bec83?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1920&q=80);">
  <div class="channel r"></div>
  <div class="channel g"></div>
  <div class="channel b"></div>
</div>