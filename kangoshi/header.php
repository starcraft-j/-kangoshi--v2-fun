<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php include 'tags/headTag.php'; ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?php if(is_search()) : ?>
        看護師求人最新なび-検索結果
      <?php elseif(is_page('unei')) : ?>
        運営者情報
      <?php elseif(is_category('column')) : ?>
        コラム | <?php wp_title(); ?>
      <?php elseif(is_single()) : ?>
        コラム | <?php wp_title(); ?>
      <?php else : ?>
        看護師求人最新なび
      <?php endif; ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/339539da33.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  </head>
  <body>
    <?php include 'tags/bodyTag.php'; ?>
    <div id="container">
      <header id="header">
        <nav>
          <div class="logo__box">
            <a href="<?php echo home_url('/'); ?>">
                <img class="logo" src="<?php bloginfo('template_url'); ?>/images/top/logo.png" alt="">
            </a>
          </div>
        </nav>
        <?php if(is_front_page()) : ?>
          <?php if(!is_mobile()) : ?>
            <picture>
              <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/top/fv--pc.webp"><img src="<?php bloginfo('template_url'); ?>/top/fv--pc.png" alt="看護師転職サイトランキング">
            </picture>
          <?php else : ?>
            <picture>
              <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/top/fv--sp.webp"><img src="<?php bloginfo('template_url'); ?>/top/fv--sp.png" alt="看護師転職サイトランキング">
            </picture>
          <?php endif; ?>
        <?php endif; ?>
      </header>
    </div>
  </body>
</html>