<?php $this -> layout('component/layout2') ?>
<?php $this -> title = 'ISPEECH' ?>

<?php $this -> start('CSS') ?>
<link rel="stylesheet" href="../static/css/article.css">
<?php $this -> end() ?>

<?php $this -> start('content') ?>

	<?php $this->insert('component/navbar') ?>

	<div class="container">
		<?php $this->insert('component/author') ?>
		<?php $this->insert('component/tab') ?>
	</div>

	<?php $this -> insert('component/footer2') ?>

<?php $this -> end() ?>

<?php $this -> start('javascript') ?>
<script>

$(window).on({
	ready: ISPEECH.event.screenWidth,
	resize: ISPEECH.event.screenWidth,
	scroll: ISPEECH.event.scrollEvent
});

$('.sticky-wrapper').waypoint('sticky');
</script>
<?php $this -> end() ?>