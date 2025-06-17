<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>


        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .header p {
            font-size: 1.1rem;
            color: #7f8c8d;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }

        .filter-section {
            margin-bottom: 30px;
            text-align: center;
        }

        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }

        .filter-btn {
            padding: 10px 20px;
            border: 2px solidrgb(34, 173, 178);
            background: transparent;
            color:rgb(31, 181, 186);
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background:rgb(39, 214, 200);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
        }

        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 25px;
        }

        .article-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border-left: 5px solidrgb(52, 234, 234);
            border-right: 2px solidrgb(45, 201, 225);
            position: relative;
            overflow: hidden;
        }

        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .article-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .article-summary {
            color: #5d6d7e;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .article-meta {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }

        .article-source {
            font-size: 0.9rem;
            color: #7f8c8d;
            font-weight: 500;
        }

        .article-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag {
            background: linear-gradient(45deg,rgb(37, 224, 199), #20c997);
            color: white;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .article-actions {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .primary-btn {
            background: linear-gradient(45deg,rgb(101, 238, 199),rgb(53, 216, 148));
            color: white;
        }

        .secondary-btn {
            background: linear-gradient(45deg,rgb(245, 146, 146),rgb(239, 119, 131));
            color: white;
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .stats-section {
            background: linear-gradient(45deg,rgb(28, 207, 207),rgb(58, 247, 221));
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
            border: 2px solidrgb(53, 181, 220);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.2);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 15px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            display: block;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin: 10px;
            }

            .header h1 {
                font-size: 2rem;
                flex-direction: column;
                gap: 10px;
            }

            .filter-buttons {
                flex-direction: column;
                align-items: center;
            }

            .articles-grid {
                grid-template-columns: 1fr;
            }

            .article-actions {
                flex-direction: column;
            }
        }

        .loading {
            text-align: center;
            padding: 40px;
            color: #7f8c8d;
        }

        .no-results {
            text-align: center;
            padding: 40px;
            color: #7f8c8d;
            font-style: italic;
        }
    </style>
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
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
					<li class="active"><a href="blog.php">Artikel</a></li>
					<li><a href="contact.php">Tentang Kami</a></li>
				</ul>
			</nav>
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
				
				<!-- Work Hourse -->
				<div class="work_hours">Mo - Sat: 8:00am - 9:00pm</div>

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
	</div>

	<!-- Home -->

	<div class="home d-flex flex-column align-items-start justify-content-end">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/Artikel.jpg" data-speed="0.8"></div>
		<div class="home_overlay"><img src="images/home_overlay.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Artikel & Jurnal Kesehatan</div>
							<div class="home_text">Kumpulan artikel, jurnal, dan tulisan ilmiah kesehatan.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

        <div class="filter-section">
            <h3>Filter Artikel</h3>
            <div class="filter-buttons">
                <button class="filter-btn active" onclick="filterArticles('all')">Semua</button>
                <button class="filter-btn" onclick="filterArticles('anak')">Snack Anak</button>
                <button class="filter-btn" onclick="filterArticles('ultraprocessed')">Ultra-Processed Food</button>
                <button class="filter-btn" onclick="filterArticles('gula')">Kandungan Gula</button>
                <button class="filter-btn" onclick="filterArticles('msg')">MSG</button>
                <button class="filter-btn" onclick="filterArticles('gizi')">Label Gizi</button>
                <button class="filter-btn" onclick="filterArticles('sehat')">Camilan Sehat</button>
            </div>
        </div>

        <div class="articles-grid mb-4" id="articlesGrid">
            <!-- Articles will be populated by JavaScript -->
        </div>
    </div>

    <script>
        const articles = [
            {
                title: "Dampak Konsumsi Snack Ultra-Processed terhadap Kesehatan Anak",
                summary: "Artikel ini membahas peningkatan konsumsi makanan ringan dan dampaknya terhadap obesitas pada anak usia sekolah. Penelitian menunjukkan korelasi kuat antara konsumsi snack ultra-proses dengan berbagai masalah kesehatan.",
                source: "Google Scholar - Monteiro et al., 2023",
                link: "https://scholar.google.com/scholar?q=ultra+processed+snacks+children+health",
                tags: ["Snack Anak", "Ultra-Processed Food", "Obesitas"],
                category: ["anak", "ultraprocessed"]
            },
            {
                title: "Apa Itu Makanan Ultra-Proses?",
                summary: "Penjelasan konsep 'Ultra-Processed Food' dan cara mengenalinya dari label kemasan. Panduan praktis untuk memahami klasifikasi NOVA dan dampaknya terhadap kesehatan.",
                source: "Monteiro, C.A. - Nature Reviews, 2019",
                link: "https://scholar.google.com/scholar?q=ultra+processed+food+definition+NOVA",
                tags: ["Ultra-Processed Food", "Label Gizi", "Edukasi"],
                category: ["ultraprocessed", "gizi"]
            },
            {
                title: "Kandungan MSG dalam Snack Populer & Dampaknya",
                summary: "Tinjauan ilmiah terhadap efek jangka panjang konsumsi MSG dalam camilan ringan. Analisis komprehensif tentang keamanan dan regulasi penggunaan MSG di Indonesia.",
                source: "Journal of Food Safety - 2022",
                link: "https://scholar.google.com/scholar?q=MSG+packaged+snacks+health+effects",
                tags: ["MSG", "Keamanan Pangan", "Regulasi"],
                category: ["msg"]
            },
            {
                title: "Kebiasaan Ngemil di Indonesia: Studi Nasional 2022",
                summary: "Statistik konsumsi snack dan minuman manis di kalangan remaja Indonesia. Data nasional yang mengungkap pola konsumsi dan preferensi camilan generasi muda.",
                source: "Litbangkes Kemenkes RI - 2022",
                link: "https://www.litbang.kemkes.go.id/laporan-riset-kesehatan-dasar-riskesdas/",
                tags: ["Statistik", "Remaja Indonesia", "Pola Konsumsi"],
                category: ["anak"]
            },
            {
                title: "Gula Tersembunyi dalam Makanan Ringan",
                summary: "Cara membaca label 'no sugar added' dan fakta tentang gula tersembunyi di snack favorit. Panduan praktis untuk mengidentifikasi berbagai jenis gula dalam kemasan.",
                source: "Journal of Nutrition Labels - 2021",
                link: "https://scholar.google.com/scholar?q=hidden+sugar+packaged+snacks+labels",
                tags: ["Kandungan Gula", "Label Gizi", "Edukasi Konsumen"],
                category: ["gula", "gizi"]
            },
            {
                title: "Riset: Snack Berbahan Dasar Nabati dan Kesehatan Pencernaan",
                summary: "Studi menunjukkan snack berbasis kacang dan biji mendukung pencernaan yang lebih baik. Penelitian terbaru tentang manfaat serat dan protein nabati untuk mikrobiota usus.",
                source: "Plant-Based Nutrition Research - 2023",
                link: "https://scholar.google.com/scholar?q=plant+based+snacks+digestive+health",
                tags: ["Camilan Sehat", "Protein Nabati", "Kesehatan Pencernaan"],
                category: ["sehat"]
            },
            {
                title: "Peran Camilan Sehat dalam Pencegahan Diabetes Tipe 2",
                summary: "Analisis jurnal tentang pola makan dan snack sehat dalam menurunkan risiko penyakit metabolik. Rekomendasi camilan untuk pencegahan diabetes berdasarkan evidence.",
                source: "PubMed - Diabetes Prevention Study, 2023",
                link: "https://pubmed.ncbi.nlm.nih.gov/",
                tags: ["Diabetes", "Camilan Sehat", "Pencegahan"],
                category: ["sehat"]
            },
            {
                title: "Fakta Tentang Pewarna Sintetik dalam Snack Anak",
                summary: "Efek pewarna makanan terhadap perilaku dan kesehatan jangka panjang anak. Tinjauan sistematis tentang keamanan pewarna buatan dan alternatif alami.",
                source: "Food Additives Review Journal - 2020",
                link: "https://scholar.google.com/scholar?q=synthetic+food+coloring+children+behavior",
                tags: ["Snack Anak", "Pewarna Makanan", "ADHD"],
                category: ["anak"]
            },
            {
                title: "Mengenal Lemak Trans dalam Snack Gurih",
                summary: "Apa itu lemak trans, dan mengapa harus dihindari dalam camilan harian. Panduan mengidentifikasi dan menghindari lemak trans dalam makanan kemasan.",
                source: "WHO & American Heart Association - 2021",
                link: "https://scholar.google.com/scholar?q=trans+fat+packaged+snacks+health",
                tags: ["Lemak Trans", "Penyakit Jantung", "WHO"],
                category: ["ultraprocessed"]
            },
            {
                title: "Alternatif Camilan Lokal yang Lebih Sehat",
                summary: "Studi dari Universitas Indonesia tentang potensi camilan tradisional sebagai pengganti snack kemasan. Analisis nutrisi dan manfaat ekonomi camilan lokal.",
                source: "Repositori Universitas Indonesia - 2022",
                link: "https://scholar.google.com/scholar?q=traditional+indonesian+snacks+nutrition",
                tags: ["Camilan Lokal", "Tradisional", "Ekonomi Kreatif"],
                category: ["sehat"]
            },
            {
                title: "Efektivitas Edukasi Gizi Lewat Aplikasi dan Website Interaktif",
                summary: "Manfaat media digital dalam meningkatkan kesadaran gizi remaja dan anak muda. Evaluasi dampak teknologi terhadap perubahan perilaku makan sehat.",
                source: "Journal of Digital Health Education - 2021",
                link: "https://scholar.google.com/scholar?q=digital+nutrition+education+apps",
                tags: ["Edukasi Digital", "Teknologi Kesehatan", "Remaja"],
                category: ["gizi"]
            },
            {
                title: "Hubungan Antara Camilan Tinggi Garam dan Tekanan Darah",
                summary: "Korelasi konsumsi sodium dari snack dengan risiko hipertensi. Meta-analisis tentang dampak asupan garam berlebih dari makanan ringan terhadap tekanan darah.",
                source: "PubMed - Hypertension Research, 2022",
                link: "https://pubmed.ncbi.nlm.nih.gov/",
                tags: ["Hipertensi", "Kandungan Garam", "Tekanan Darah"],
                category: ["ultraprocessed"]
            },
            {
                title: "Apakah Camilan Manis Mengganggu Konsentrasi Belajar?",
                summary: "Studi dari jurnal pendidikan & gizi tentang efek snack manis terhadap kognisi. Penelitian dampak gula darah terhadap fokus dan prestasi akademik siswa.",
                source: "Educational Psychology & Nutrition - 2023",
                link: "https://scholar.google.com/scholar?q=sweet+snacks+concentration+learning+students",
                tags: ["Kandungan Gula", "Konsentrasi", "Prestasi Belajar"],
                category: ["gula", "anak"]
            },
            {
                title: "Snack dan Mikrobiota Usus: Apa Hubungannya?",
                summary: "Pengaruh jenis camilan terhadap kesehatan mikroba dalam sistem pencernaan. Riset terbaru tentang hubungan antara processed food dan diversitas mikrobiota.",
                source: "Journal of Gut Health - 2022",
                link: "https://scholar.google.com/scholar?q=snacks+gut+microbiota+processed+food",
                tags: ["Mikrobiota", "Kesehatan Pencernaan", "Probiotik"],
                category: ["sehat"]
            },
            {
                title: "Cara Membaca Label Nutrisi dengan Cepat",
                summary: "Panduan praktis dan berbasis jurnal untuk memahami informasi gizi pada snack kemasan. Tips efektif untuk konsumen dalam memilih produk yang lebih sehat.",
                source: "Kemenkes RI & Harvard Health - 2023",
                link: "https://scholar.google.com/scholar?q=nutrition+label+reading+guide+Indonesia",
                tags: ["Label Gizi", "Edukasi Konsumen", "Panduan Praktis"],
                category: ["gizi"]
            }
        ];

        let currentFilter = 'all';

        function renderArticles(articlesToShow = articles) {
            const grid = document.getElementById('articlesGrid');
            
            if (articlesToShow.length === 0) {
                grid.innerHTML = '<div class="no-results"><i class="fas fa-search"></i><br>Tidak ada artikel yang sesuai dengan filter yang dipilih.</div>';
                return;
            }

            grid.innerHTML = articlesToShow.map(article => `
                <div class="article-card">
                    <h3 class="article-title">${article.title}</h3>
                    <p class="article-summary">${article.summary}</p>
                    <div class="article-meta">
                        <div class="article-source">
                            <i class="fas fa-university"></i> ${article.source}
                        </div>
                        <div class="article-tags">
                            ${article.tags.map(tag => `<span class="tag">${tag}</span>`).join('')}
                        </div>
                    </div>
                    <div class="article-actions">
                        <a href="${article.link}" target="_blank" class="action-btn primary-btn">
                            <i class="fas fa-external-link-alt"></i>
                            Baca di Scholar
                        </a>
                        <button class="action-btn secondary-btn" onclick="showSummary('${article.title}')">
                            <i class="fas fa-eye"></i>
                            Lihat Ringkasan
                        </button>
                    </div>
                </div>
            `).join('');
        }

        function filterArticles(category) {
            currentFilter = category;
            
            // Update active filter button
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            if (category === 'all') {
                renderArticles(articles);
            } else {
                const filtered = articles.filter(article => 
                    article.category.includes(category)
                );
                renderArticles(filtered);
            }
        }

        function showSummary(title) {
            const article = articles.find(a => a.title === title);
            if (article) {
                alert(`📖 Ringkasan: ${article.title}\n\n${article.summary}\n\n📚 Sumber: ${article.source}\n\n🔗 Klik "Baca di Scholar" untuk membaca artikel lengkap.`);
            }
        }

        // Search functionality
        function searchArticles(query) {
            const filtered = articles.filter(article =>
                article.title.toLowerCase().includes(query.toLowerCase()) ||
                article.summary.toLowerCase().includes(query.toLowerCase()) ||
                article.tags.some(tag => tag.toLowerCase().includes(query.toLowerCase()))
            );
            renderArticles(filtered);
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            renderArticles();
            
            // Add search functionality if needed
            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    if (e.target.value.trim() === '') {
                        filterArticles(currentFilter);
                    } else {
                        searchArticles(e.target.value);
                    }
                });
            }
        });

        // Smooth animations
        window.addEventListener('load', function() {
            const cards = document.querySelectorAll('.article-card');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    card.style.transition = 'all 0.5s ease';
                    
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                }, index * 100);
            });
        });
    </script>

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
									<li><a href="blog.php">Artikel</a></li>
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
<script src="js/blog.js"></script>

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