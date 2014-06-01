


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <?php if ($this->login_status) {?>
<!--           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">定義收藏文章標籤</h4>
          </div> -->

          <div class="modal-body">
                <h4 class="modal-title" id="myModalLabel">定義收藏文章標籤</h4>
                <p>現有標籤</p>
                <ul>
                    <li>太陽花</li>
                    <li>Jobs</li>
                </ul>
                <input type="text" placeholder="輸入欲新增標籤.."><br>
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">先不收藏</button> -->
                <button type="button" class="btn btn-primary">確認收藏</button>
          </div>

<!--           <div class="modal-footer">

          </div> -->
      <?php } else { ?>
          <div class="modal-body welcome_to_ispeech">
            <div class="modal_logo">
                <p>Is</p>
                <!-- <span>愛聽講</span> -->
            </div>
            <div class="modal-wrap">
                <!-- <h1>歡迎來到 Ispeech</h1> -->
                <p></p>
                <p>「Ispeech 愛聽講」搜集各種演講資源，在你需要為人生充電，尋找方向與學習其他人經驗時，提供你閱讀以及學習英文。</p>
                <p class="modal-quote">我們都曾因為聽了某些名人或素人的演講，而開始改變了自己的想法與目標。此刻，希望能讓更多人在這平台上找到屬於你的方向，思考人生。</p>
                <p>使用進階功能，可以幫助你更好的使用體驗。</p>
                <ul>
                    <li>1. 自訂收藏標籤</li>
                    <li>2. 收藏你喜歡的文章</li>
                    <li>3. 觀看中英文對照翻譯</li>
                </ul>
                <button type="button" class="btn btn-primary fb_login_btn" data-loading-text="Loading...">開始使用進階功能</button>
            </div>
          </div>
      <?php } ?>


    </div>
  </div>
</div>