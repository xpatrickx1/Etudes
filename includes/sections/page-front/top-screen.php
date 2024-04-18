<div class="top-screen__video video">
    <video autoplay muted loop >
        <source src="<?= bloginfo('template_url') . '/images/home.mp4' ?>" type="video/webm">
    </video>
</div> 

<div class="top-screen__bottom bottom">
    <div class="container">
        <div class="bottom__wrap">
            <div class="bottom__left">
                <img src="<?= bloginfo('template_url') . '/images/sferafilm.svg' ?>"
                        alt="Back to homepage logo link"
                        width="881"
                        height="226"
                >
            </div>
            <div class="bottom__right">
                <?php the_post();
                    the_content();
                ?>
            </div>
        </div>
    </div>
</div>
