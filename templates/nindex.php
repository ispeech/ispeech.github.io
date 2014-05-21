<?php $this -> layout('component/layout2') ?>
<?php $this -> title = 'ISPEECH' ?>

<?php $this -> start('CSS') ?>
<link rel="stylesheet" href="../static/css/nindex.css">
<?php $this -> end() ?>

<?php $this -> start('content') ?>

    <?php $this -> insert('component/header2') ?>
    <?php $this -> insert('component/navbar') ?>

    <div class="container">
<!--         <h1 class="name">Welcome To Ispeech</h1>
        <div><img class="_s0 headerTinymanPhoto _rw img" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/t5/1119027_1063520697_1258623415_q.jpg" alt="" id="profile_pic_header_1063520697">
        </div>
        <div class="row">
            <div class="col-md-4 center-block">
            </div>
            <div class="col-md-4 center-block">
                <a href="#fakelink" class="btn btn-block btn-lg btn-primary">Facebook Login</a>
            </div>
            <div class="col-md-4 center-block">

            </div>
        </div> -->


        <?php $this -> insert('component/tagcloud') ?>

        <?php $this -> insert('component/Jumbotron') ?>

        <?php $this -> insert('component/search') ?>

        <?php $this -> insert('component/thumbnail') ?>


        <div class="row">
        <div class="pagination">
            <ul>
              <li class="previous"><a href="#fakelink" class="fui-arrow-left"></a></li>
              <li class="active"><a href="#fakelink">1</a></li>
              <li><a href="#fakelink">2</a></li>
              <li><a href="#fakelink">3</a></li>
              <li><a href="#fakelink">4</a></li>
              <li><a href="#fakelink">5</a></li>
              <li><a href="#fakelink">6</a></li>
              <li><a href="#fakelink">7</a></li>
              <li><a href="#fakelink">8</a></li>
              <li class="next"><a href="#fakelink" class="fui-arrow-right"></a></li>
            </ul>
        </div>
        </div>

    </div>
    <?php $this -> insert('component/footer2') ?>


<?php $this -> end() ?>


<?php $this -> start('javascript') ?>
<script>

$('#logo').on('click',function(){
    var top = $(window).height();
    // $(window).scrollTop(top);
    $('html,body').animate({scrollTop:top},1000);
});

$('#slides img').css({
    width: $(window).width(),
    height: $(window).height()
});

$("#slides").slidesjs({
        width: $(window).width(),
        height: $(window).height(),
        navigation: false,
        start: 1,
        play: {
          auto: true
        }
});

$('.sticky-wrapper').waypoint('sticky');

</script>
<?php $this -> end() ?>