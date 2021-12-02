
<div class="column map" id="map">
  <h4 class="column__title map__title">転職お役立ち情報</h4>
  <div class="column__cate">
    <div class="cate">
      <div class="cate__catelink">
        <h5 class="catelink__title">絶対ハズせない転職成功の秘訣</h5>
        <ul class="catelink__list"><?php wp_reset_postdata();
$args = array(
    'posts_per_page' => '-1',
    'post_type' => 'post',
    'category_name' => 'hiketsu',
    'orderby' => 'meta_value',
    'order' => 'asc',
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
 ?>
          <li> <a href="<?php the_permalink(); ?>"><i class="fas fa-caret-right"></i><?php the_title(); ?></a></li><?php endwhile; endif; wp_reset_query();
 ?>
        </ul>
      </div>
    </div>
    <div class="cate">
      <div class="cate__catelink">
        <h5 class="catelink__title">転職活動をスムーズに進める方法</h5>
        <ul class="catelink__list"><?php wp_reset_postdata();
$args = array(
    'posts_per_page' => '-1',
    'post_type' => 'post',
    'category_name' => 'susumeru',
    'orderby' => 'meta_value',
    'order' => 'asc',
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
 ?>
          <li> <a href="<?php the_permalink(); ?>"><i class="fas fa-caret-right"></i><?php the_title(); ?></a></li><?php endwhile; endif; wp_reset_query();

 ?>
        </ul>
      </div>
    </div>
    <div class="cate">
      <div class="cate__catelink">
        <h5 class="catelink__title">看護師求人・転職サイトの活用方法</h5>
        <ul class="catelink__list"><?php wp_reset_postdata();
$args = array(
    'posts_per_page' => '-1',
    'post_type' => 'post',
    'category_name' => 'katsuyou',
    'orderby' => 'meta_value',
    'order' => 'asc',
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
 ?>
          <li> <a href="<?php the_permalink(); ?>"><i class="fas fa-caret-right"></i><?php the_title(); ?></a></li><?php endwhile; endif; wp_reset_query();

 ?>
        </ul>
      </div>
    </div>
    <div class="cate">
      <div class="cate__catelink">
        <h5 class="catelink__title">転職にまつわるQ&A</h5>
        <ul class="catelink__list"><?php wp_reset_postdata();
$args = array(
    'posts_per_page' => '-1',
    'post_type' => 'post',
    'category_name' => 'qna',
    'orderby' => 'meta_value',
    'order' => 'asc',
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
 ?>
          <li> <a href="<?php the_permalink(); ?>"><i class="fas fa-caret-right"></i><?php the_title(); ?></a></li><?php endwhile; endif; wp_reset_query(); ?>
        </ul>
      </div>
    </div>
  </div>
</div>