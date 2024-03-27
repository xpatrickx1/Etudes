<?php

$samplesItems = [
    [
        'type' => 'Hausarbeit',
        'pages' => '10',
        'authorID' => '220057',
        'sources' => '22',
        'link' => '/samples/hausarbeit.pdf',
    ],
    [
        'type' => 'Motivationsschreiben',
        'pages' => '1',
        'authorID' => '226315',
        'link' => '/samples/motivationsschreiben.pdf',
    ],
    [
        'type' => 'Seminararbeit ',
        'pages' => '8',
        'authorID' => '220001',
        'sources' => '14',
        'link' => '/samples/seminararbeit.pdf',
    ]
];
?>

<section class="samples" id="musterarbeiten">
    <div class="container">
        <div class="samples__top">
            <div class="samples__left">
                <h2 class="section-title section-title--left samples__title">Samples of our papers</h2>
                <div class="samples__subtitle">
                    Nothing speaks better of our expertise than the samples written by our top authors. See for yourself!
                </div>
            </div>

            <div class="samples__img-wrp">
                <img src="<?php echo bloginfo('template_url') . '/images/loader.gif' ?>" data-original="https://via.placeholder.com/600x150" alt="">
            </div>
        </div>

        <div class="samples__items js-samples-slider">
            <?php foreach ($samplesItems as $item) : ?>
                <div class="samples__item sample" >
                    <div class="sample__description">
                        <div class="sample__type">
                            <?php echo $item["type"]; ?>
                        </div>

                        <div class="sample__info">
                            <span class="sample__info-title">Pages: </span>
                            <?php echo  $item['pages'] ?>
                        </div>
                        <div class="sample__info">
                            <span class="sample__info-title">Author ID: </span>
                            <?php echo '#' . $item['authorID'] ?>
                        </div>
                        <?php if(isset( $item['sources'])) : ?>
                        <div class="sample__info">
                            <span class="sample__info-title">Sources: </span>
                            <?php echo $item['sources'] ?>
                        </div>
                        <?php endif;?>
                    </div>
                    <div class="samples__link">
                        <a href="<?php echo bloginfo('template_url') . $item['link']; ?>" rel="nofollow"
                           download class="button button--w100 button--black">
                           Download
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>