<?php include( 'highlights-data.php' ) ?>

<?php
    if (have_rows('highlights_list')):
        while ( have_rows('highlights_list')) : the_row();
            $highlights[$highlightsCounter]['text'] = get_sub_field('highlights_text');
            $highlightsCounter++;
        endwhile;
    endif;
?>

<section class="highlights">
    <div class="container">
        <div class="highlights__wrap">

            <div class="highlights__title">
                <?= get_field('highlights_title') ? get_field('highlights_title') : 'The educational highlights today includes the following areas:' ?>
            </div>

            <div class="highlights__list highlights__list--mob highlights__slider">
                <?php foreach ( $highlights as $key => $item ) : ?>
                            <div class="highlights__item item">
                                <?= $item[ 'text' ] ?>
                            </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>