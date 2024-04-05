
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
          <div class="emails__email">Info@sferafilm.com</div>
        </div>
        <div class="emails__item">
        <div class="emails__title">career</div>
          <div class="emails__email">Casting@sferafilm.com</div>
        </div>
      </div>

      <div class="contacts__phone phone">
        <div class="phone__title">telephone</div>
        <div class="phone__number">+38 063 654 63 85</div>
      </div>
      <div class="contacts__address address">
        <div class="address__title">address</div>
        <div class="address__text">Переулок Ярославский 7/9 <br> Kyiv, Ukraine 04071</div>
      </div>

    </div>
  </div>

  <div class="contacts__map map">
    <div class="map__dot"></div>
    <img src="<?= bloginfo('template_url') . '/images/contacts/map.png' ?>"
      alt="map"
    >
  </div> 
</section>
    
</section>
<?php get_footer(); ?>
