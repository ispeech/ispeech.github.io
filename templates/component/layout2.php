<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <title><?=$this->title?></title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
        <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../bower_components/flat-ui-official/css/flat-ui.css">

        <!-- <link rel="stylesheet" href="http://www.littleco.com/wp-content/themes/littlecompany/css/bootstrap-responsive.css"> -->
        <!-- <link rel="stylesheet" href="http://www.littleco.com/wp-content/themes/littlecompany/css/main.css?ver=20130926"> -->
    	<!-- <link rel="stylesheet" href="http://www.littleco.com/wp-content/themes/littlecompany/css/font-awesome.css"> -->
        <?=$this->CSS?>
    </head>

    <body>

        <!--load FB-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/zh_TW/all.js#xfbml=1&appId=582221601854005";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>

        <!--load GTM-->


        <?=$this->content?>

        <!--load dependency script-->
        <script src="../bower_components/jquery/dist/jquery.js"></script>
        <script src="../bower_components/slidr/slidr.min.js"></script>
        <script src="../bower_components/jquery-waypoints/waypoints.min.js"></script>
        <script src="http://www.slidesjs.com/js/jquery.slides.min.js"></script>
        <script src="../static/js/tw_cn.js"></script>
        <script src="../bower_components/jquery-waypoints/shortcuts/sticky-elements/waypoints-sticky.js"></script>
        <script src="http://www.littleco.com/wp-content/themes/littlecompany/js/bootstrap.min.js?ver=20130926"></script>
    	<script src="http://www.littleco.com/wp-content/themes/littlecompany/js/jquery.validity.min.js?ver=20130926"></script>

        <!--load script-->
        <script src="../static/js/ispeech.js"></script>

        <script type="text/javascript">
            var defaultEncoding = 1;
            var translateDelay = 0;
            var cookieDomain = '//localhost';
            var msgToTraditionalChinese = "切換简体";
            var msgToSimplifiedChinese = "切換繁體";
            var translateButtonId = "translateLink";
            translateInitilization();
        </script>
        <?=$this->javascript?>

    </body>

</html>

