<?php get_header(); ?>
<div id="wrapper">
  <main id="main">
    <section id="section__hikaku">
      <h2 class="hikaku__title h2__title"> 
        <div><span class="f-24">転職成功者が使った</span><br>看護師求人・転職サイト</div>
      </h2><?php include "templates/hikaku.php"; ?>
    </section>
    <section id="section__point">
      <h2 class="point__title h2__title">
        <div><span class="f-24">成功するための</span><br>看護師求人・転職サイト選び<br>３つのポイント </div>
      </h2><?php include "templates/point-content.php"; ?>
    </section><!-- RANKING -->
    <section id="section__ranking">
      <h2 class="h2__title"> 
        <div><span class="f-24">転職成功者が使った</span><br>看護師求人・転職サイトBEST4</div>
      </h2>
      <div class="ranking__descirpt"> <img class="woman" src="<?php bloginfo('template_url'); ?>/images/icons/woman--pink.png" alt="alt"/>1サイトだけでは希望の求人情報を見逃すおそれがあるため、2～3サイトの登録がお勧めです！</div><?php include "templates/rank.php"; ?>
    </section>
    <section id="section__worker">
      <h2 class="h2__title worker__title">
        <div><span class="f-24">まずは当サイトランキング</span><br>【1位】の<span class="black">医療ワーカー</span>に登録</div>
      </h2><?php include "templates/worker-content.php"; ?>
    </section><?php get_search_form(); ?>
    <section id="section__foot">
      <div class="foot__map">
             <?php include "templates/map-content.php"; ?></div>
      <div class="foot__column"><?php include "templates/col-content.php"; ?></div>
    </section>
  </main>
</div><?php get_footer(); ?>