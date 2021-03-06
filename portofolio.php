<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Blondev - Portofolio Kami</title>

	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/other-page.css">
	<link rel="stylesheet" href="assets/css/media.css">

	<!-- SLICK SLIDER CSS -->
	<link rel="stylesheet" href="assets/vendors/slick/slick.css">
	<link rel="stylesheet" href="assets/vendors/slick/slick-bkk.css">

	<!-- AOS CSS -->
	<link rel="stylesheet" href="assets/vendors/aos/aos.min.css">

	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="assets/web-fonts-with-css/css/fontawesome-all.min.css">

	<!-- INCLUDE GLOBAL JS -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/change.js"></script>

</head>
<body>
	

	<!-- include navbar -->
	<?php include 'template/nav.php'; ?>

	<!-- top title about -->
	<div class="container section-top-about">
		<div class="row">	
			<div class="col-lg-12">
				<p class="mb-0 sub-first-about text-center about-top">Portofolio kami</p>
				<h1 class="title-section text-center lh-16 pt-4">Memberikan Pengalaman digital terbaik untuk anda</h1>
			</div>
		</div>
	</div>

	<!-- portofolio-->
	<div class="container  mt-3 mb-5 pb-5">
		<div class="row">

			<div class="col-12 mt-5">
				
				<ul class="nav nav-pills mb-3 justify-content-center content-start" id="pills-tab" role="tablist">
					<li class="nav-item w-nav-item">
						<a class="nav-link item-categories active" id="semua-kategori" data-toggle="pill" href="#all-kategori" role="tab" aria-controls="all-kategori" aria-selected="true">Semua</a>
					</li>
					<li class="nav-item w-nav-item">
						<a class="nav-link item-categories" id="pills-website" data-toggle="pill" href="#kategori-website" role="tab" aria-controls="kategori-website" aria-selected="false">Website</a>
					</li>
					<li class="nav-item w-nav-item">
						<a class="nav-link item-categories" id="pills-android" data-toggle="pill" href="#kategori-android" role="tab" aria-controls="kategori-android" aria-selected="false">Android</a>
					</li>
				</ul>

				<div class="tab-content" id="pills-tabContent">

					<div class="tab-pane fade show active" id="all-kategori" role="tabpanel" aria-labelledby="semua-kategori">

						<div class="row mt-5 pt-4 backup-row-porto">

							<div class="col-12 mb-3 set-mb-xs" data-aos="fade-up">
								<p><a href="">
									<img src="assets/img/foto-projek/salinan-app.png" class="img-fluid img-list-portofolio" alt="">
								</a></p>
							</div>

							<div class="col-lg-6 col-md-6 mb-3 set-mb-xs" data-aos="fade-up">
								<p><a href="">
									<img src="assets/img/foto-projek/app-emonev.png" class="img-fluid img-list-portofolio" alt="">
								</a></p>
							</div>

							<div class="col-lg-6 col-md-6 mb-3 set-mb-xs" data-aos="fade-up">
								<p><a href="">
									<img src="assets/img/foto-projek/app-surat.png" class="img-fluid img-list-portofolio" alt="">
								</a></p>
							</div>

						</div>
					</div>

					<div class="tab-pane fade" id="kategori-website" role="tabpanel" aria-labelledby="pills-website">

						<div class="row mt-5 pt-4 backup-row-porto">

							<div class="col-lg-6 col-md-6 mb-3 set-mb-xs" data-aos="fade-up">
								<p><a href="">
									<img src="assets/img/foto-projek/app-emonev.png" class="img-fluid img-list-portofolio" alt="">
								</a></p>
							</div>

						</div>
					</div>

					<div class="tab-pane fade" id="kategori-android" role="tabpanel" aria-labelledby="pills-android">
						<div class="row mt-5 pt-4 backup-row-porto">
							<div class="col-lg-6 col-md-6 mb-3 set-mb-xs" data-aos="fade-up">
								<p><a href="">
									<img src="assets/img/foto-projek/app-surat.png" class="img-fluid img-list-portofolio" alt="">
								</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

	<!-- include footer -->
	<?php include 'template/footer.php'; ?>

</body>
</html>


<!-- SLICK SLIDER JS -->
<script src="assets/vendors/slick/slick.min.js"></script>

<!-- AOS JS -->
<script src="assets/vendors/aos/aos.min.js"></script>
<script src="assets/vendors/aos/set-aos.js"></script>

