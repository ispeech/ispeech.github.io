
<!-- <div class="sticky-wrapper" > -->
<header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <a href="/ispeech_feature/pages/index.php" class="logo">Is</a>
        <!--mobile tablet-->
        <!-- <div class="navbar-header"> -->

        <?php if ($this->login_status) {?>
            <button type="button" class="navbar-toggle open_nav"></button>
        <?php } else { ?>
            <button type="button" class="navbar-toggle advanced_btn_mobile"><i class="fa fa-cog fa-2x"></i></button>
        <?php } ?>
        <p class="slogan_mobile only_mobile">愛聽講</p>
<!--                         <div class="logo_mobile">
            <span class="glyphicon glyphicon-heart-empty icon-mobile"></span>
            愛聽講
            </div> -->

            <!-- <a id="translateLink" class="btn btn-large btn-primary" style="font-size: 2em;">簡體</a> -->
            <!-- <a class="navbar-brand" href="/ispeech/pages/index.php"></a> -->
        <!-- </div> -->

        <!--桌機-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">

            <p class="slogan">多看多聽不一樣的經驗分享，將改變你的態度與人生</p>

            <?php if ($this->login_status) {?>
                <div id="show_side_menu" class="navbar-right">
                    <img class="head_logo"  src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-frc3/t1.0-1/p50x50/10314011_10202684084237605_1762184246269689844_t.jpg" >
                </div>
            <?php } else { ?>
                <button type="button" class="btn btn-primary navbar-right advanced_btn">使用進階功能</button>
            <?php } ?>

        </div>
    </div>
</header>
<!-- </div> -->
