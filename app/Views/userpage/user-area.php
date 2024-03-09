<?= $this->extend('layouts/isuser'); ?>
<?= $this->section('user_valid') ?>

<div class="flat-tabs">

    <?= $this->include('partials/menu-user'); ?>

	<div class="content-tabs">

		<?= $this->include('userpage/dashboard'); ?>
		
		<?= $this->include('userpage/transaction'); ?>

		<?= $this->include('userpage/deposit'); ?>

		<?= $this->include('userpage/mutation'); ?>

		<?= $this->include('userpage/report'); ?>

	</div>
</div>

<?= $this->endSection() ?>