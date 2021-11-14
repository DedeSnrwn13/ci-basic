<?php $this->load->view('partials/header'); ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/home-bg.jpg')">
	<div class="container position-relative px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
				<div class="site-heading">
					<h1>Wellcome</h1>
                    <span class="subheading">Website diary Dede Sunarwan</span>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Main Content-->
<div class="container px-4 px-lg-5">
	<div class="row gx-4 gx-lg-5 justify-content-center">		
		<div class="col-md-10 col-lg-8 col-xl-7">
			<?php echo $this->session->flashdata('message'); ?>
			<form class="d-flex">
				<input class="form-control me-2" type="search" name="find" placeholder="Search" aria-label="Search">
				<button class="btn btn-success" type="submit">Search</button>
			</form>

			<?php foreach ($blogs as $key => $blog): ?>
				<!-- Post preview-->
				<div class="post-preview">
					<a href="<?php echo site_url('blog/detail/'.$blog['url']); ?>">
						<h2 class="post-title"><?php echo $blog['title']; ?></h2>
						<h3 class="post-subtitle"><?php echo $blog['content']; ?></h3>
					</a>
					<p class="post-meta">
						Posted by
						<a href="#!">Dede Sunarwan</a>
						on <?php echo date('d M Y', strtotime($blog['date'])); ?>

						<?php if (isset($_SESSION['username'])): ?>
							<a href="<?php echo site_url('blog/edit/'.$blog['id']);?>" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i> Edit</a>
							<a href="<?php echo site_url('blog/delete/'.$blog['id']);?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Ingin Menghapus Post Ini?')"><i class="fas fa-trash-alt"></i> Delete</a>
						<?php endif; ?>
					</p>
				</div>                 
				<!-- Divider-->
				<hr class="my-4" />
			<?php endforeach; ?>
			<!-- Pager-->
			<?php echo $this->pagination->create_links(); ?>

			<div class="clearfix">
				<a class="btn btn-primary float-right" href="#">Older Posts ?</a>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('partials/footer'); ?>
        
