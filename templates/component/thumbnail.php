<?php
  $repeat = 20;
?>


<!-- Thumbnails
================================================== -->
<div class="row">
  <h2 class="example-title">過去演講</h2>
  <div class="row">
    <?php for($i=0;$i<$repeat;$i++) { ?>
      <div class="col-sm-6 col-md-4">
        <div id="<?php $i ?>" class="thumbnail">
          <img class="img-rounded" src="http://assets.thewall.tw/uploads/announcement/masthead/287/1e8a9e41-37c2-45d5-b17f-59523a371688.jpg" >
          <div class="caption">
            <h1>太陽花學運，初多稱318學運、佔領國會事件</h1>

            <div class="description">
              <p>事件起始於當地時間3月18日晚間18時，中國國民黨立法委員張慶忠以30秒之速草率宣布完成 《海峽兩岸服務貿易協議》的委員會審查，而引起一群就讀大學與研究所的學生們反對，並在立法院外舉行「守護民主之夜」晚會，抗議輕率的審查程序；之後有400多名學生趁著警員不備，而進入立法院內靜坐抗議，接著於晚間21時突破警方的封鎖線佔領立法院議場。</p>
            </div>

            <div class="keyword">
                <label>關鍵字</label>
                <p class="tag">太陽花、學運、大腸花、林飛凡、馬卡茸</p>
            </div>

            <div class="date">
                <label>發佈日期</label>
                <span class="tag">2014.04.05</span>
            </div>


            <a href="#" class="btn btn-warning btn-font" role="button">收藏起來</a>
            <a href="/ispeech_feature/pages/article.php" class="btn btn-primary btn-font" role="button">詳細閱讀</a>

          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>