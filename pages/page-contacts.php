
<?php
/* Template Name: Contacts Template */
?>

<?php get_header(); ?>
<div class='cd-main-content cd-contacts'>
<section class="contacts">
  <div class="container">
      
    <div class="contacts__top">
        <img src="<?= bloginfo('template_url') . '/images/contacts/contacts.svg' ?>"
            alt="contacts"
            width="846"
            height="226"
        >
    </div>

    <div class="contacts__wrap">

      <div class="contacts__emails emails">
        <div class="emails__item">
          <div class="emails__title">general info</div>
          <div class="emails__email"><?= get_field('contacts_email') ? the_field('contacts_email') : 'Info@sferafilm.com' ?></div>
          
        </div>
        <div class="emails__item">
        <div class="emails__title">career</div>
          <div class="emails__email"><?= get_field('contacts_email_2') ? the_field('contacts_email_2') : 'Casting@sferafilm.com' ?></div>
        </div>
      </div>

      <div class="contacts__phone phone">
        <div class="phone__title">telephone</div>
        <div class="phone__number"><?= get_field('telephone') ? the_field('telephone') : '+38 063 654 63 85' ?></div>
      </div>
      <div class="contacts__address address">
        <div class="address__title">address</div>
        <div class="address__text"><?= get_field('address') ? the_field('address') : 'Переулок Ярославский 7/9 <br> Kyiv, Ukraine 04071' ?></div>
      </div>

    </div>
  </div>

  <div class="contacts__map map">
    <div class="map__dot"></div>
    <img src="<?= bloginfo('template_url') . '/images/contacts/map.png' ?>"
      alt="map"
    >
  </div> 

  <div class="container">
    <div class="contacts__social social">
      <div class="social__item">
        <a href="<?= get_field('social_link_instagram') ? the_field('social_link_instagram') : '#' ?>">
          <img src="<?= bloginfo('template_url') . '/images/contacts/inst.svg' ?>"
            alt="instagram"
          >
        </a>
      </div>
      <div class="social__item">
        <a href="<?= get_field('social_link_fb') ? the_field('social_link_fb') : '#' ?>">
          <img src="<?= bloginfo('template_url') . '/images/contacts/fb.svg' ?>"
            alt="facebook"
          >
        </a>
      </div>
      <div class="social__item">
        <a href="<?= get_field('social_link_tiktok') ? the_field('social_link_tiktok') : '#' ?>">
          <img src="<?= bloginfo('template_url') . '/images/contacts/tik.svg' ?>"
            alt="tiktok"
          >
        </a>
      </div>
    </div>

  </div>
</section>
    
</section>
<?php get_footer(); ?>
