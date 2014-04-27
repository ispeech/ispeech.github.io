<?php $this -> layout('component/layout2') ?>
<?php $this -> title = 'ISPEECH' ?>


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

        <?php $this -> insert('component/tagcloud') ?>

        <?php $this -> insert('component/Jumbotron') ?>

        <?php $this -> insert('component/search') ?>

        <?php $this -> insert('component/thumbnail') ?>





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

$("#slides").slidesjs({
        width: screen.width,
        height: screen.height - 100,
        navigation: false,
        start: 1,
        play: {
          auto: true
        }
});

$('.sticky-wrapper').waypoint('sticky');

</script>
<?php $this -> end() ?>