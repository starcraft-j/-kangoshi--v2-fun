<div class="worker">
  <div class="worker__content">

    <div class="content content__01">
      <div class="image">
        <a class="prrrr" href="<?php echo home_url('/'); ?>link/worker.php" target="_blank">
        <?php if(!is_mobile()) : ?>
          <picture>
            <source type="image/webp"
              srcset="<?php bloginfo('template_url'); ?>/images/content/con-worker__img--01.webp" />
            <img src="<?php bloginfo('template_url'); ?>/content/con-worker__img--01.png" alt="看護師転職サイトランキング" />
          </picture>
        <?php else : ?>
          <picture>
            <source type="image/webp"
              srcset="<?php bloginfo('template_url'); ?>/images/content/con-worker__img--01-sp.webp" />
            <img src="<?php bloginfo('template_url'); ?>/content/con-worker__img--01-sp.jpg" alt="看護師転職サイトランキング" />
          </picture>
        <?php endif; ?>
        </a>
      </div>

      <div class="btnBox--big all__btn">
        <?php if(!is_mobile()) : ?>
        <span class="red f-13">▼約60秒で登録完了！＆利用は完全無料▼</span>
        <?php else: ?>
        <span class="red f-13">▼約30秒で登録完了！＆利用は完全無料▼</span>
        <?php endif; ?>
        <a class="prrrr btn" href="<?php echo home_url('/'); ?>link/worker.php"
          target="_blank"><span>医療ワーカーに登録する</span><i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>


    <div class="content content__02">

    <?php if(is_mobile()) : ?>
      <h3 class="all__sub--title">必ず複数の求人・転職サイトに<br>登録しましょう！</h3>

    <?php else : ?>
      <h3 class="all__sub--title">必ず複数の求人・転職サイトに登録しましょう！</h3>
      <?php endif; ?>

      <div class="text">
        <p>転職成功の秘訣は、求人や非公開求人数、得意なジャンルが違うため、複数の転職サイトに登録することで、より多くの非公開求人の中から提案を受けることができます。</p>
        <p><span class="red">好条件の求人が、別の転職サイトには普通にあったりします</span>ので、複数登録は必須と言えます。</p>
        <p>
          転職サイトのアドバイザーといえども、<span class="red">担当者によって提案力には差</span>があるため、<span
            class="red bg-y">最低2~3サイト以上</span>の転職サイトに登録することを推奨します。</p>
      </div>

      <div class="image image-w60">
        <picture>
          <source type="image/webp"
            srcset="<?php bloginfo('template_url'); ?>/images/content/con-worker__img--02.webp" />
          <img src="<?php bloginfo('template_url'); ?>/content/con-worker__img--02.jpg" alt="看護師転職サイトランキング" />
        </picture>
      </div>

      <div class="text">
        <p>
          おすすめの組み合わせは、医療ワーカー＋看護のお仕事＋ナースではたらこ＋ナース人材バンクこの4社同時登録です。</p>
        <p>同じタイミングで登録した方が各社の求人情報や担当者を比較しやすいため、今のうちに4社全てに登録しておきましょう。</p>
        <?php if(!is_mobile()) : ?>
        <p><span class="red">登録はすべて完全無料、１サイト約60秒で完了します。</span></p>
        <?php else : ?>
        <p><span class="red">登録はすべて完全無料、１サイト約30秒で完了します。</span></p>
        <?php endif; ?>
      </div>

    </div>


    <div class="content content__03">
      <?php if(is_mobile()) : ?>
      <h3 class="all__sub--title">転職成功者が使った<br>転職・求人サイト4選</h3>
        <?php else : ?>
      <h3 class="all__sub--title">転職成功者が使った転職・求人サイト4選</h3>
      <?php endif; ?>
      <div class="table__small">
        <?php include "hikaku-small.php"; ?>
      </div>
    </div>

  </div>
</div>