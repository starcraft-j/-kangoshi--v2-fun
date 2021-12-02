<?php if(!is_search()) : ?>
<?php $args = array(
          'posts_per_page' => -1,
          'post_type' => 'kangoshi',
          'meta_key' => 'rank',
          'orderby' => 'meta_value_num',
          'order' => 'asc',
      );
?>

<?php else : ?>

<?php $args = array(
        'posts_per_page' => -1,
        'post_type' => 'kangoshi',
        'meta_key' => $sort_key,
        'orderby' => 'meta_value_num',
        'order' => $sort_order,
        's' => $s,
        'meta_query' => array($metaquerysp),
    ); 
  ?>

<?php endif; ?>


<?php $the_query = new WP_Query( $args ); ?>
<div class="hikaku">
  <div class="hikaku__wrap">
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
        <th>求人数</th>
        <th>求人の種類</th>
        <th width="80px">対応速度</th>
        <th width="80px">サービス</th>
        <th width="80px">地域</th>
        <th>詳細</th>
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
      <tr>
        <td>
          
          <span class="f-20 red bold"><?php echo $i; ?></span><span class="red">位</span></td>
         
        <td><a class="prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank">
            <img src="<?php echo $logo; ?>" alt="" width="100%" /><br>
            <p class="font__bold"><?php the_title(); ?></p>
          </a>
        </td>
        <td><a class="prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank">
            <p><?php echo $number; ?></p>
            <p class="star--block"><?php star($i); ?></p>
          </a></td>
        <td>
          <p><?php echo $jobNum; ?></p>
        </td>
        <td>
          <p><?php foreach($genre as $value) {echo $value.', '; } ?></p>
        </td>
        <td>
          <p class="maru"><?php maru($speed); ?></p>
        </td>
        <td>
          <p class="maru"><?php maru($service); ?></p>
        </td>
        <td>
          <p><?php echo $area; ?></p>
        </td>
        <td class="btn"><a class="prrrr" href="<?php echo home_url('/'); ?><?php echo $url; ?>"
            target="_blank">公式サイトへ</a></td>
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