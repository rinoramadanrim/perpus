<!DOCTYPE html>
<html lang="en">
	<head> 
		<meta charset="UTF-8">
		<title> Website Responsive</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
	</head> 
	<body>
		<div class="container">
			<div class="header"> 
				<h1 align="center"> Selamat Datang DI Pepustakaan XYZ</h1>
			</div>
			<div class="main">
				<div class="left">
					<h3 align="center">Menu</h3>
					<ul>
						<li><a href="index.php?page=home">Home</a></li>
						<li><a href="index.php?page=tutorial">Tutorial</a></li>
						<li><a href="index.php?page=tentang">Tentang</a></li>
					</ul>
				</div>
				
				<?php 
				
				if(isset($_GET['page'])){
					$page = $_GET['page'];

					switch ($page) {
						case 'home':
							include "home.php";
							break;
						case 'tutorial':
							include "tutorial.php";
							break;
						case 'tentang':
							include "tentang.php";
							break;
						default:
							echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
							break;
					}
				}else{
					include 'home.php';
				}
				
				?>

				<div class="right">
					<h3 align="center">Buku Terpopuler</h3>
					<p>
						<ul>
							<li><a href="#">Web Design</a></li>
							<li><a href="#">Pemrograman</a></li>
							<li><a href="#">Database</a></li>
						</ul>
					</p>
				</div> 
			</div>

			<div class="footer">
				<p align="center">Coppright &copy; 2018 Belajar CSS Responsive </a></p>
			</div> 
		</div> 
	</body>
</html>