
<section class="top-screen">
    <div class="container">
        <div class="top-screen__img">
            <img fetchpriority="high" src="<?= bloginfo('template_url') . '/images/loader.gif' ?>"
                 data-src="<?= bloginfo('template_url') . '/images/page-front/top-screen.webp' ?>"
                 class="top-screen--desctop lazy"
                 alt="happy people"
                 width="1272px"
                 height="588px" >
            <img fetchpriority="high" src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/page-front/top-screen--mob.webp' ?>" class="top-screen--mobile lazy" alt="happy people" width="354px" height="348px">
            <h1>
                <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
            </h1>
        </div>

        
    </div>
</section>
