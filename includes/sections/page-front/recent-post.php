<?php
function rand_posts()
{
    $args = array(
        'post_type' => 'post',
//        'orderby' => 'rand',
//        'posts_per_page' => 3,
        'post__not_in' => [get_the_ID()],
        'category_name' => 'blog',
        'posts_per_page'   => -1,
    );

    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $string .= '<div class="post-recent__wrap posts__slider">';
        $views = get_post_meta( $post->ID, 'views', true ) ? get_post_meta( $post->ID, 'views', true ) : '0';

        while ($the_query->have_posts()) {
            $the_query->the_post();
            $postID = get_the_id();
            $postThumbnail = get_the_post_thumbnail($postID, array(), array("class" => "item__img"));
            $postThumbnailPlaceholder = '<img src="' . get_bloginfo('template_url') . '/images/loader.gif' . '" data-src="' . get_bloginfo('template_url') . '/images/features/blog.jpg' . '"  class="lazy item__img">';
            $postThumb = $postThumbnail ? $postThumbnail : $postThumbnailPlaceholder ;
            $string .= '
  <article id="post-' . $postID . '" class="post-recent__item item">
    <div class="post-recent__thumbnail">' . $postThumb . '</div>
    <div class="item__info">

      <div class="item__read">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.99297 1.66666C5.39297 1.66666 1.66797 5.39999 1.66797 9.99999C1.66797 14.6 5.39297 18.3333 9.99297 18.3333C14.6013 18.3333 18.3346 14.6 18.3346 9.99999C18.3346 5.39999 14.6013 1.66666 9.99297 1.66666ZM10.0013 16.6667C6.31797 16.6667 3.33464 13.6833 3.33464 9.99999C3.33464 6.31666 6.31797 3.33332 10.0013 3.33332C13.6846 3.33332 16.668 6.31666 16.668 9.99999C16.668 13.6833 13.6846 16.6667 10.0013 16.6667Z" fill="#2AB0AB"/>
          <path d="M10.418 5.83334H9.16797V10.8333L13.543 13.4583L14.168 12.4333L10.418 10.2083V5.83334Z" fill="#2AB0AB"/>
        </svg>
        <div>' . estimated_reading_time() . '</div>
      </div>
     
        <a href="' . get_permalink() . '" class="item__title">' . get_the_title() . '</a>

          <div class="item--bottom">

            <div class="item__date">' . get_the_date('F d, Y') . '</div>

            <div class="item__views">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.9987 3.75C5.83203 3.75 2.2737 6.34167 0.832031 10C2.2737 13.6583 5.83203 16.25 9.9987 16.25C14.1654 16.25 17.7237 13.6583 19.1654 10C17.7237 6.34167 14.1654 3.75 9.9987 3.75ZM9.9987 14.1667C7.6987 14.1667 5.83203 12.3 5.83203 10C5.83203 7.7 7.6987 5.83333 9.9987 5.83333C12.2987 5.83333 14.1654 7.7 14.1654 10C14.1654 12.3 12.2987 14.1667 9.9987 14.1667ZM9.9987 7.5C8.61536 7.5 7.4987 8.61667 7.4987 10C7.4987 11.3833 8.61536 12.5 9.9987 12.5C11.382 12.5 12.4987 11.3833 12.4987 10C12.4987 8.61667 11.382 7.5 9.9987 7.5Z" fill="#2AB0AB"/>
              </svg>' . $views . ' views</div>

          </div>
        </div>    
  </article>';
        }
        $string .= '</div>';
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        $string .= 'no posts found';
    }
    return $string;
}
?>