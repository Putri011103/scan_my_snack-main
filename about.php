<?php
include 'db.php'; // Koneksi ke database

// Fungsi untuk mengevaluasi snack
function evaluateSnack($sugar, $fat, $calories) {
    if ($sugar > 20 || $fat > 15 || $calories > 500) {
        return "Tidak Sehat";
    } else if ($sugar <= 5 && $fat <= 5 && $calories <= 200) {
        return "Sangat Sehat";
    } else {
        return "Cukup Sehat";
    }
	
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $sugar = (float)$_POST['sugar'];
    $fat = (float)$_POST['fat'];
    $calories = (float)$_POST['calories'];


    $evaluation = evaluateSnack($sugar, $fat, $calories);

    $stmt = $conn->prepare("SELECT COUNT(*) FROM snacks WHERE name = ? AND sugar = ? AND fat = ? AND calories = ?");
    $stmt->bind_param("sddd", $name, $sugar, $fat, $calories);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count == 0) { 
        $stmt = $conn->prepare("INSERT INTO snacks (name, sugar, fat, calories, evaluation) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sddds", $name, $sugar, $fat, $calories, $evaluation);

        if ($stmt->execute()) {
            $message = "Snack berhasil ditambahkan ke histori dengan evaluasi: $evaluation";
        } else {
            $message = "Terjadi kesalahan: " . $stmt->error;
        }
        $stmt->close();

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $message = "Snack sudah ada dalam histori.";
    }
}


$result = $conn->query("SELECT * FROM snacks ORDER BY created_at DESC");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Check Your Snack</title>
<title>About</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/abouts.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
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
					<li class="active"><a href="about.php">Evaluasi Camilan</a></li>
					<li><a href="services.php">Rekomendasi</a></li>
					<li><a href="blog.php">News</a></li>
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

						<div class="social header_social">
              <ul class="d-flex flex-row align-items-center justify-content-start">
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              </ul>
            </div>
					</div>

					<!-- Home -->

					<div class="home d-flex flex-column align-items-start justify-content-end">
						<div class="background_image" style="background-image:url(images/about.jpg)"></div>
						<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
						<div class="home_overlay"><img src="images/home_overlay.png" alt=""></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content">
											<div class="home_title">Evaluasi Camilan</div>
											<div class="home_text">Platform interaktif untuk mengecek apakah camilanmu sehat atau perlu dihindari.
				Mulai sekarang dan buat pilihan ngemil yang lebih cerdas!</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Intro -->

<div class="container mt-5">
    <h2 class="text-center mb-4">Check Your Snack</h2>
    <?php if (isset($message)) { echo "<div class='alert alert-info'>$message</div>"; } ?>

    <form method="POST" class="mb-5">
        <div class="form-group">
            <label for="name">Nama Snack:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="sugar">Kadar Gula (gram):</label>
            <input type="number" step="0.01" class="form-control" id="sugar" name="sugar" required>
        </div>
        <div class="form-group">
            <label for="fat">Lemak Total (gram):</label>
            <input type="number" step="0.01" class="form-control" id="fat" name="fat" required>
        </div>
        <div class="form-group">
            <label for="calories">Kalori (kcal):</label>
            <input type="number" step="0.01" class="form-control" id="calories" name="calories" required>
        </div>
        <button type="submit" class="btn btn-primary">Check Your Snack</button>
    </form>

    <!-- Histori Snack -->
    <h2 class="text-center mb-4">Histori Snack</h2>
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Kadar Gula</th>
                <th>Lemak</th>
                <th>Kalori</th>
                <th>Evaluasi</th>
                <th>Waktu Dibuat</th>
				<th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
			$no = 1; 
			while ($row = $result->fetch_assoc()) { 
				$customId = 'SNCK' . str_pad($row['id'], 3, '0', STR_PAD_LEFT);
			?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $customId ?></td>
					<td><?= $row['name'] ?></td>
					<td><?= $row['sugar'] ?> g</td>
					<td><?= $row['fat'] ?> g</td>
					<td><?= $row['calories'] ?> kcal</td>
					<td><strong><?= $row['evaluation'] ?></strong></td>
					<td><?= $row['created_at'] ?></td>
					<td class="d-flex gap-5">
						<form method="POST" action="action.php" class="d-inline">
							<input type="hidden" name="action" value="delete">
							<input type="hidden" name="id" value="<?= $row['id'] ?>">
							<button 
								type="submit"
								class="btn btn-danger btn-sm me-2"
								onclick="return confirm('Are you sure you want to delete this item?')">Delete
							</button>
						</form>
						<button 
							class="btn btn-warning btn-sm" 
							onclick="editSnack(<?= $row['id'] ?>, '<?= $row['name'] ?>', <?= $row['sugar'] ?>, <?= $row['fat'] ?>, <?= $row['calories'] ?>)">
							Edit
						</button>
					</td>
				</tr>
			<?php 
				$no++; 
			} 
			?>
        </tbody>
    </table>
