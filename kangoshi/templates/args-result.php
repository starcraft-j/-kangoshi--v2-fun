
<?php $args = array(
        'posts_per_page' => -1,
        'post_type' => 'kangoshi',
        'meta_key' => $sort_key,
        'orderby' => 'meta_value_num',
        'order' => $sort_order,
        's' => $s,
        'meta_query' => array($metaquerysp),
    );

 ?><?php function star($val) { ?><?php if($val==1) { ?><img src="<?php bloginfo('template_url'); ?>/images/icons/star--01.svg" alt="1"/><?php } elseif($val==2) { ?><img src="<?php bloginfo('template_url'); ?>/images/icons/star--02.svg" alt="2"/><?php } elseif($val==3) { ?><img src="<?php bloginfo('template_url'); ?>/images/icons/star--02.svg" alt="3"/><?php } else { ?><img src="<?php bloginfo('template_url'); ?>/images/icons/star--03.svg" alt="4"/><?php } ?><?php }
 ?><?php function maru($val) { ?><?php if($val==1) { ?><img src="<?php bloginfo('template_url'); ?>/images/icons/maru--01.svg" alt="1"/><?php } elseif($val==2) { ?><img src="<?php bloginfo('template_url'); ?>/images/icons/maru--02.svg" alt="2"/><?php } else { ?><img src="<?php bloginfo('template_url'); ?>/images/icons/maru--03.svg" alt="3"/><?php } ?><?php } ?>