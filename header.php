<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">
    <title><?php bloginfo('name') . ' | ' . wp_title(); ?></title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <?php wp_head(); ?>
</head>

<?php include(locate_template('main-vars.php', true)); ?>

<body>
<div class="header">
    <div class="container">
        <div class="header__wrap">

            <a href="/" class="header__logo logo">
                <div class="logo__desktop">
                    <img src="<?= bloginfo('template_url') . '/images/icons/logo.svg' ?>"
                            alt="Back to homepage logo link"
                            width="109px"
                            height="64px"
                    >
                </div>
            </a>

            <div class="header__navigation navigation">
                <div class="navigation__posts <?= get_bloginfo("language") == 'ua' ? 'navigation__posts--ua' : 'navigation__posts--en'?>" >
                    <?php 
                        $categoryID = get_category_by_slug( 'projects' );
                        $category = get_category($categoryID);
                        $count = $category->category_count;
                        echo $count;
                    ?>
                </div>

                <ul class="navigation__list">

                    <?php 
                        if ( get_bloginfo("language") == 'en' ) : 
                            if (has_nav_menu('header_menu')) :
                                $nav_args = array(
                                    'theme_location' => 'header_menu',
                                    'container' => '',
                                    'items_wrap' => '%3$s',
                                );
                                wp_nav_menu($nav_args);
                            endif;
                        endif; 
                    ?>
                    
                    <?php 
                        if ( get_bloginfo("language") == 'ua' ) :
                            if (has_nav_menu('header_menu_ua')) :
                                $nav_args = array(
                                    'theme_location' => 'header_menu_ua',
                                    'container' => '',
                                    'items_wrap' => '%3$s',
                                );
                                wp_nav_menu($nav_args);
                            endif; 
                        endif; 
                    ?>

                </ul>
            </div>
            
            <?php if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher (); ?>

            <div class="header__hamburger js-hamburger">
                <div class="hamburger-line1"></div>
                <div class="hamburger-line2"></div>
                <div class="hamburger-line3"></div>
            </div>
        </div>
    </div>
</div>

<main id="main" class="main">