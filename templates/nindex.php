<?php $this -> layout('component/layout2') ?>
<?php $this -> title = 'ISPEECH' ?>


<?php $this -> start('CSS') ?>
<link rel="stylesheet" href="../static/css/nindex.css">
<?php $this -> end() ?>

<?php $this -> start('content') ?>

  <?php $this -> insert('component/header3') ?>


  <!-- <div class="main"> -->

  <div class="container container-top">

      <?php $this -> insert('component/tagcloud') ?>
      <?php $this -> insert('component/thumbnail') ?>
      <!-- <?php $this -> insert('component/pagination') ?> -->

  </div>
  <?php $this -> insert('component/footer2') ?>
  <?php $this -> insert('component/navbar3') ?>


  <!-- </div> -->
  <?php $this -> insert('component/modal') ?>

<?php $this -> end() ?>


<?php $this -> start('javascript') ?>
<script>

</script>
<?php $this -> end() ?>