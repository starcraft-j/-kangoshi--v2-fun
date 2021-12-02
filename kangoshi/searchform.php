
<div id="search__wrap">
  <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <input type="hidden" name="s"/>
    <div id="search">
      <div class="search__item item__jobarea">
        <div class="item__title"> 
          <p>勤務地</p>
        </div>
        <div class="item__content"><span> </span>
          <select class="jobarea" name="searcharea">
            <option value="">都道府県</option>
            <option value="全国">全国</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都">東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="兵庫県">兵庫県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
          </select>
        </div>
      </div>
      <div class="search__item item__jobgenre">
        <div class="item__title"> 
          <p>職種</p>
        </div>
        <ul class="item__content">
          <li class="content__check">
            <label for="jobgenre__01"> 
              <input type="checkbox" id="jobgenre__01" name="searchJob[]" value="正看護師"/><span class="select__name">正看護師</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobgenre__02"> 
              <input type="checkbox" id="jobgenre__02" name="searchJob[]" value="准看護師"/><span class="select__name">准看護師</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobgenre__03"> 
              <input type="checkbox" id="jobgenre__03" name="searchJob[]" value="その他"/><span class="select__name">その他</span>
            </label>
          </li>
        </ul>
      </div>
      <div class="search__item item__jobtype">
        <div class="item__title"> 
          <p>雇用形態</p>
        </div>
        <ul class="item__content">
          <li class="content__check">
            <label for="jobtype__01"> 
              <input type="checkbox" id="jobtype__01" name="searchType[]" value="常勤"/><span class="select__name">常勤</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobtype__02"> 
              <input type="checkbox" id="jobtype__02" name="searchType[]" value="非常勤"/><span class="select__name">非常勤</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobtype__03"> 
              <input type="checkbox" id="jobtype__03" name="searchType[]" value="その他"/><span class="select__name">その他</span>
            </label>
          </li>
        </ul>
      </div>
      <div class="search__item item__insti">
        <div class="item__title"> 
          <p>就業施設</p>
        </div>
        <ul class="item__content">
          <li class="content__check">
            <label for="jobInsti__01"> 
              <input type="checkbox" id="jobInsti__01" name="searchInsti[]" value="病院"/><span class="select__name">病院</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobInsti__02"> 
              <input type="checkbox" id="jobInsti__02" name="searchInsti[]" value="クリニック"/><span class="select__name">クリニック</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobInsti__03"> 
              <input type="checkbox" id="jobInsti__03" name="searchInsti[]" value="介護施設"/><span class="select__name">介護施設</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobInsti__04"> 
              <input type="checkbox" id="jobInsti__04" name="searchInsti[]" value="その他"/><span class="select__name">その他</span>
            </label>
          </li>
        </ul>
      </div>
      <div class="search__item item__commit">
        <div class="item__title"> 
          <p>こだわり</p>
        </div>
        <ul class="item__content">
          <li class="content__check">
            <label for="jobcommit__01"> 
              <input type="checkbox" id="jobcommit__01" name="searchCommit[]" value="非公開求人"/><span class="select__name">非公開求人</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobcommit__02"> 
              <input type="checkbox" id="jobcommit__02" name="searchCommit[]" value="全国対応"/><span class="select__name">全国対応</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobcommit__03"> 
              <input type="checkbox" id="jobcommit__03" name="searchCommit[]" value="年収高い"/><span class="select__name">年収高い</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobcommit__04"> 
              <input type="checkbox" id="jobcommit__04" name="searchCommit[]" value="夜勤なし"/><span class="select__name">夜勤なし</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobcommit__05"> 
              <input type="checkbox" id="jobcommit__05" name="searchCommit[]" value="専任コンサルタント"/><span class="select__name">専任コンサルタント</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobcommit__06"> 
              <input type="checkbox" id="jobcommit__06" name="searchCommit[]" value="逆指名あり"/><span class="select__name">逆指名あり</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobcommit__07"> 
              <input type="checkbox" id="jobcommit__07" name="searchCommit[]" value="アフターサポート"/><span class="select__name">アフターサポート</span>
            </label>
          </li>
          <li class="content__check">
            <label for="jobcommit__08"> 
              <input type="checkbox" id="jobcommit__08" name="searchCommit[]" value="その他"/><span class="select__name">その他</span>
            </label>
          </li>
        </ul>
      </div>
      <div class="search__btn">
        <input type="submit" value="この条件で検索する"/><span></span>
      </div>
    </div>
  </form>
</div>