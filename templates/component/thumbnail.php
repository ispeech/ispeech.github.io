<?php
  $repeat = 8;
  $j_repeat = 1;
?>


<div class="row">
    <h2 class="example-title">太陽花學運</h2>
    <span class="sub-title">看更多此專題演講</span>
    <div class="row">
        <?php for($i=0;$i<$this->thumbnail_b_num;$i++) { ?>
        <div class="col-md-6">
            <div class="jumbotron">
                <div class="jumbotron-photo">
                    <img src="http://blogs-images.forbes.com/connieguglielmo/files/2012/11/Steve-Jobs-dates.jpg" />
                </div>
                <div class="jumbotron-contents">
                    <h1 id="title" >賈伯斯在史丹福大學畢業禮演講</h1>
                    <p id="description" class="lead description">我去年問他(凱文·凱利)：『喬布斯從你那裡學到了人生的座右銘，stay hungry ，stay foolish ，這句話你是如何理解的？你可不可以用最簡單、最容易懂的語言，闡述、詮釋這四個英文字？』他是這麼說的：『我們必須了解自己的渺小，如果我們不學習，科技的發展速度會讓我們所有的一切在五年後被清空...</p>

                    <div class="keyword p">
                        <label>關鍵字</label>
                        <div class="tag_style_2">
                            <a href="#">太陽花</a>
                            <a href="#">學運</a>
                            <a href="#">大腸花</a>
                            <a href="#">林非凡</a>
                            <a href="#">馬卡茸</a>
                        </div>
                    </div>

                    <div class="date">
                        <label>發佈日期</label>
                        <span>2014.04.05</span>
                    </div>
<a href="#myModal" role="button" class="btn btn-warning btn-font collect" data-toggle="modal">收藏起來</a>
<a href="/ispeech_feature/pages/article.php" class="btn btn-primary btn-font  reading" role="button">詳細閱讀</a>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>

    <h2 class="example-title">資策會</h2>
        <span class="sub-title">看更多此專題演講</span>
        <div class="row">
      <?php for($i=0;$i<$this->thumbnail_b_num;$i++) { ?>
        <div class="col-md-6">
            <div class="jumbotron">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="http://s1.cdn.memeburn.com/wp-content/uploads/steve-jobs1.jpg">
                        </div>
                        <div class="item">
                            <img src="http://blogs-images.forbes.com/connieguglielmo/files/2012/11/Steve-Jobs-dates.jpg">
                        </div>
                        <div class="item">
                            <img src="http://scottebales.com/wp-content/uploads/2012/10/gty_steve_jobs2__dm_111006_wg.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

                <div class="jumbotron-contents">
                    <h1 id="title">賈伯斯在史丹福大學畢業禮演講</h1>
                    <p id="description" class="lead description">我去年問他(凱文·凱利)：『喬布斯從你那裡學到了人生的座右銘，stay hungry ，stay foolish ，這句話你是如何理解的？你可不可以用最簡單、最容易懂的語言，闡述、詮釋這四個英文字？』他是這麼說的：『我們必須了解自己的渺小，如果我們不學習，科技的發展速度會讓我們所有的一切在五年後被清空...</p>

                    <div class="keyword">
                        <label>關鍵字</label>
                        <div class="tag_style_2">
                            <a href="#">太陽花</a>
                            <a href="#">學運</a>
                            <a href="#">大腸花</a>
                            <a href="#">林非凡</a>
                            <a href="#">馬卡茸</a>
                        </div>
                    </div>

                    <div class="date">
                        <label>發佈日期</label>
                        <span>2014.04.05</span>
                    </div>
<a href="#myModal" role="button" class="btn btn-warning btn-font collect" data-toggle="modal">收藏起來</a>
<a href="/ispeech_feature/pages/article.php" class="btn btn-primary btn-font reading" role="button">詳細閱讀</a>
                </div>
            </div>
        </div>
      <?php } ?>
    </div>
</div>


<!-- Thumbnails
================================================== -->
<div class="row">
  <h2 class="example-title">過去演講</h2>
  <div class="row">
    <?php for($i=0;$i<$this->thumbnail_a_num;$i++) { ?>
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
                <div class="tag_style_2">
                    <a href="#">太陽花</a>
                    <a href="#">學運</a>
                    <a href="#">大腸花</a>
                    <a href="#">林非凡</a>
                    <a href="#">馬卡茸</a>
                </div>
            </div>

            <div class="date">
                <label>發佈日期</label>
                <span>2014.04.05</span>
            </div>

            <a href="#myModal" role="button" class="btn btn-warning btn-font collect" data-toggle="modal">收藏起來</a>
            <a href="/ispeech_feature/pages/article.php" class="btn btn-primary btn-font reading" role="button">詳細閱讀</a>

          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
