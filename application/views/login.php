<?php $this->load->view('partials/header'); ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/home-bg.jpg')">
	<div class="container position-relative px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
				<div class="site-heading">
					<h1>Log In</h1>
                    <span class="subheading">Login untuk bisa membuat dan mengedit Artikel</span>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Main Content-->
<div class="container px-4 px-lg-5">
	<div class="row gx-4 gx-lg-5 justify-content-center">		
		<div class="col-md-6 col-lg-6 col-xl-6">
			<div class="alert alert-warning">
            	<span><?php echo $this->session->flashdata('message'); ?></span>
          	</div>

			<?php echo form_open() ;?>
				<div class="form-group mb-3">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
				</div>

				<div class="form-group mb-3">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>

				<button type="submit" class="btn btn-primary mb-5">Login</button>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<?php $this->load->view('partials/footer');  ?>
