<!DOCTYPE html>
<html lang="en">
<head>
<title>Rekomendasi</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
        .header {
            text-align: center;
            margin-bottom: 40px;
            color: #2d5a27;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        .filter-section {
            background: white;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .filter-btn {
            padding: 8px 16px;
            border: 2px solid #28a745;
            background: transparent;
            color: #28a745;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .snack-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .snack-card {
            background: white;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }


        .snack-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
        }

        .snack-emoji {
            font-size: 2.5rem;
            margin-right: 15px;
        }

        .snack-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #333;
            flex: 1;
        }


        .content-label {
            font-weight: 600;
            color: #dc3545;
            margin-bottom: 5px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .tips-icon {
            color: #28a745;
            margin-right: 8px;
        }

        .search-box {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #ddd;
            border-radius: 50px;
            font-size: 1rem;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .search-box:focus {
            outline: none;
            border-color: #28a745;
            box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.1);
        }
    </style>
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/image-comparison-slider-master/style.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
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
					<li class="active"><a href="services.php">Rekomendasi</a></li>
					<li><a href="blog.php">Artikel</a></li>
					<li><a href="contact.php">Tentang Kami</a></li>
				</ul>
			</nav>
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
				
				<!-- Work Hourse -->
				<div class="work_hours">Mo - Sat: 8:00am - 9:00pm</div>

				<!-- Login Button -->
				<div class="button button_1 header_button"><a href="#">Login</a></div>

				<!-- Header Social -->
				<div class="social header_social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/services.jpg" data-speed="0.8"></div>
		<div class="home_overlay"><img src="images/home_overlay.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Rekomendasi</div>
							<div class="home_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="services">
		<div class="">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
						<div class="section_subtitle">Check Your Snack</div>
						<div class="section_title"><h2>Rekomendasi Snack Sehat</h2></div>
					</div>
				</div>
			</div>
			<div class="row services_row">
		 <div class="container">

        <div class="filter-section">
            <input type="text" class="search-box" placeholder="🔍 Cari snack favoritmu..." id="searchInput">
            
            <div class="filter-buttons">
                <button class="filter-btn active" data-category="all">Semua</button>
                <button class="filter-btn" data-category="kacang">Kacang-kacangan</button>
                <button class="filter-btn" data-category="buah">Buah</button>
                <button class="filter-btn" data-category="keripik">Keripik</button>
                <button class="filter-btn" data-category="protein">Tinggi Protein</button>
                <button class="filter-btn" data-category="manis">Rasa Manis</button>
            </div>
            
            <div class="stats-counter" id="statsCounter">
                Menampilkan 12 rekomendasi snack sehat
            </div>
        </div>

        <div class="snack-grid" id="snackGrid">
            <!-- Snack cards akan diisi oleh JavaScript -->
        </div>
    </div>

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
              <p>
                Platform interaktif untuk mengecek apakah camilanmu sehat atau perlu dihindari.
                Mulai sekarang dan buat pilihan ngemil yang lebih cerdas!
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
    </footer>

	<!-- Services -->
</div>
	

    
    <script>
        const snackData = [
            {
                emoji: "🍿",
                name: "Popcorn Tanpa Mentega",
                reason: "Rendah kalori, tinggi serat, cocok untuk ngemil tanpa rasa bersalah",
                alternative: "Cheetos, Taro, snack kentang goreng lainnya",
                tips: "Buat sendiri tanpa mentega, tambahkan bubuk keju rendah sodium untuk rasa",
                category: ["keripik", "rendah-kalori"]
            },
            {
                emoji: "🥜",
                name: "Kacang Panggang",
                reason: "Kaya protein & lemak sehat, bikin kenyang lebih lama",
                alternative: "Kacang goreng, Chiki kacang, snack kacang berperisa",
                tips: "Pilih yang tanpa garam tambahan, konsumsi 1 genggam per hari",
                category: ["kacang", "protein"]
            },
            {
                emoji: "🍌",
                name: "Keripik Pisang Oven",
                reason: "Tanpa pewarna & pengawet, mengandung potasium alami",
                alternative: "Wafer, keripik manis, biskuit rasa buah",
                tips: "Cek kemasan untuk kandungan gula, pilih yang tidak digoreng",
                category: ["buah", "keripik"]
            },
            {
                emoji: "🧀",
                name: "Keju Stick Rendah Lemak",
                reason: "Tinggi kalsium dan protein, baik untuk tulang dan otot",
                alternative: "Snack keju rasa buatan, keju olahan berperisa",
                tips: "Konsumsi sebagai camilan pagi/sore, kombinasikan dengan buah",
                category: ["protein", "kalsium"]
            },
            {
                emoji: "🥕",
                name: "Veggie Chips",
                reason: "Sumber serat & vitamin, lebih bergizi dari keripik biasa",
                alternative: "Keripik kentang, Taro, Chitato",
                tips: "Pilih yang dipanggang bukan digoreng, perhatikan kandungan sodium",
                category: ["sayuran", "keripik"]
            },
            {
                emoji: "🍘",
                name: "Rice Crackers Tanpa MSG",
                reason: "Lebih ringan di pencernaan, minim bahan kimia",
                alternative: "Biskuit asin, krupuk snack, crackers berperisa",
                tips: "Pilih yang bebas pewarna, baca label dengan teliti",
                category: ["keripik", "rendah-proses"]
            },
            {
                emoji: "🥣",
                name: "Granola Bar Mini",
                reason: "Serat tinggi, pengganjal lapar yang sehat dan mengenyangkan",
                alternative: "Cokelat bar, wafer, biskuit manis",
                tips: "Cek kadar gula sebelum beli, pilih yang dibawah 8g gula per serving",
                category: ["serat", "mengenyangkan"]
            },
            {
                emoji: "🍫",
                name: "Dark Chocolate >70%",
                reason: "Antioksidan tinggi, rendah gula, baik untuk jantung",
                alternative: "Permen, cokelat susu, cokelat putih",
                tips: "Konsumsi 1–2 kotak kecil saja, bukan batang besar",
                category: ["manis", "antioksidan"]
            },
            {
                emoji: "🍏",
                name: "Buah Kering Tanpa Gula",
                reason: "Mengandung serat & rasa manis alami dari buah asli",
                alternative: "Permen buah, jelly, manisan buatan",
                tips: "Cek label 'unsweetened' atau 'no added sugar', jangan berlebihan",
                category: ["buah", "manis"]
            },
            {
                emoji: "🥯",
                name: "Mini Sandwich Gandum",
                reason: "Karbo kompleks + protein, memberikan energi stabil",
                alternative: "Roti putih manis, bolu, kue kering",
                tips: "Gunakan selai kacang tanpa gula tambahan, tambahkan pisang",
                category: ["protein", "mengenyangkan"]
            },
            {
                emoji: "🍠",
                name: "Keripik Ubi Ungu",
                reason: "Kaya antioksidan & serat, warna ungu menandakan anthocyanin tinggi",
                alternative: "Kentang goreng, keripik kentang biasa",
                tips: "Rebus atau oven sendiri, hindari yang digoreng deep fry",
                category: ["sayuran", "antioksidan"]
            },
            {
                emoji: "🥛",
                name: "Yogurt Plain + Buah",
                reason: "Probiotik & kalsium tinggi, baik untuk pencernaan",
                alternative: "Minuman rasa susu buatan, es krim, pudding",
                tips: "Gunakan topping buah asli, hindari sirup atau pemanis buatan",
                category: ["protein", "probiotik"]
            }
        ];

        let filteredData = [...snackData];

        function renderSnacks(data) {
            const grid = document.getElementById('snackGrid');
            const statsCounter = document.getElementById('statsCounter');
            
            statsCounter.textContent = `Menampilkan ${data.length} rekomendasi snack sehat`;
            
            grid.innerHTML = data.map(snack => `
                <div class="snack-card">
                    <div class="snack-header">
                        <div class="snack-emoji">${snack.emoji}</div>
                        <h3 class="snack-title">${snack.name}</h3>
                    </div>
                    
                    <div class="snack-content">
                        <div class="content-section">
                            <div class="content-label">✨ Kenapa Direkomendasikan?</div>
                            <div class="content-text">${snack.reason}</div>
                        </div>
                        
                        <div class="content-section">
                            <div class="content-label">🔄 Alternatif Dari</div>
                            <div class="content-text"><span class="highlight">${snack.alternative}</span></div>
                        </div>
                        
                        <div class="tips-section">
                            <div class="content-label"><span class="tips-icon">💡</span>Tips Konsumsi</div>
                            <div class="content-text">${snack.tips}</div>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        function filterSnacks(category) {
            if (category === 'all') {
                filteredData = [...snackData];
            } else {
                filteredData = snackData.filter(snack => 
                    snack.category.includes(category)
                );
            }
            renderSnacks(filteredData);
        }

        function searchSnacks(query) {
            const searchData = filteredData.filter(snack =>
                snack.name.toLowerCase().includes(query.toLowerCase()) ||
                snack.reason.toLowerCase().includes(query.toLowerCase()) ||
                snack.alternative.toLowerCase().includes(query.toLowerCase())
            );
            renderSnacks(searchData);
        }

        // Event listeners
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelector('.filter-btn.active').classList.remove('active');
                btn.classList.add('active');
                filterSnacks(btn.dataset.category);
            });
        });

        document.getElementById('searchInput').addEventListener('input', (e) => {
            searchSnacks(e.target.value);
        });

        // Initial render
        renderSnacks(snackData);
    </script> 
			
	<!-- Footer -->

	



<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/image-comparison-slider-master/main.js"></script>
<script src="js/services.js"></script>

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