<?php if(is_mobile()) : ?>
<h2 class="hikaku__title--02" style="width: 100%">
<?php else : ?>
<h2 class="hikaku__title--02">
<?php endif; ?>
  <div class="title__wrap">
    <span class="f-24 title__text">大手30社から厳選した</span><span class="f-24">看護師求人・転職サイト比較表</span>
  </div>
  <?php if(is_mobile()) : ?>
    <span class="date__box"><?php echo date('Y'); ?>年<br><?php echo date('n'); ?>月<?php echo date('j'); ?>日最新</span>
  <?php else : ?>
  <span class="date__box"><?php echo date('Y'); ?>年<?php echo date('n'); ?>月<?php echo date('j'); ?>日最新</span>
  <?php endif; ?>

</h2>
<!-- 主要都道府県は1位看護roo -->


<!-- 主要都道府県以外は1位医療ワーカー -->
<?php if(is_page('todo2'))  : ?>

  <?php $args = array(
          'posts_per_page' => 4,
          'post_type' => 'kangoshi',
          'meta_key' => 'rank-todo2',
          'orderby' => 'meta_value_num',
          'order' => 'asc',
          'post_status' => 'publish',

      );
?>
<?php elseif(is_search()) : ?>
<?php $args = array(
          'posts_per_page' => -1,
          'post_type' => 'kangoshi',
          'meta_key' => $sort_key,
          'orderby' => 'meta_value_num',
          'order' => $sort_order,
          'post_status' => 'publish',
          's' => $s,
          'meta_query' => array($metaquerysp),
      );
?>

<?php else : ?>
<?php $args = array(
          'posts_per_page' => -1,
          'post_type' => 'kangoshi',
          'meta_key' => 'rank',
          'post_status' => 'publish',
          'orderby' => 'meta_value_num',
          'order' => 'asc',
      );
?>
<?php endif; ?>


<?php $the_query = new WP_Query( $args ); ?>
<div class="hikaku">
  <div class="hikaku__wrap js-scrollable">
    <table id="hikaku">
      <!-- <colgroup>
        <col width="5%" />
        <col width="14%" />
        <col width="14%" />
        <col width="14%" />
        <col width="14%" />
        <col width="14%" />
        <col width="14%" />
      </colgroup> -->
      <tr>
        <th width="60px"></th>
        <th>会社</th>
        <th>満足度</th>
        <th width="80px">解説</th>
        <th>リンク</th>
        <th>求人数</th>
        <th>求人の種類</th>
        <th width="80px">対応速度</th>
        <th width="80px">サービス</th>
        <th width="80px">地域</th>
      </tr>

      <?php wp_reset_postdata(); ?>
      <?php 
        if($_GET['c_o'] == 'DESC') {
          $i = 5;
        } else {
          $i = 1;
        }
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
        $url = get_field('url');
        $logo = get_field('logoImg');
        $number = get_field('number');
        $jobNum = get_field('jobNum');
        $genre = get_field('genre');
        $speed = get_field('speed');
        $service = get_field('service');
        $area = get_field('area');
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
      <tr>
        <td>
          <span class="f-20 red bold"><?php echo $i; ?></span><span class="red">位</span>
        </td>
         
        <td>
          <a class="prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank">
            <img src="<?php echo $logo; ?>" alt="" width="100%" /><br>
            <p class="font__bold"><?php the_title(); ?></p>
          </a>
        </td>

        <td><a class="prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank">
            <p><?php num($i); ?></p>
            <p class="star--block"><?php star($i); ?></p>
          </a>
        </td>


        <td>
          <a class="hikaku-de-link" href="#<?php echo $rankID; ?>"><span>詳細</span><i class="fas fa-caret-down"></i></a>
        </td>

        <td class="btn"><a class="prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>"
            target="_blank">公式サイトへ</a>
        </td>
        
        <td>
          <p><?php echo $jobNum; ?></p>
        </td>
        <td>
          <p><?php foreach($genre as $value) { 
                if($value == end($genre)) {
                  echo $value; 
                } else {
                  echo $value.', ';
                }
              }
              ?></p>
        </td>
        <td>
          <p class="maru"><?php maru($i); ?></p>
        </td>
        <td>
          <p class="maru"><?php maru($i); ?></p>
        </td>
        <td>
          <p><?php echo $area; ?></p>
        </td>
        
      </tr>
      <?php if($_GET['c_o'] == "DESC") : ?>
      <?php $i--; ?>
      <?php else : ?>
      <?php $i++; ?>
      <?php endif; ?>
      <?php endwhile; endif; wp_reset_query(); ?>
    </table>
  </div>
</div>

<script>
  $("p.link").click(function(e) {
  let target = e.target.data('id');
  target.animation({
    scrollTop: 0
  }, 500);
});
</script>