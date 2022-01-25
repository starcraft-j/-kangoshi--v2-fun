<?php function star($val) { ?><?php if($val==1) { ?><img
  src="<?php bloginfo('template_url'); ?>/images/icons/star__01.svg" alt="1" /><?php } elseif($val==2) { ?><img
  src="<?php bloginfo('template_url'); ?>/images/icons/star__02.svg" alt="2" /><?php } elseif($val==3) { ?><img
  src="<?php bloginfo('template_url'); ?>/images/icons/star__02.svg" alt="3" /><?php } elseif($val==4) { ?><img
  src="<?php bloginfo('template_url'); ?>/images/icons/star__02.svg" alt="4" /><?php } else { ?><img
  src="<?php bloginfo('template_url'); ?>/images/icons/star__03.svg" alt="5" /><?php } ?><?php 
  return;
}
?>


<?php function num($val) {
  if($val == 1) {
    echo "5.0";
  } elseif($val == 2) {
    echo "4.8";
  } elseif($val == 3) {
    echo "4.5";
  } elseif($val == 4) {
    echo "4.3";
  } elseif($val == 5) {
    echo "4.0";
  }
}
?>


<?php 
function maru($val) {
  if($val < 4) {
    echo "<img src='https://xn--q9js563u0wnb1iu2bf3pbpwm65b.fun/wp-content/themes/kangoshi/images/icons/maru--01.svg' alt='1' />";
  } else {
    echo "<img src='https://xn--q9js563u0wnb1iu2bf3pbpwm65b.fun/wp-content/themes/kangoshi/images/icons/maru--02.svg' alt='2' />";
  }
}
?>