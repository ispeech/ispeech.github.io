<?php $this -> layout('component/layout2') ?>
<?php $this -> title = 'ISPEECH' ?>

<?php $this -> start('CSS') ?>
<link rel="stylesheet" href="../static/css/article.css">
<?php $this -> end() ?>

<?php $this -> start('content') ?>

	<?php $this -> insert('component/header3') ?>
	<?php $this->insert('component/navbar3') ?>


	<div class="container container-top">
		<?php $this->insert('component/author') ?>
		<?php $this->insert('component/tab') ?>
	</div>

	<?php $this -> insert('component/footer2') ?>
  <?php $this -> insert('component/modal') ?>


<?php $this -> end() ?>

<?php $this -> start('javascript') ?>
<script>
	ISPEECH.env.fixTop = $('.fix-section').offset().top;
</script>
<?php $this -> end() ?>