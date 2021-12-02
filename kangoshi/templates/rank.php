
<div class="ranking">
  <?php include 'function.php'; ?>

  <?php wp_reset_postdata(); 
    $args = array(
      'posts_per_page' => -1,
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

  <div class="ranking__content">

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
          <span class="hyouka__star"><?php star($i); ?></span><span class="hyouka__number"><?php echo $number; ?></span>
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
            <th>対応地域</th>
            <th>求人件数</th>
          </tr>
          <tr>
            <td><?php echo $rankArea; ?></td>
            <td><?php echo $rankNum; ?></td>
          </tr>
          <tr>
            <th>勤務形態</th>
            <th>職種</th>
          </tr>
          <tr>
            <td><?php echo $rankStyle; ?></td>
            <td><?php echo $rankType; ?></td>
          </tr>
        </table>
        <?php else : ?>
        <table class="rank__tb">
          <tr>
            <th>対応地域</th>
            <td><?php echo $rankArea; ?></td>
          </tr>
          <tr>
            <th>求人件数</th>
            <td><?php echo $rankNum; ?></td>
          </tr>
          <tr>
            <th>勤務形態</th>
            <td><?php echo $rankStyle; ?></td>
            
          </tr>
          <tr>
            <th>職種</th>
            <td><?php echo $rankType; ?></td>
          </tr>
        </table>
        <?php endif; ?>
      </div>
      <?php endif; ?>


      <?php if(!empty($comment)) : ?>

      <div class="comment__box">
        <div class="comment__title"><span>編集部コメント</span></div>
        <div class="comment__des">
          <img src="<?php bloginfo('template_url'); ?>/images/icons/comment__img--<?php echo $i; ?>.png" alt="">
          <p><?php echo $comment; ?></p>
        </div>
      </div>

      <?php endif; ?>

        <div class="btnBox--big">
            <a class="prrrr btn" href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank"><span>公式サイトはこちら</span><i class="fas fa-arrow-right"></i>
            </a>
          </div>
    </div>

  </div><?php $i++; endwhile; endif; wp_reset_query(); ?>
</div>