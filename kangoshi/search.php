<?php get_header(); ?>
<?php include "templates/function.php"; ?>
<?php $s = $_GET['s']; $searchArea = $_GET['searchArea']; $searchJob = $_GET['searchJob']; $searchType = $_GET['searchType']; $searchInsti = $_GET['searchInsti']; $searchCommit = $_GET['searchCommit']; ?>
<div id="wrapper">
  <main class="side__page result__page" id="main">
    <section id="search__result">
      <div id="side__page--bread"> 
          <a href="<?php echo home_url('/'); ?>">HOME </a>
          <span>></span>
          <span>検索結果</span> 
      </div>
      <div id="side__page--sort">
        <form id="sort__form" name="dropform"><span></span>
          <select name="sortlink" onchange="dropLink()"> 
            <option value="">並び替えを選択</option>
            <option value="<?php echo add_query_arg( array('c_key' => 'rank', 'c_o' => 'ASC') ); ?>">評価の高い順</option>
            <option value="<?php echo add_query_arg( array('c_key' => 'rank', 'c_o' => 'DESC') ); ?>">評価の低い順</option>
          </select>
        </form>
      </div>
      <?php 
        if(isset($_GET['c_key'])) {
            $sort_key = $_GET['c_key'];
            $sort_order = $_GET['c_o'];
        } else {
            $sort_key = 'rank';
            $sort_order = 'ASC';
        }

        if($searchArea == "全国") {
            $metaquerysp[] = [
                'key' => 'searchArea',
                'value' => '全国',
                'compare' => 'LIKE',
            ];
        } elseif($searchArea == "北海道") {
            $metaquerysp[] = [
                'key' => 'searchArea',
                'value' => '北海道',
                'compare' => 'LIKE',
            ];
        } 

        if(is_array($searchJob)) {
            foreach($searchJob as $val) {
                echo $val;
                $metaquerysp[] = [
                    'key' => 'searchJob',
                    'value' => $val,
                    'compare' => 'LIKE'
                ];
            }
        }else {
            $metaquerysp[] = [
                'key' => 'searchJob',
                'value' => $searchJob,
                'compare' => 'LIKE'
            ];
        }

        if(is_array($searchType)) {
            foreach($searchType as $val) {
                $metaquerysp[] = [
                    'key' => 'searchType',
                    'value' => $val,
                    'compare' => 'LIKE'
                ];
            }
        }else {
            $metaquerysp[] = [
                'key' => 'searchType',
                'value' => $searchType,
                'compare' => 'LIKE'
            ];
        }

        if(is_array($searchInsti)) {
            foreach($searchInsti as $val) {
                $metaquerysp[] = [
                    'key' => 'searchInsti',
                    'value' => $val,
                    'compare' => 'LIKE'
                ];
            }
        }else {
            $metaquerysp[] = [
                'key' => 'searchInsti',
                'value' => $searchInsti,
                'compare' => 'LIKE'
            ];
        }

        if(is_array($searchCommit)) {
            foreach($searchCommit as $val) {
                $metaquerysp[] = [
                    'key' => 'searchCommit',
                    'value' => $val,
                    'compare' => 'LIKE'
                ];
            }
        }else {
            $metaquerysp[] = [
                'key' => 'searchCommit',
                'value' => $searchCommit,
                'compare' => 'LIKE'
            ];
        }

        $metaquerysp['relation'] = 'AND';

        ?>
        <?php include 'templates/hikaku.php'; ?>

            </section>

            <section id="section__form">
                <?php get_search_form(); ?>
            </section>

        </main>
        <?php get_footer(); ?>
        </div>
        <script>
            function dropLink() {
                const sortUrl = document.dropform.sortlink.value;
                location.href = sortUrl;
            }
        </script>