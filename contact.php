<!DOCTYPE html>
<html lang="en">
<head>
	    <style>
        nav a:hover {
            color: #27ae60;
            transform: translateY(-2px);
        }

        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: #27ae60;
            transition: width 0.3s ease;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Main Content */
        .hero-section {
            text-align: center;
            margin-bottom: 4rem;
            color: #2c3e50;
        }

        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            animation: fadeInDown 1s ease;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
            animation: fadeInUp 1s ease 0.3s both;
        }

        .about-content {
            text-align: center;
            margin-bottom: 2rem;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            max-width: 900px;
            margin: 0 auto;
        }

        /* Team Section */
        .team-section {
            margin-bottom: 3rem;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .team-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.8s ease;
        }

        .team-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(45deg, #27ae60, #e74c3c);
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }

        .team-member {
            text-align: center;
        }

        .member-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(45deg, #27ae60, #2ecc71);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            margin: 0 auto 1.5rem;
            box-shadow: 0 10px 25px rgba(39, 174, 96, 0.3);
            transition: all 0.3s ease;
        }

        .team-card:hover .member-avatar {
            transform: scale(1.1) rotate(5deg);
        }

        .member-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .member-role {
            font-size: 1rem;
            color: #e74c3c;
            font-weight: 600;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .member-description {
            text-align: left;
            margin-bottom: 1.5rem;
        }

        .member-description h4 {
            color: #34495e;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        .member-description p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .member-interests {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .member-interests strong {
            color: #2c3e50;
        }

        .fun-fact {
            background: linear-gradient(45deg, #27ae60, #2ecc71);
            color: white;
            padding: 1rem;
            border-radius: 15px;
            font-style: italic;
            font-size: 0.9rem;
            position: relative;
        }


        /* Floating Elements */
        .floating-element {
            position: fixed;
            font-size: 2rem;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
            z-index: -1;
        }

        .floating-element:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            bottom: 30%;
            left: 20%;
            animation-delay: 4s;
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(100px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            25% {
                transform: translateY(-20px) rotate(5deg);
            }
            50% {
                transform: translateY(-10px) rotate(-5deg);
            }
            75% {
                transform: translateY(-15px) rotate(3deg);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }

            .about-section,
            .goals-section,
            .contact-section {
                padding: 2rem;
            }

            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            nav ul {
                gap: 1rem;
            }
        }
    </style>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="#">
					<div>Check<span>Your</span>Snack</div>
					<div>Evaluasi Camilan Sehat</div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">Beranda</a></li>
					<li><a href="about.php">Evaluasi Camilan</a></li>
					<li><a href="services.php">Rekomendasi</a></li>
					<li><a href="blog.php">Artikel</a></li>
					<li class="active"><a href="contact.php">Tentang Kami</a></li>
				</ul>
			</nav>
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
				
				<!-- Work Hourse -->
				<div class="work_hours">Mo - Sat: 8:00am - 9:00pm</div>


				<!-- Login Button -->

				<!-- Header Social -->
				<div class="social header_social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<!-- Hamburger -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="about.php">Evaluasi Camilan</a></li>
				<li><a href="services.php">Rekomendasi</a></li>
				<li><a href="blog.php">Artikel</a></li>
				<li><a href="contact.php">Tentang Kami</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_link">Mo - Sat: 8:00am - 9:00pm</div>
			<div class="menu_link">+34 586 778 8892</div>
			<div class="menu_link"><a href="#">Make an appointment</a></div>
		</div>
		<div class="social menu_social">
			<ul class="d-flex flex-row align-items-center justify-content-start">
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home d-flex flex-column align-items-start justify-content-end">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_overlay"><img src="images/home_overlay.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Tentang Kami</div>
							<div class="home_text">Platform interaktif untuk mengecek apakah camilanmu sehat atau perlu dihindari.
Mulai sekarang dan buat pilihan ngemil yang lebih cerdas!</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	       <div class="container">
            <!-- Hero Section -->
            <section class="hero-section">
                <p class="hero-subtitle">Check Your Snack</p>
            </section>

            <!-- About Section -->
            <section class="about-section" id="tentang">
                <div class="about-content">
                    <p class="about-text">
                        Check Your Snack dikembangkan oleh dua mahasiswa Manajemen Informasi Kesehatan yang memiliki minat dalam teknologi, edukasi kesehatan, dan desain interaktif. Kami percaya bahwa gaya hidup sehat bisa dimulai dari hal kecil, termasuk dari memilih camilan yang lebih baik. Melalui website ini, kami ingin membantu pengguna memahami kandungan snack sehari-hari dan memberikan alternatif yang lebih sehat dengan cara yang ringan, menyenangkan, dan mudah diakses.
                    </p>
                </div>
            </section>

            <!-- Team Section -->
            <section class="team-section" id="tim">
                <div class="team-grid">
                    <!-- Team Member 1 -->
                    <div class="team-card">
                        <div class="team-member">
                            <div class="member-avatar">👩</div>
                            <h3 class="member-name">Fadhila Shubha Maimuna</h3>
                            <p class="member-role">Desain UI/UX & Riset Gizi</p>
                            
                            <div class="member-description">
                                <h4>Tugas:</h4>
                                <p>Merancang tampilan antarmuka website agar nyaman digunakan, serta melakukan riset kandungan gizi camilan ringan seperti keripik, wafer, dan snack populer lainnya.</p>
                                
                                <div class="member-interests">
                                    <strong>Minat:</strong> Nutrisi masyarakat, edukasi kesehatan berbasis digital.
                                </div>
                                
                                <div class="fun-fact">
                                    <strong>Fun fact:</strong> Punya hobi eksperimen bikin camilan sehat sendiri!
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="team-card">
                        <div class="team-member">
                            <div class="member-avatar">👨</div>
                            <h3 class="member-name">Isnaini Putri Seruni</h3>
                            <p class="member-role">Developer Frontend & Data Analytics</p>
                            
                            <div class="member-description">
                                <h4>Tugas:</h4>
                                <p>Membangun struktur website, membuat fitur interaktif seperti "Scan Snack", "Statistik Mingguan", dan visualisasi grafik konsumsi camilan.</p>
                                
                                <div class="member-interests">
                                    <strong>Minat:</strong> Data mining, keamanan sistem kesehatan, dan pengembangan aplikasi kesehatan sederhana.
                                </div>
                                
                                <div class="fun-fact">
                                    <strong>Fun fact:</strong> Selalu cari snack rendah kalori tapi tetap enak buat teman ngoding!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="footer_logo">
								<a href="#">
									<div>Check<span>Your</span>Snack</div>
									<div>Evaluasi Camilan Sehat</div>
								</a>
							</div>
							<div class="footer_about_text">
								<p>Platform interaktif untuk mengecek apakah camilanmu sehat atau perlu dihindari.
Mulai sekarang dan buat pilihan ngemil yang lebih cerdas!</p>
							</div>
						</div>
					</div>

					<!-- Footer Contact Info -->
					<div class="col-lg-3 footer_col">
						<div class="footer_contact">
							<div class="footer_title">Informasi Kontak</div>
							<ul class="contact_list">
								<li>+62 854 1234 567</li>
								<li>dhilasub123@gmail.com</li>
								<li>seruni0111@gmail.com</li>
							</ul>
						</div>
					</div>

					<!-- Footer Locations -->
					<div class="col-lg-3 footer_col">
						<div class="footer_location">
							<div class="footer_title">Lokasi Kami</div>
							<ul class="locations_list">
								<li>
									<div class="location_title">Bantul</div>
									<div class="location_text">Jalan Kebangsaan Timur</div>
								</li>
								<li>
									<div class="location_title">Yogyakarta</div>
									<div class="location_text">1481 Jalan Kebangsaan No. 931</div>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
							<nav class="footer_nav ml-md-auto">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="index.php">Beranda</a></li>
									<li><a href="about.php">Evaluasi Camilan</a></li>
									<li><a href="services.php">Rekomendasi</a></li>
									<li><a href="blog.php">News</a></li>
									<li><a href="contact.php">Tentang Kami</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>