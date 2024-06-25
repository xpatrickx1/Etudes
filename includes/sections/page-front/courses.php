<?php include( 'courses-data.php' ) ?>

<?php
    if (have_rows('courses_list')):
        while ( have_rows('courses_list')) : the_row();
            $courses[$coursesCounter]['title'] = get_sub_field('courses_title');
            $courses[$coursesCounter]['text'] = get_sub_field('courses_text');
            $courses[$coursesCounter]['link'] = get_sub_field('courses_link');
            $coursesCounter++;
        endwhile;
    endif;
?>

<section class="courses">
    <div class="container">

        <div class="courses__title">
            <?= get_field('courses_title') ? get_field('courses_title') : 'Etudes Modernes courses available for registration right now:' ?>
        </div>

        <div class="courses__list courses__slider">
            <?php foreach ( $courses as $key => $item ) : ?>
                <?php $key++ ?>
                <div class="courses__item item">

                    <div class="item__icon">
                        <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-original="<?= bloginfo('template_url') . "/images/page-front/courses" . $key . ".png"; ?>" >
                    </div>

                    <div class="item__title">
                        <?= $item[ 'title' ] ?>
                    </div>
                    <div class="item__title">
                        <?= $item[ 'text' ] ?>
                    </div>
                    <a href="<?= $item[ 'link' ] ?>" class="item__link">
                        Course Overview
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>


 <!-- <div class="courses__group"> -->
                        <!-- <?php foreach ( $group as $item ) : ?> -->
                            <div class="courses__item item">
                                <?= $group[ 'text' ] ?>
                            </div>
                        <!-- <?php endforeach; ?> -->
                    <!-- </div> -->

                    <!-- <?php if( ($key % 4) === 1 ) {
                        // echo '</div>';
                    } ?> -->