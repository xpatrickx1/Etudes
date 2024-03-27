<?php
$featuresItems = [
    [
        'title' => 'Lorem ipsum dolor',
        'icon' => '/images/features/feature-1.png',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, consectetur eligendi eveniet 
        itaque labore natus obcaecati possimus qui, repellat rerum sequi'
    ],
    [
        'title' => 'Lorem ipsum dolor sit',
        'icon' => '/images/features/feature-2.png',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, consectetur eligendi eveniet 
        itaque labore natus obcaecati possimus qui, repellat rerum sequi temporibus vitae voluptatem. Commodi.'
    ],
    [
        'title' => 'Lorem ipsum amet',
        'icon' => '/images/features/feature-1.png',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, consectetur eligendi eveniet 
        itaque labore natus obcaecati possimus qui, repellat rerum sequi temporibus vitae'
    ]
]
?>

<section class="features section--gray" id="was-bieten-wir-an">
    <div class="container ">
        <h2 class="section-title features__title">
            Lorem ipsum dolor sit?
        </h2>
        <div class="features__flex js-features-slider">
            <?php foreach ($featuresItems as $item) : ?>
                <div class="features__item feature">
                    <div class="feature__icon">
                        <img src="<?php echo bloginfo('template_url') . ($item['icon']); ?>" alt="">
                    </div>
                    <div class="feature__title"><?php echo $item['title'] ?></div>
                    <div class="feature__text"><?php echo $item['text'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>