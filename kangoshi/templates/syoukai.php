<div class="flex syoukai__box">

  <?php wp_reset_postdata(); 
    $args = array(
      'posts_per_page' => 5,
      'post_type' => 'kangoshi',
      'meta_key' => 'rank',
      'orderby' => 'meta_value_num',
      'order' => 'asc',
    );
  ?>

  <?php $the_query = new WP_Query( $args );
    $i = 1;
    if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
    
    $url = get_field('url');
    $number = get_field('number');
    $logo = get_field('logoImg');
  ?>

  <div class="box__item item--0<?php echo $i; ?> flexColumn">
    <div class="item__title">
      <img src="<?php bloginfo('template_url'); ?>/images/icons/crown__0<?php echo $i; ?>.svg" alt="">
    </div>
    <div class="item__img">
      <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank" class="prrrr">
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail(); ?>
          <?php endif; ?>
      </a>
    </div>
    <div class="item__logo">
      <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank" class="prrrr">
        <img src="<?php bloginfo('template_url'); ?>/images/top/ranking__logo--r<?php echo $i; ?>.png" alt="">
      </a>
    </div>
  </div>
  
  <?php $i++; endwhile; endif; wp_reset_query(); ?>

</div>