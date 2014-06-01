<?php $this -> layout('component/layout2') ?>
<?php $this -> title = 'ISPEECH' ?>


<?php $this -> start('CSS') ?>
<link rel="stylesheet" href="../static/css/box.css">
<?php $this -> end() ?>

<?php $this -> start('content') ?>

  <?php $this -> insert('component/header3') ?>
  <?php $this -> insert('component/navbar3') ?>

  <!-- <div class="main"> -->

  <div class="container container-top">

    <form role="form">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Check me out
        </label>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

  </div>

  <?php $this -> insert('component/footer2') ?>

  <!-- </div> -->
  <?php $this -> insert('component/modal') ?>

<?php $this -> end() ?>


<?php $this -> start('javascript') ?>
<script>

</script>
<?php $this -> end() ?>