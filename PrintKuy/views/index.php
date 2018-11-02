<!DOCTYPE html>
<html>
<head>
	<title>PrintKuy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="jumbotron" style="background-color: white;">
			<div class="container text-center">
				<img src="assets/img/printkuy.png">
			</div>
		</div>

		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="#"><img src="assets/img/printkuy.png" style="width: 6vw; height: 100%;"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=loginPage'?>"><span class="glyphicon glyphicon-user"></span> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- CARROUSEL -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" style="width: 100%; height: 500px;">
				<div class="item active">
					<img src="assets/img/cara-ngeprint-di-laptop.png" style="width: 100%;">
				</div>

				<div class="item">
					<img src="assets/img/printer-cnetcom.jpg" style="width: 100%;">
				</div>

				<div class="item">
					<img src="assets/img/Trik Jitu Agar Printer Canon Tidak Bersuara- Berisik Pada Saat Mencetak.jpg" style="width: 100%;">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!-- CARD IMAGE -->
		<div class="row">
			<br>
			<br>
			<br>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="assets/img/g1.jpg" target="_blank">
						<img src="assets/img/g1.jpg" style="width:100%; height: 200px;">
					</a>
					<div class="caption text-center">
						<h4>Makmur Jaya</h4>
						<p>Jl. Jawa 2</p>
						<button class="btn btn-info">Detail</button>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="assets/img/g2.jpg" target="_blank">
						<img src="assets/img/g2.jpg" style="width:100%; height: 200px;">
					</a>
					<div class="caption text-center">
						<h4 class="card-title">Bebas Ngeprint</h4>
						<p class="card-text">Jl. Kalimantan X</p>
						<button class="btn btn-info">Detail</button>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="assets/img/g3.jpg" target="_blank">
						<img src="assets/img/g3.jpg" style="width:100%; height: 200px;">
					</a>
					<div class="caption text-center">
						<h4 class="card-title">Print Oke</h4>
						<p class="card-text">Jl. Jawa 6</p>
						<button class="btn btn-info">Detail</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="assets/img/g4.jpg" target="_blank">
					<img src="assets/img/g4.jpg" style="width:100%; height: 200px;">
				</a>
				<div class="caption text-center">
					<h4 class="card-title">Hikmah Print</h4>
					<p class="card-text">Jl. Sumatera </p>
					<button class="btn btn-info">Detail</button>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="assets/img/g5.jpg" target="_blank">
					<img src="assets/img/g5.jpg" style="width:100%; height: 200px;">
				</a>
				<div class="caption text-center">
					<h4 class="card-title">CV. Subur Utama</h4>
					<p class="card-text">Jl. Mastrip</p>
					<button class="btn btn-info">Detail</button>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="assets/img/g6.jpg" target="_blank">
					<img src="assets/img/g6.jpg" style="width:100%; height: 200px;">
				</a>
				<div class="caption text-center">
					<h4 class="card-title">Wahna</h4>
					<p class="card-text">Jl.Riau</p>
					<button class="btn btn-info">Detail</button>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>