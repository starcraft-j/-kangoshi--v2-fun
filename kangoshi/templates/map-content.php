<?php $no1Url = "roo.php"; ?>
<?php if(is_page('todo2')) {
  $no1Url = "worker.php";
} ?>

<div class="map" id="map"><?php if(!is_mobile()) : ?>
  <h4 class="map__title">お住まいの地域でお勧めの転職サイトをチェック！</h4><?php else : ?>
  <h4 class="map__title">お住まいの地域で<br />お勧めの転職サイトをチェック！</h4><?php endif; ?>
  <div class="map__area">
    <div class="area__left">
      <a class="prrrr　link link__hokkaido" href="<?php echo home_url('/link/')?><?php echo $no1Url; ?>" target="_blank">北海道</a>
      <a class="prrrr　link link__touhoku" href="<?php echo home_url('/link/')?><?php echo $no1Url; ?>" target="_blank">東北</a>
      <a class="prrrr　link link__syutoken" href="<?php echo home_url('/link/')?><?php echo $no1Url; ?>" target="_blank">首都圏</a>
      <a class="prrrr　link link__kitakanto" href="<?php echo home_url('/link/')?><?php echo $no1Url; ?>" target="_blank">北関東</a>
      <a class="prrrr　link link__hokuriku" href="<?php echo home_url('/link/')?><?php echo $no1Url; ?>" target="_blank">北陸・信越</a>
      <a class="prrrr　link link__kansai" href="<?php echo home_url('/link/')?><?php echo $no1Url; ?>" target="_blank">関西</a>
      <a class="prrrr　link link__tsyugoku" href="<?php echo home_url('/link/')?><?php echo $no1Url; ?>" target="_blank">中国</a>
      <a class="prrrr　link link__sikoku" href="<?php echo home_url('/link/')?><?php echo $no1Url; ?>" target="_blank">四国</a>
      <a class="prrrr　link link__kyusyu" href="<?php echo home_url('/link/')?><?php echo $no1Url; ?>" target="_blank">九州</a>
      <a class="prrrr　link link__okinawa" href="<?php echo home_url('/link/')?><?php echo $no1Url; ?>" target="_blank">沖縄</a>
    </div>
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
          <div class="arealink__links"><?php foreach($value as $k) : ?>
            <?php if($k == "東京") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=東京"><?php echo $k; ?></a>
            <?php elseif($k == "千葉") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=千葉"><?php echo $k; ?></a>
            <?php elseif($k == "埼玉") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=埼玉"><?php echo $k; ?></a>
            <?php elseif($k == "神奈川") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=神奈川"><?php echo $k; ?></a>
            <?php elseif($k == "岐阜") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=岐阜"><?php echo $k; ?></a>
            <?php elseif($k == "静岡") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=静岡"><?php echo $k; ?></a>
            <?php elseif($k == "愛知") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=愛知"><?php echo $k; ?></a>
            <?php elseif($k == "三重") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=三重"><?php echo $k; ?></a>
            <?php elseif($k == "京都") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=京都"><?php echo $k; ?></a>
            <?php elseif($k == "大阪") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=大阪"><?php echo $k; ?></a>
            <?php elseif($k == "兵庫") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=兵庫"><?php echo $k; ?></a>
            <?php elseif($k == "奈良") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=奈良"><?php echo $k; ?></a>
            <?php elseif($k == "和歌山") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo/')?>?todo=和歌山"><?php echo $k; ?></a>
            <?php elseif($k == "北海道") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=北海道"><?php echo $k; ?></a>
            <?php elseif($k == "青森") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=青森"><?php echo $k; ?></a>
            <?php elseif($k == "秋田") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=秋田"><?php echo $k; ?></a>
            <?php elseif($k == "山型") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=山型"><?php echo $k; ?></a>
            <?php elseif($k == "岩手") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=岩手"><?php echo $k; ?></a>
            <?php elseif($k == "宮城") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=宮城"><?php echo $k; ?></a>
            <?php elseif($k == "福島") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=福島"><?php echo $k; ?></a>
            <?php elseif($k == "栃木") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=栃木"><?php echo $k; ?></a>
            <?php elseif($k == "茨城") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=茨城"><?php echo $k; ?></a>
            <?php elseif($k == "群馬") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=群馬"><?php echo $k; ?></a>
            <?php elseif($k == "新潟") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=新潟"><?php echo $k; ?></a>
            <?php elseif($k == "山梨") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=山梨"><?php echo $k; ?></a>
            <?php elseif($k == "長野") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=長野"><?php echo $k; ?></a>
            <?php elseif($k == "石川") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=石川"><?php echo $k; ?></a>
            <?php elseif($k == "富山") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=富山"><?php echo $k; ?></a>
            <?php elseif($k == "福井") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=福井"><?php echo $k; ?></a>
            <?php elseif($k == "岡山") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=岡山"><?php echo $k; ?></a>
            <?php elseif($k == "広島") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=広島"><?php echo $k; ?></a>
            <?php elseif($k == "鳥取") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=鳥取"><?php echo $k; ?></a>
            <?php elseif($k == "鳥根") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=鳥根"><?php echo $k; ?></a>
            <?php elseif($k == "山口") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=山口"><?php echo $k; ?></a>
            <?php elseif($k == "香川") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=香川"><?php echo $k; ?></a>
            <?php elseif($k == "徳島") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=徳島"><?php echo $k; ?></a>
            <?php elseif($k == "愛媛") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=愛媛"><?php echo $k; ?></a>
            <?php elseif($k == "高知") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=高知"><?php echo $k; ?></a>
            <?php elseif($k == "福岡") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=福岡"><?php echo $k; ?></a>
            <?php elseif($k == "佐賀") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=佐賀"><?php echo $k; ?></a>
            <?php elseif($k == "長崎") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=長崎"><?php echo $k; ?></a>
            <?php elseif($k == "熊本") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=熊本"><?php echo $k; ?></a>
            <?php elseif($k == "大分") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=大分"><?php echo $k; ?></a>
            <?php elseif($k == "宮崎") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=宮崎"><?php echo $k; ?></a>
            <?php elseif($k == "鹿児島") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=鹿児島"><?php echo $k; ?></a>
            <?php elseif($k == "沖縄") : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>?todo=沖縄"><?php echo $k; ?></a>
            <?php else : ?>
            <a class="prrrr" href="<?php echo home_url('/todo2/')?>"><?php echo $k; ?></a>
            <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </li><?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>