<?php
/* Template Name: テスト比較 */
?>
<?php get_header(); ?>

<div id="wrapper">
  <main id="main">

    <section id="section__syoukai">
      
      <!-- <p class="date"><?php echo date('Y'); ?>年<?php echo date('n'); ?>月最新</p> -->
      <!-- <h2 class="hikaku__title h2__title">
        <div>
          <span class="f-24 normal">転職成功者が利用した絶対に使うべき</span><span>看護士求人・転職サイトBEST5</span>
        </div>
      </h2> -->

      <h2 class="hikaku__title--02">
       <div class="title__wrap">
          <span class="f-24 title__text">大手30社から厳選した</span><span class="f-24">看護師求人・転職サイト比較表</span>
        </div>
        <?php if(is_mobile()) : ?>
          <span class="date__box"><?php echo date('Y'); ?>年<br><?php echo date('n'); ?>月最新</span>
        <?php else : ?>
        <span class="date__box"><?php echo date('Y'); ?>年<?php echo date('n'); ?>月最新</span>
        <?php endif; ?>
      
      </h2>

     <?php include "templates/hikaku.php"; ?>

    </section>

  
    <section id="section__ranking">

      <?php include "templates/rank.php"; ?>

    </section>

    <section id="section__hikaku">
      
      <div class="hikaku__title">
        <?php if(!is_mobile()) : ?>
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/top/hikaku__titleBn--pc.webp">
          <img class="hikaku__fv" src="<?php bloginfo('template_url'); ?>/images/top/hikaku__titleBn--pc.png" alt="" />
        </pictrue>
        
        <?php else : ?>
          <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/top/hikaku__titleBn--sp.webp">
          <img class="hikaku__fv" src="<?php bloginfo('template_url'); ?>/images/top/hikaku__titleBn--sp.png" alt="" />
        </pictrue>
        <?php endif; ?>
      </div>

      <?php include "templates/hikaku.php"; ?>
    
    </section>

    <section id="section__form">
      <?php get_search_form(); ?>
    </section>

    <section id="section__foot">
      
      <div class="foot__column">
        <?php include "templates/col-content.php"; ?>
      </div>

    </section>
  </main>
</div><?php get_footer(); ?>