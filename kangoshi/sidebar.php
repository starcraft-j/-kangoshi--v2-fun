
<nav id="nav">
  <ul class="nav__column" id="nav__content"> 
    <h2>睡眠コラム</h2><?php wp_reset_postdata();
$args = array(
    'posts_per_page' => '-1',
    'post_type' => 'post',
    'category_name' => 'column',
    'orderby' => 'meta_value',
    'order' => 'asc',
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();

 ?>
    <li> <a href="<?php the_permalink(); ?>"><i class="fas fa-caret-right"></i><?php the_title(); ?> </a></li><?php endwhile; endif; wp_reset_query();
 ?>
  </ul>
  <ul class="nav__supplement" id="nav__content"> 
    <h2>人気の睡眠サプリ</h2><?php wp_reset_postdata();
$args = array(
    'posts_per_page' => '-1',
    'post_type' => 'supplement',
    'meta_key' => 'rank',
    'orderby' => 'meta_value_num',
    'order' => 'asc',
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
$url = get_field('url');

 ?>
    <li> <a class="prrrr" href="<?php echo $url; ?>" target="_blank"><i class="fas fa-caret-right"></i><?php the_title(); ?> </a></li><?php endwhile; endif; wp_reset_query(); ?>
  </ul>
</nav>