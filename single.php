<?php get_header(); ?>

    <div class="post">

        <div class="top-screen__top">

            <div class="top-screen__video video">
                <video 
                    autoplay 
                    muted 
                    loop 
                    playsinline 
                    controls="false" 
                    src='<?= get_field( 'post_video' )['url'] ?>' 
                    type='video/mp4'>
                </video>
            </div> 

            <div class="watch">
                <div id="watch">00:00:000</div>
            </div>
            
        </div>
        
        <div class="container">
            <div class="post__wrap">

                <div class="post__left">
                    <h1>
                        <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
                    </h1>
                    <div class="info__main info__main--mobile">
                        <?php if (have_rows('post_main_info')) :
                            while ( have_rows('post_main_info')) : the_row(); ?>

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
                    <div class="post__content">
                        <?php get_template_part('loop'); ?>
                    </div>
                    <div class="post__photos">
                        <?php if (have_rows('post_photos')) :
                            while ( have_rows('post_photos')) : the_row(); ?>

                                <div class="post__photo">
                                    <img src="<?= get_sub_field('post_photo')['url'];?>" >
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="post__right info">
                    <div class="info__main info__main--desktop">
                        <?php if (have_rows('post_main_info')) :
                            while ( have_rows('post_main_info')) : the_row(); ?>

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

                    <div class="info__rows">
                        <?php if (have_rows('info')) :
                            while ( have_rows('info')) : the_row(); ?>

                                <div class="info__col">

                                    <div class="info__title">
                                        <?= get_sub_field('info_title'); ?>
                                    </div>

                                    <?php if (have_rows('info_description')) :
                                        while ( have_rows('info_description')) : the_row(); ?>

                                            <div class="info__description">
                                                <?= get_sub_field('info_description_text'); ?>
                                            </div>
                                            
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

<?php get_footer(); ?>