</div>

<!-- Modal Edit Snack -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Snack</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" name="id" id="editId">
                    <div class="form-group">
                        <label for="editName">Nama Snack:</label>
                        <input type="text" class="form-control" id="editName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="editSugar">Kadar Gula (gram):</label>
                        <input type="number" step="0.01" class="form-control" id="editSugar" name="sugar" required>
                    </div>
                    <div class="form-group">
                        <label for="editFat">Lemak Total (gram):</label>
                        <input type="number" step="0.01" class="form-control" id="editFat" name="fat" required>
                    </div>
                    <div class="form-group">
                        <label for="editCalories">Kalori (kcal):</label>
                        <input type="number" step="0.01" class="form-control" id="editCalories" name="calories" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>

function editSnack(id, name, sugar, fat, calories) {
    document.getElementById('editId').value = id;
    document.getElementById('editName').value = name;
    document.getElementById('editSugar').value = sugar;
    document.getElementById('editFat').value = fat;
    document.getElementById('editCalories').value = calories;

    // Tampilkan modal
    $('#editModal').modal('show');
}


function confirmDelete(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        window.location.href = `action.php?action=delete&id=${id}`;
    }
}

function deleteSnack(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        fetch('action.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ action: 'delete', id: id })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Hapus elemen baris dari tabel
                document.querySelector(`tr[data-id='${id}']`).remove();
            } else {
                alert("Gagal menghapus data: " + data.message);
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Terjadi kesalahan saat menghapus data.");
        });
    }
}

window.addEventListener("beforeunload", function () {
    localStorage.setItem("scrollPosition", window.scrollY);
});

window.addEventListener("load", function () {
    const scrollPosition = localStorage.getItem("scrollPosition");
    if (scrollPosition) {
        window.scrollTo(0, parseInt(scrollPosition));
        localStorage.removeItem("scrollPosition");
    }
});


</script>

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">This is Check Your Snack</div>
						<div class="section_title"><h2>Users Testimonials</h2></div>
					</div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col">
					<div class="quote d-flex flex-column align-items-center justify-content-center ml-auto mr-auto"><img src="images/quote.png" alt=""></div>

					<!-- Testimonials Slider -->
					<div class="test_slider_container">
						<div class="owl-carousel owl-theme test_slider">
							
							<!-- Slide -->
							<div class="owl-item">
								<div class="test_item text-center">
									<div class="test_text">
										<p>Website ini sangat membantu merekomendasikan camilan sehat dan bergizi.</p>
									</div>
									<div class="test_info d-flex flex-row align-items-center justify-content-center">
										<div class="test_image"><img src="images/test.jpg" alt=""></div>
										<div class="test_text">Lamian Himalayan, <span>Pengguna</span></div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="test_item text-center">
									<div class="test_text">
										<p>Dari website ini saya menjadi tau apakah camilan saya sehat atau tidak.</p>
									</div>
									<div class="test_info d-flex flex-row align-items-center justify-content-center">
										<div class="test_image"><img src="images/test.jpg" alt=""></div>
										<div class="test_text">Pio Kurniawan, <span>Pengguna</span></div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="test_item text-center">
									<div class="test_text">
										<p>Ini merupakan website terobosan baru yang keren.</p>
									</div>
									<div class="test_info d-flex flex-row align-items-center justify-content-center">
										<div class="test_image"><img src="images/test.jpg" alt=""></div>
										<div class="test_text">Al Ghazali, <span>Pengguna</span></div>
									</div>
								</div>
							</div>
						</div>
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
									<li><a href="index.php">Home</a></li>
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about.js"></script>

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