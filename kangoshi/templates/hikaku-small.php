<div class="hikaku__small">
  <table id="ctt__table">
    <colgroup>
      <col width="25%" />
      <col width="25%" />
      <col width="25%" />
      <col width="25%" />
    </colgroup>
    <tr>
      <?php for($k = 1; $k <= 4; $k++ ) : ?>
      <th>
        <p><span class="bold f-20"><?php echo $k; ?></span>位</p>
      </th>
      <?php endfor; ?>
    </tr>
    <tr>

      <?php
          $args = array(
            'posts_per_page' => -1,
            'post_type' => 'kangoshi',
            'meta_key' => 'rank',
            'orderby' => 'meta_value_num',
            'order' => 'asc',
            'post_status' => 'publish',
          );
  
          $the_query = new WP_Query( $args );
       
            $i = 1;
            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
            $url = get_field('url');
        ?>
      <td>
        <a href="<?php echo home_url("/"); ?><?php echo $url; ?>" class="prrrr" target="_blank">
          <picture>
            <source type="image/webp"
              srcset="<?php bloginfo('template_url'); ?>/images/content/table_samll-img<?php echo $i; ?>.webp" />
            <img src="<?php bloginfo('template_url'); ?>/content/table_samll-img<?php echo $i; ?>.png"
              alt="看護師転職サイトランキング" />
          </picture>
        </a>
      </td>
      <?php $i++; endwhile; endif; ?>
    </tr>

    <tr>
    <?php
      $the_query = new WP_Query( $args );
      $i = 1;
      if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
      $des = get_field('ctt-descript');
    ?>
    <td>
      <p class="ctt__descript">
        <?php echo $des; ?>
      </p>
    </td>
    <?php $i++; endwhile; endif; ?>
    </tr>

    <tr>
      <?php
        $the_query = new WP_Query( $args );
        $i = 1;
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        $url = get_field('url');
      ?>
      <td>
        <a href="<?php echo home_url("/"); ?><?php echo $url; ?>" class="prrrr btn__small" target="_blank">
        
           公式サイトへ
         
        </a>
      </td>
      <?php $i++; endwhile; endif; ?>
    </tr>
  </table>
</div>