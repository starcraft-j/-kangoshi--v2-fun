<div class="map"><?php if(!is_mobile()) : ?>
  <h4 class="map__title">お住まいの地域でお勧めの転職サイトをチェック！</h4><?php else : ?>
  <h4 class="map__title">お住まいの地域で<br />お勧めの転職サイトをチェック！</h4><?php endif; ?>
  <div class="map__area">
    <div class="area__left"><a class="prrrr　link link__hokkaido" href="<?php echo home_url('/link/')?>worker.php"
        target="_blank">北海道</a><a class="prrrr　link link__touhoku" href="<?php echo home_url('/link/')?>worker.php"
        target="_blank">東北</a><a class="prrrr　link link__syutoken" href="<?php echo home_url('/link/')?>worker.php"
        target="_blank">首都圏</a><a class="prrrr　link link__kitakanto" href="<?php echo home_url('/link/')?>worker.php"
        target="_blank">北関東</a><a class="prrrr　link link__hokuriku" href="<?php echo home_url('/link/')?>worker.php"
        target="_blank">北陸・信越</a><a class="prrrr　link link__kansai" href="<?php echo home_url('/link/')?>worker.php"
        target="_blank">関西</a><a class="prrrr　link link__tsyugoku" href="<?php echo home_url('/link/')?>worker.php"
        target="_blank">中国</a><a class="prrrr　link link__sikoku" href="<?php echo home_url('/link/')?>worker.php"
        target="_blank">四国</a><a class="prrrr　link link__kyusyu" href="<?php echo home_url('/link/')?>worker.php"
        target="_blank">九州</a><a class="prrrr　link link__okinawa" href="<?php echo home_url('/link/')?>worker.php"
        target="_blank">沖縄</a></div>
    <div class="area__right">
      <ul class="right__arealink">
        <?php $i = 0;
$arealinks = [
    '北海道・東北' => array('北海道','青森','秋田','山形','岩手','宮城','福島'),
    '北関東' => array('栃木','茨城','群馬'),
    '首都圏' => array('東京','神奈川','埼玉','千葉'),
    '中部' => array('愛知','岐阜','静岡','三重','新潟','山梨','長野','石川','富山','福井'),
    '関西' => array('大阪', '兵庫','京都','滋賀','奈良','和歌山'),
    '中国・四国' => array('岡山','広島','鳥取','島根','山口','香川','徳島','愛媛','高知'),
    '九州・沖縄' => array('福岡','佐賀','長崎','熊本','大分','宮崎','鹿児島','沖縄')
];
 ?><?php foreach($arealinks as $key=>$value) : ?>
        <li><?php $i++; ?>
          <h5 class="arealink__title"><?php echo $key; ?></h5>
          <div class="arealink__links"><?php foreach($value as $k) : ?><a class="prrrr"
              href="<?php echo home_url('/link/')?>worker.php" target="_blank"><?php echo $k; ?></a><?php endforeach; ?>
          </div>
        </li><?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>