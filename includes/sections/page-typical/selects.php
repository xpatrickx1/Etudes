<?php include( 'selects-data.php' ) ?>

<section class="selects">
    <div class="container">
        <div class="selects__wrap">

            <div class="selects__title">
                Etudes Modernes SA selects tailor-made programmes for dual education in the Swiss Confederation
            </div>
            

            <div class="selects__list">
                <?php foreach ( $selects as $key => $item ) : ?>
                    <?php $key++ ?>
                    <div class="selects__item item">
                        
                        <div class="item--top">
                            <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/page-front/selects/selects' . $key .'.svg' ?>" class="lazy" >
                        </div>

                        <div class="item__text"><?= $item[ 'text' ] ?></div>

                    </div>
                <?php endforeach; ?>
            </div>
            
        </div>
    </div>
</section>
