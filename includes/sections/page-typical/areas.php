<?php include( 'areas-data.php' ) ?>

<section class="areas">
    <div class="container">
        <div class="areas__wrap">

            <div class="areas__title">
                Etudes Modernes SA selects tailor-made programmes for dual education in the Swiss Confederation
            </div>
            

            <div class="areas__list">
                <?php foreach ( $areass as $key => $item ) : ?>
                    <?php $key++ ?>
                    <div class="areas__item item">
                        
                        <div class="item--top">
                            <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/page-front/areas/areas' . $key .'.svg' ?>" class="lazy" >
                        </div>

                        <div class="item__text"><?= $item[ 'text' ] ?></div>

                    </div>
                <?php endforeach; ?>
            </div>
            
        </div>
    </div>
</section>
