<section class="blog">
    <div class="container">
      <?php if (have_posts() ) :
        while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" class="blog__item item">

            <div class="item--left">
              <a href="<?php the_permalink(); ?>" class="item__img" style="background-image: url(<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : bloginfo('template_url') . '/images/features/blog.jpg' ?>)"></a>
            </div>

            <div class="item--right">

              <h2>
                <a href="<?php the_permalink(); ?>" class="item__title"><?php the_title(); ?></a>
              </h2>

              <?php the_excerpt(); ?>

              <div class="item__info info">

                <div class="info__date"><?= get_the_date('F d, Y' ); ?></div>

              </div>

            </div>

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
</section>