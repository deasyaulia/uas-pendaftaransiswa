@extends('layouts.app')
@section('title', 'Home')
@section('content')

<<html>
	<head>
		<title>Pendaftaran Siswa SMA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<header>
					<span class="image avatar"><img src="{{ asset('assets/images/profilee.jpg') }}" alt="Profilee"></span>
					<h1 id="logo"><a href="#"> ༘ೀ⋆𝓓&𝓓༘ೀ⋆</a></h1>
					<nav>
					<p>Website Pendaftaran Siswa SMA<br/>
					"Masa depan cerah dimulai dari pendidikan yang baik. Gabung dengan kami dan jadilah siswa yang cerdas"</p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one">About</a></li>
						<li><a href="#two">Pendaftaran Siswa</a></li>
						<li><a href="#three">Sekilas Tentang Developer</a></li>
						<li><a href="#four">Review</a></li>
					</ul>
				</nav>
				<footer>
				<head>
  					<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
				</head>
				<ul class="icons">
					<li><a href="https://twitter.com" class="icon brands fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
					<li><a href="https://facebook.com" class="icon brands fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
					<li><a href="https://instagram.com" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
					<li><a href="https://github.com" class="icon brands fa-github" target="_blank"><span class="label">Github</span></a></li>
					<li><a href="mailto:example@example.com" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="image main" data-position="center">
                                <img src="{{ asset('assets/images/Schoolb.jpg') }}" alt="Schoolb">
								</div>
								<div class="container">
									<header class="major">
										<h2>Welcome To Our Site!</h2>
										<p>Sekilas Tentang Website Kami:<br/>
									</header>
									<p>Sistem yang kami buat ini bertujuan untuk mempermudah proses pendaftaran calon siswa baru dengan cara yang lebih cepat dan efisien. 
										Selain itu, sistem ini juga dibuat untuk memenuhi kewajiban tugas UAS dari mata kuliah pemrograman berbasis web.
										Dengan sistem ini, diharapkan pendaftaran bisa dilakukan secara online, menghemat waktu, dan mempermudah semua pihak yang terlibat.</p>
								</div>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="container">
									<h3>Pendaftaran Siswa SMA</h3>
									<p>Tata Cara Pendaftaran:</p>
									<head>
									<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
									</head>
									<body>
									<ul class="feature-icons">
										<li><a href="#nama-pendaftar" class="icon solid fa-user"> Masukkan Nama Pendaftar</a></li>
										<li><a href="#email" class="icon solid fa-envelope"> Masukkan Email</a></li>
										<li><a href="#jurusan" class="icon solid fa-book"> Pilih Jurusan Yang Diminati</a></li>
										<li><a href="#tanggal-pendaftaran" class="icon solid fa-calendar"> Input Tanggal Pendaftaran</a></li>
									</ul>
									</body>
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<h3>Sekilas Tentang Developer</h3>
									<p>Ayo berkenalan dengan developer kami˗ˏˋ ♡ ˎˊ˗</p>
									<div class="features">
										<article>
											<a href="#" class="image"><img src="{{ asset('assets/images/deasy.jpg') }}" alt="Deasy"></a>
											<div class="inner">
												<h4>Nama: Deasy Aulia ִ𓂃 ࣪˖ ִֶָ🐇་༘࿐</h4>
												<p style="margin: 0;">Nama: Deasy Aulia</p>
												<p style="margin: 0;">NIM: C050423002</p>
												<p style="margin: 0;">Tanggal Lahir: 12/12/2004</p>
												<p style="margin: 0;">Email: deasyaulia1204@gmail.com</p>
												<p style="margin: 0;">No.HP: +6283876079927</p>
												<p style="margin: 0;">GitHub: deasyaulia</p>
												<p style="margin: 0;">Alamat: Komp.Kayu Bulan Blok B1, Banjarmasin</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="{{ asset('assets/images/dewi.jpg') }}" alt="Dewi"></a>
											<div class="inner">
												<h4>Nama: Dewi Oktovia Salehah⋆˚ 𝜗🐈‍⬛𝜚˚⋆</h4>
												<p style="margin: 0;">Nama: Dewi Oktavia Salehah</p>
												<p style="margin: 0;">NIM: C050423011</p>
												<p style="margin: 0;">Tanggal Lahir: 07/10/2005</p>
												<p style="margin: 0;">Email: dozxuk@gmail.com</p>
												<p style="margin: 0;">No.HP: +6283152789081</p>
												<p style="margin: 0;">GitHub: DewiosC050423011</p>
												<p style="margin: 0;">Alamat: Jl.Akasia No.62 Rt 11 Rw 003, Banjarbaru</p>
											</div>
										</article>
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="four">
								<div class="container">
									<h3>Review Website Kami Yuk!</h3>
									<p>Berikan pesan dan kesan kalian mengenai fitur website kami.</p>
									<form method="post" action="#">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Name" /></div>
											<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
											<div class="col-12"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
											<div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" class="primary" value="Send Message" /></li>
													<li><input type="reset" value="Reset Form" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>
							</section>

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">deasy & dewi web</a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>