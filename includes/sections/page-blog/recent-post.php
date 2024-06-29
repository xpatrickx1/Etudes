<?php
function rand_posts()
{
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
    );

    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {

        while ($the_query->have_posts()) {
            $the_query->the_post();
            $postID = get_the_id();
            $category_detail = get_the_category(); 
            // print_r(get_the_category();)
            // $categoryes = foreach($category_detail as $cd){
            //     echo $cd->cat_name;
            // }
            $categories = get_categories();
// $categoriess = foreach($categories as $category) {
//    echo '<div>' . $category->name . '</div>';
// }
            $postThumbnail = get_the_post_thumbnail($postID, array(), array("class" => "item__img"));
            $postThumbnailPlaceholder = '<img src="' . get_bloginfo('template_url') . '/images/loader.gif' . '" data-src="' . get_bloginfo('template_url') . '/images/features/blog.jpg' . '"  class="lazy post__img">';
            $postThumb = $postThumbnail ? $postThumbnail : $postThumbnailPlaceholder ;
            $string .= '
    <div class="post__thumbnail">' . $postThumb . '</div>
    <div class="post__info">
      <div class="post__category">' . $categories . '</div> 
      <a href="' . get_permalink() . '" class="post__title">' . get_the_title() . '</a>

      <div class="post--bottom">

        <div class="post__date">' . get_the_date('F d, Y') . '</div>

      </div>
    </div>';
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        $string .= 'no posts found';
    }
    return $string;
}
?>

<?php
$cat_args=array(
  'orderby' => 'name',
  'order' => 'ASC'
   );
$categories=get_categories($cat_args);
  foreach($categories as $category) {
    $args=array(
      'showposts' => -1,
      'category__in' => array($category->term_id),
      'caller_get_posts'=>1
    );
    $posts=get_posts($args);
      if ($posts) {
        echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
    
      } 
    }
?>

<?php echo do_shortcode("[random-posts]"); ?>
 