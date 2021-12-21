<?php
/* Template Name: 都道府県個別ページ */
?>
<?php get_header(); ?>
<div id="wrapper">
  <main id="main">

    <section id="section__pagetitle">

      <h2 class="hikaku__title">
        <div class="center">
          <img src="<?php bloginfo('template_url'); ?>/images/icons/todo__title--icon.png" alt="">
        <?php if($_GET['todo'] !== null) : ?>
          <span class="f-30">
            <span class="red"><?php echo $_GET['todo']; ?></span>に強い！
          </span>
          <br>
          <span class="f-24">看護師転職ランキング</span>
          <?php else : ?>
          <span class="f-30">
            <span class="red">
              お住まいの地域で
            </span>
          </span>
          <br>
          <span class="f-24">お勧めの転職サイトをチェック！</span>
          <?php endif; ?>
        </div>
      </h2>

    </section>

  
    <?php if(is_mobile()) : ?>
    <section id="section__ranking" style="margin-top: 0px">
    <?php else : ?>
    <section id="section__ranking">
    <?php endif; ?>
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

      <?php include "templates/hikaku-todo.php"; ?>
    
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