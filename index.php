<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>6th National Conference for Community Service</title>
	<meta content="" name="description">
	<meta content="" name="keywords">
	<meta property="og:title" content="NaCosVi 2023">
	<meta property="og:description" content="6th National Conference for Community Service">
	<meta property="og:image" content="https://conference.polije.ac.id/nacosvi/2022/public/img/favicon.png">
	<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
	<meta property="og:url" content="<?php echo $actual_link ?>">

	<!-- Favicons -->
	<link href="public/img/favicon.png" rel="icon">
	<link href="public/img/favicon.png" rel="apple-touch-icon">
	<link rel="shortcut icon" href="./public/img/nacosvi.png">

	<!-- Favicons -->
	<link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
	<link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link rel="stylesheet" href="./assets/vendor/aos/aos.css">
	<link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" href="./assets/vendor/boxicons/css/boxicons.min.css">
	<link rel="stylesheet" href="./assets/vendor/glightbox/css/glightbox.min.css">
	<link rel="stylesheet" href="./assets/vendor/swiper/swiper-bundle.min.css">

	<link rel="icon" href="https://conference.polije.ac.id/nacosvi/2022/public/img/favicon.png" type="image/x-icon" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
	<!-- Google Fonts Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

	<!-- Template Main CSS File -->
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center header-transparent">
		<div class="container d-flex justify-content-between align-items-center">

			<div id="logo">
				<a href="./#"><img src="./assets/img/nacosvi-text.svg" alt="" style="max-height: 50px"></a>
			</div>
			<div id="logo">
				<a href="./#"><img src="./assets/img/Logo_Dies_Natalis.png" alt="" style="max-height: 70px"></a>
			</div>


			<nav id="navbar" class="navbar" style="background-color: transparent;">
				<ul>
					<li><a class="nav-link scrollto" href="./#publish">Call for Papper</a></li>
					<li><a class="nav-link scrollto" href="./#speaker">Speaker</a></li>
					<li class="dropdown"><a href="#"><span>For Author</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="./#timeline">Important Dates</a></li>
							<li><a href="?page=registration-fee">Registration Fee</a></li>
							<li class="dropdown"><a href="#"><span>Converence Event</span> <i class="bi bi-chevron-right"></i></a>
								<ul>
									<li><a href="?page=program-schedule">Program Schedule</a></li>
									<li><a href="?page=presentaion-schedule">Presentation Schedule</a></li>
								</ul>
							</li>
							<!-- <li><a href="https://wa.me/6282231261588" target="_blank">Contact</a></li> -->
							<li><a href="./#publication">Publication</a></li>
							<li><a href="./#footer">Contact</a></li>
							<li><a href="?page=commite">Committee</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="./#location">Vanue</a></li>
							<li><a href="?page=gallery">Gallery</a></li>
						</ul>
					</li>
					<!-- <li><a class="nav-link scrollto" href="./#publication">Publication</a></li> -->
					<li><a class="nav-link scrollto " href="?page=download">Download</a></li>
					<li><button class="btn-registration"><a href="https://forms.gle/4GjKgnGj47xtfgaR9" target="_blank">Upload
								Camera Ready and PPT</a></button></li>
					<!-- <li><button class="btn-payment"><a href="https://forms.gle/dMPTAHNjE4dw1QW37" target="_blank">Payment Here</a></button></li> -->
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->
		</div>
	</header><!-- End Header -->

	<?php
	if (empty($_GET['page'])) {
		include "main.php";
	} elseif ($_GET['page'] == 'registration-fee') {
		include "registration-fee.php";
	} elseif ($_GET['page'] == 'commite') {
		include "commite.php";
	} elseif ($_GET['page'] == 'download') {
		include "download.php";
	} elseif ($_GET['page'] == 'gallery') {
		include "gallery.php";
	} elseif ($_GET['page'] == 'program-schedule') {
		include "program_schedule.php";
	} elseif ($_GET['page'] == 'presentaion-schedule') {
		include "presentation_schedule.php";
	}
	?>


	<footer id="footer">
		<div class="footer-top" data-aos="fade-up">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6">
						<div class="footer-info">
							<img src="./assets/img/nacosvi-text.svg" alt=""
								class="img-fluid bg-white p-3 mb-3 animate__animated animate__fadeInDown">
							<h3 class="animate__animated animate__fadeInUp">6<sup>th</sup> National Conference for
								Community Service</h3>
							<p class="animate__animated animate__fadeInUp">Sinergi <i>Teaching Factory</i> dan Masyarakat
								Desa<br>Menuju Indonesia Emas.</p>
						</div>
					</div>

					<div class="col-lg-1 col-md-6 footer-links">
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Important Link</h4>
						<ul style="list-style-type: none;">
							<li><i class="bi bi-chevron-right"></i> <a href="https://www.kemdikbud.go.id/main/">Kemendikbud</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="https://polije.ac.id/">Polije</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="https://conference.polije.ac.id/">Conference Polije</a>
							</li>
						</ul>
					</div>

					<div class="col-lg-5 col-md-6 footer-newsletter">
						<h4>Contact Info</h4>
						<p>
							<span class="fw-bold">Office Address :</span> Jl. Mastrip Po Box 164 Jember, East Java,
							Indonesia<br>
							<span class="fw-bold">Phone :</span> +62 331 333533<br>
							<span class="fw-bold">Website :</span> https://conference.polije.ac.id/nacosvi/2022/<br>
							<span class="fw-bold">Email :</span> nacosvi@polije.ac.id<br><br>
							<span class="fw-bold"><i class="bi bi-whatsapp h5 text-light"></i> Contact Person
								(Whatsapp):</span><br>
						</p>
						<ul>
							<li><i class="bi bi-check-all h5 text-light"></i> <span class="fw-bold">Dr. Yuana Susmiati, S.TP,
									M.Si</span><br>
								<a href="https://wa.me/6282231261588" target="_blank" class="text-white fw-bold h5">+62
									822-3126-1588</a><br>(Klik number to send
								message)
							</li>
							<li><i class="bi bi-check-all h5 text-light"></i> <span class="fw-bold">Beni Widiawan, S.ST,
									M.T</span><br>
								<a href="https://wa.me/6281336285687" target="_blank" class="text-white fw-bold h5">+62
									813-3628-5687</a><br>(Klik number to send
								message)
							</li>


						</ul>
					</div>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>NaCosVi 2023</span></strong>. All Rights Reserved
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
	<script>
		var swiper = new Swiper(".mySwiper", {
			loop: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	</script>
</body>

</html>