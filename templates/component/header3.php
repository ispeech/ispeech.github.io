
<div class="sticky-wrapper" >
<header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!--mobile tablet-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle"></button>

            <a class="logo_mobile" href="/ispeech_feature/pages/nindex.php">
                <span class="glyphicon glyphicon-heart-empty icon-mobile"></span>
                <span>聽講</span>
            </a>

            <!-- <a id="translateLink" class="btn btn-large btn-primary" style="font-size: 2em;">簡體</a> -->
            <!-- <a class="navbar-brand" href="/ispeech/pages/index.php"></a> -->
        </div>

        <!--桌機-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
            <a href="/ispeech_feature/pages/nindex.php" class="logo">Is</a>
            <p class="slogan">多看多聽不一樣的經驗分享，將改變你的態度與人生</p>

            <?php if ($this->login_status) {?>

                <div id="show_side_menu" class="navbar-right">
                    <img style="height: 40px;width: 40px;border-radius: 10px;margin: 6px 0 0 0;" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-frc3/t1.0-1/p50x50/10314011_10202684084237605_1762184246269689844_t.jpg" >
                </div>

            <?php } else { ?>
                <button type="button" class="btn btn-primary navbar-right" data-loading-text="Loading...">Facebook Log In</button>
            <?php } ?>

        </div>


    </div>
</header>
</div>
