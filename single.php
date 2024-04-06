<?php get_header(); ?>

    <div class="post">
        <div class="top-screen__video video">
            <video autoplay muted loop >
                <source src="<?= bloginfo('template_url') . '/images/home.mp4' ?>" type="video/webm">
            </video>
        </div> 
        <div class="container">
            <div class="post__wrap">
                <div class="post__left">
                    <h1>
                        <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
                    </h1>
                    <div class="container--900">
                        <?php get_template_part('loop'); ?>
                    </div>
                    <div class="post__photos">
                        <?php if (have_rows('post_photos')) :
                            while ( have_rows('post_photos')) : the_row(); ?>

                                <div class="team__item item">
                                    <div class="item__icon">
                                        <img src="<?= get_sub_field('post_photo')['url'];?>" >
                                        <?php $reasonsCounter++ ?>
                                    </div>

                                    <div class="item__name"><?= get_sub_field('persone_name') ?></div>

                                    <div class="item__position"><?= get_sub_field('persone_position') ?></div>

                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="post__right info">
                    <div class="info__main">
                        <?php if (have_rows('info')) :
                            while ( have_rows('info')) : the_row(); ?>

                                <div class="info__col">
                                    <div class="info__title">
                                        <?= get_sub_field('post_main_title'); ?>
                                    </div>
                                    <div class="info__description">
                                        <?= get_sub_field('post_main_description'); ?>
                                    </div>
                                </div>
      
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <?php if (have_rows('info')) :
                        while ( have_rows('info')) : the_row(); ?>

                            <div class="info__main">
                                <div class="info__col">
                                    <div class="info__title">
                                        <?= get_sub_field('info_title'); ?>
                                    </div>
                                    <div class="info__description">
                                        <?= get_sub_field('info_description'); ?>
                                    </div>
                                <?php custom_field('format'); ?>
                                </div>
                              

                                <div class="item__name"><?= get_sub_field('persone_name') ?></div>

                                <div class="item__position"><?= get_sub_field('persone_position') ?></div>

                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
    </div>

<?php get_footer(); ?>