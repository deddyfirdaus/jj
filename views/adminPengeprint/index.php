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
				<img src="./assets/img/printkuy.png">
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
					<a class="navbar-brand" href="#"><img src="./assets/img/printkuy.png" style="width: 6vw; height: 100%;"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=homePengeprint'?>">Print</a></li>
						<li><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=statusPengeprint'?>">Status</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?></a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Setting</a>
							<ul class="dropdown-menu">
								<li><a href="#" onclick="setData(<?php echo $_SESSION['id_users']; ?>)" data-toggle="modal" data-target="#modalSetting">Edit User</a></li>
								<li><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=logout'?>">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>

			<!-- MODAL -->
			<div class="modal fade" id="modalSetting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Edit Users</h4>
						</div>
						<form method="POST" action="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=editPengeprint'?>">
							<div class="modal-body">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" id="username" name="username">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password">
								</div>
								<button type="submit" class="btn btn-default">Simpan</button>
								<input type="text" name="id_user" id="id">
							</div>
						</form>
					</div>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<br>
				<div class="col-lg-4"></div>
				<div class="text-center col-lg-4">
					<h4>Print</h4>
					<form method="POST" enctype="multipart/form-data" action="<?php echo $this->config['route']->getAlamatRoot().'?c=c_print&f=tambah'?>">
							<div class="form-group">
								<label for="file">Pilih File</label>
								<input name="file" type="file" class="form-control" id="file">
							</div>
							<div class="form-group">
								<label for="tempat-print">Tempat Print</label>
								<select class="form-control" id="tempat-print" name="tempat_print">
									<?php
									require './models/m_tempat.php';
									$model = new m_tempat();
									$tempat = $model->showAll();
									foreach ($tempat as $tempat) {
										echo "
										<option>$tempat[nama]</option>
										";
									}?>
								</select>
							</div>

							<div class="row">
								<div class="col-lg-4">
									<input type="radio" name="rating" value="1"/><label for="green"><span></span> Diambil</label><br />
								</div>
								<div class="col-lg-8">
									<input type="radio" name="rating" value="0"/><label for="red"><span></span> Diantar</label>
									<textarea style="width: 95%; resize: none;" rows="6" name="alamat" disabled="true" placeholder="masukkan alamat anda..."></textarea>
								</div>
							</div>
							<br>
							<label for="opsi">Opsi</label>
							<div class="row">
							<div class="col-lg-4">
								<input type="radio" name="opsional" value="1"><label for="green"><span></span> Berwarna</label>
							</div>
							<div class="col-lg-8">
								<input type="radio" name="opsional" value="0"><label for="green"><span></span> Hitam Putih</label>
							</div>
						</div>
						<br>
						<label for="opsijilid">Jilid</label>
						<div class="row">
						<div class="col-lg-4">
							<input type="radio" name="opsionaljilid" value="1"><label for="green"><span></span> Jilid</label>
						</div>
						<div class="col-lg-8">
							<input type="radio" name="opsionaljilid" value="0"><label for="green"><span></span> Staples</label>
						</div>
					</div>
						<br>
						<div class="form-group">
							<label for="OpsiKertas">Opsi Kertas</label>
							<select class="form-control" id="kertas-print" name="kertas_print">
								<?php
								require './models/m_kertas.php';
								$model = new m_kertas();
								$kertas = $model->showAll();
								foreach ($kertas as $kertas) {
									echo "
									<option>$kertas[kertas]</option>
									";
								}?>
							</select>
						</div>
							<br>
							<button type="submit" class="btn btn-default form-control">Simpan</button>
						</form>
					</div>
					<div class="col-lg-4"></div>
				</div>
		</div>
		<br>
		<br>
		<br>
	</body>
	<script>
		$('input[name="rating"]'&&'input[value=1]').on('change', function() {
			$('textarea[name="alamat"]').attr('disabled', true).focus();
		});
		$('input[name="rating"]'&&'input[value=0]').on('change', function() {
			$('textarea[name="alamat"]').attr('disabled', false).focus();
		});

		function setData(id) {
			var id_user = id;
			// alert(id);
			<?php
			$model = new m_user();
			$users = $model->showAll();
			foreach ($users as $users) {
				echo "if (id_user==$users[id_users])
				{\$(\"#username\").val(\"$users[username]\");
				\$(\"#password\").val(\"$users[password]\");
				\$(\"#id\").val(\"$users[id_users]\");}";
			}
			?>
		}
	</script>
	</html>
