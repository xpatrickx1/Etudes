<?php get_header(); ?>

    <div class="top-screen__breadcrumbs">
                <span><a href="<?= home_url(); ?>">Home</a></span>
                <span> > </span>
                <?php if( get_the_terms($post->ID, 'category')[0]->name ) : ?>
                    <span><a href="/<?= get_the_terms($post->ID, 'category')[0]->slug; ?>/"><?= ucfirst( get_the_terms($post->ID, 'category')[0]->slug ); ?></a></span>
                    <span> > </span>
                <?php endif; ?>
                <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : get_the_title() ?></span>
    </div>
    <div class="post">
        <h1>
            <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
        </h1>
        <div class="container container--900">
            <?php get_template_part('loop'); ?>
        </div>

        <div class="post__btn-wrp btn-wrp">
            <a href="/order" rel="nofollow" class="button">Order now</a>
        </div>

        <div class="container container--900">
            <?php get_template_part('includes/modules/recent-posts'); ?>
        </div>
    </div>

<?php get_footer(); ?>