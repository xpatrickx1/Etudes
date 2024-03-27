<?php
function addAccordion($text)
{
    $pattern = '/(<(h[1-6])>[\w\s\/$%#{}[\].:\\@!,+();&<>"\'^*?=~`\-–]*?<\/h[1-6]>)/i';
    $result = preg_replace($pattern, "</div><div data-accordion='header' class='accordion__header open'>$1</div><div data-accordion='body' class='accordion__body'>", $text);
    $pos = strpos($result, '</div>');
    return substr_replace($result, '', $pos, 6) . '</div>';
}

add_filter('the_content', 'addAccordion');
?>

<section class="seo-accordion <?php echo $data["class"]; ?>">
    <div class="container">
        <?php if(isset($data['title'])) : ?>
            <div class="section-title <?php echo $data["title-class"]; ?>"><?php echo $data["title"]; ?> </div>
        <?php endif; ?>
        <div data-accordion="container" class="accordion">
            <?php the_post();
            the_content();
            ?>
        </div>
    </div>
</section>
