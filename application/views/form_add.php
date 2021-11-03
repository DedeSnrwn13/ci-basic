<?php $this->load->view('partials/header') ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/post-bg.jpg')">
	<div class="container position-relative px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
				<div class="post-heading">
					<h1>Buat Artikel Baru</h1>
				</div>
			</div>
		</div>
	</div>
</header>
	
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-7">
			<h1>Tambah Artikel</h1>
			
			<form method="POST">
				<div class="mb-3">
					<label for="" class="form-label">Judul</label>
					<input type="text" name="title" class="form-control">
				</div>				
				<div class="mb-3">
					<label for="" class="form-label">URL</label>
					<input type="text" name="url" class="form-control">
				</div>
				<div class="mb-3">
					<label for="" class="form-label">Konten</label>
					<textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
				</div>
				<button type="submit" class="btn btn-primary mb-5">Simpan Artikel</button>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('partials/footer'); ?>
