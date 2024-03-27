<section class="first-section <?php echo isset($data['class']) ? $data['class'] : '' ?>">
    <div class="container first-section__wrapper">
        <div class="first-section__left">
            <h1 class="section-title first-section__title section-title--left section-title--fz44">
                <?php
                echo $data['title'];
                ?>
            </h1>
            <ul class="first-section__description">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
            </ul>
        </div>
        <div class="first-section__calc-wrp">
            <script>
                document.addEventListener("DOMContentLoaded", addCalc);
                function addCalc() {
                    var calc = document.getElementById('discountPriceCalc');

                    if ((window.outerWidth > 767) && calc) {
                        calc.setAttribute('data-crm-widget', 'discountPriceCalc');
                    }
                }
            </script>


            <div data-crm-widget="discountPriceCalc"></div>
        </div>
        <div class="first-section__bg-wrp" style="<?php echo isset($data["bgPos"]) ? $data["bgPos"] : ''; ?>">
            <img src="<?php echo isset($data['background']) ? $data['background'] : get_bloginfo('template_url') . '/images/first-screen/first-screen-bg.png'; ?>" alt="">
        </div>
    </div>
    <div class="first-section__parallax main-parallax" id="mainParallax">
        <div class="main-parallax__item main-parallax__pen" data-depth="0.2"></div>
        <div class="main-parallax__item main-parallax__pen--2" data-depth="0.1"></div>
        <div class="main-parallax__item main-parallax__pen--3" data-depth="0.1"></div>

        <div class="main-parallax__item main-parallax__list" data-depth="0.25"></div>
        <div class="main-parallax__item main-parallax__list--2" data-depth="0.1"></div>

        <div class="main-parallax__item main-parallax__book" data-depth="0.3"></div>
        <div class="main-parallax__item main-parallax__book--2" data-depth="0.15"></div>
    </div>
</section>