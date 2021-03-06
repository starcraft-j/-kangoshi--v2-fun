<?php $rankID = ""; ?>

<div class="ranking">

  <?php wp_reset_postdata(); 
    if(is_page("todo2")) {
      $args = array(
        'posts_per_page' => 4,
        'post_type' => 'kangoshi',
        'meta_key' => 'rank-todo2',
        'orderby' => 'meta_value_num',
        'post_status' => 'publish',
        'order' => 'asc',
      );
    } else {
      $args = array(
        'posts_per_page' => -1,
        'post_type' => 'kangoshi',
        'meta_key' => 'rank',
        'orderby' => 'meta_value_num',
        'post_status' => 'publish',
        'order' => 'asc',
      );
    }

  ?>

  <?php $the_query = new WP_Query( $args );
    $i = 1;
    if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
    
    $url = get_field('url');
    $number = get_field('number');
    $logo = get_field('logoImg');

    $point1 = get_field('rank-points')['point1'];
    $point2 = get_field('rank-points')['point2'];
    $point3 = get_field('rank-points')['point3'];
    $descript = get_field('rank-des');

    $keyword = get_field('rank-key');

    $rankTb = get_field('rank-tb');
    $rankArea = $rankTb['job-area'];
    $rankNum = $rankTb['job-num'];
    $rankStyle = $rankTb['job-style'];
    $rankType = $rankTb['job-type'];

    $comment = get_field('rank-comment');
  ?>

  <?php 
      if($post->ID == 378) {
        $rankID = "roo";
      } elseif($post->ID == 368) {
        $rankID = "worker";
      } elseif($post->ID == 369) {
        $rankID = "oshigoto";
      } elseif($post->ID == 142) {
        $rankID = "hatarako";
      } elseif($post->ID == 200) {
        $rankID = "bank";
      }

  ?>

  <div class="ranking__content" id="<?php echo $rankID; ?>">

    <h3 class="content__title">
      <img src="<?php bloginfo('template_url'); ?>/images/icons/crown__0<?php echo $i; ?>--m.svg" alt=""/>
      <img class="logo__img" src="<?php echo $logo; ?>" alt=""/>
      <a class="prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>"  target="_blank"><?php the_title(); ?></a>
    </h3>

    <div class="content__top">

      <div class="top__left">
        <div class="left__thumb">
          <a class="prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>"  target="_blank">
          <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('full'); ?>
          <?php endif; ?>
          </a>
        </div>
        <div class="left__hyouka">
          <span class="hyouka__star">
            <?php star($i); ?></span>
          <span class="hyouka__number"><?php echo num($i); ?></span>
        </div>
      </div>

      <div class="top__right">

        <div class="right__points">

          <ul class="points__list list">
            <li class="list__point"><?php echo $point1; ?></li>
            <li class="list__point"><?php echo $point2; ?></li>
            <?php if(!empty($point3)) : ?>
            <li class="list__point"><?php echo $point3; ?></li>
            <?php endif; ?>
          </ul>

          <div class="points__descript">
            <?php echo $descript; ?>
          </div>        
        </div>
      </div>
    </div>

    <div class="content__bottom">
      <div class="keyword__box">
        <?php echo $keyword; ?>
      </div>

      <?php if(!empty($rankNum)) : ?>

      <div class="tb__box">

        <?php if(!is_mobile()) : ?>

        <table class="rank__tb">
          <tr>
            <th>????????????</th>
            <th>????????????</th>
          </tr>
          <tr>
            <td><?php echo $rankArea; ?></td>
            <td><?php echo $rankNum; ?></td>
          </tr>
          <tr>
            <th>????????????</th>
            <th>??????</th>
          </tr>
          <tr>
            <td><?php echo $rankStyle; ?></td>
            <td><?php echo $rankType; ?></td>
          </tr>
        </table>
        <?php else : ?>
        <table class="rank__tb">
          <tr>
            <th>????????????</th>
            <td><?php echo $rankArea; ?></td>
          </tr>
          <tr>
            <th>????????????</th>
            <td><?php echo $rankNum; ?></td>
          </tr>
          <tr>
            <th>????????????</th>
            <td><?php echo $rankStyle; ?></td>
            
          </tr>
          <tr>
            <th>??????</th>
            <td><?php echo $rankType; ?></td>
          </tr>
        </table>
        <?php endif; ?>
      </div>
      <?php endif; ?>


      <?php if(!empty($comment)) : ?>

      <div class="comment__box">
        <div class="comment__title"><span>?????????????????????</span></div>
        <div class="comment__des">
          <img src="<?php bloginfo('template_url'); ?>/images/icons/comment__img--<?php echo $i; ?>.png" alt="">
          <p><?php echo $comment; ?></p>
        </div>
      </div>

      <?php endif; ?>

        <div class="btn__top--text center">
          <?php if(is_mobile()) : ?>
            <?php if($post->ID == 368 ) : ?>
              <p class="f-14 tomato bold" style="margin-bottom: -20px">???4??????????????????<br>???30?????????????????????????????????????????????</p>
            <?php else : ?>
              <p class="f-14 tomato bold" style="margin-bottom: -20px">????????????????????????60??????</p>
            <?php endif; ?>
          <?php else : ?>
            <?php if($post->ID == 368 ) : ?>
              <p class="tomato bold" style="margin-bottom: -30px">???4?????????????????????30?????????????????????????????????????????????</p>
            <?php else : ?>
              <p class="tomato bold" style="margin-bottom: -30px">????????????????????????60??????</p>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <div class="btnBox--big">
            <a class="prrrr btn" href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank"><span>???????????????????????????</span><i class="fas fa-arrow-right"></i>
            </a>
          </div>
    </div>

  </div><?php $i++; endwhile; endif; wp_reset_query(); ?>
</div>