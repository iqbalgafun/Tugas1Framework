<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>About</title>

		<!-- Bootstrap CSS -->
		<link href= "<?php echo base_url('')?>assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<body background="<?php echo base_url()?>Gambar/Dot.png">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Iqbal Fauzi P</a>
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo site_url()?>/home">Home</a></li>
								<li class="active"><a href="<?php echo site_url()?>/about">About</a></li>
								<li><a href="<?php echo site_url()?>/contact">Contact</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					</nav>
					<ul class="list-group">
					  <li class="list-group-item list-group-item-success">Nama: <?php echo $nama ?></li>
					  <li class="list-group-item list-group-item-info">NIM: <?php echo $nim ?></li>
					  <li class="list-group-item list-group-item-warning">Jurusan: <?php echo $Jurusan ?></li>
					  <li class="list-group-item list-group-item-danger">No HP: <?php echo $no_hp ?></li>
					</ul>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					</nav>
					<ul class="list-group">
					  <li class="list-group-item list-group-item-success">TTL: <?php echo $TTL ?></li>
					  <li class="list-group-item list-group-item-info">Alamat: <?php echo $alamat ?></li>
					  <li class="list-group-item list-group-item-warning">Email: <?php echo $Email ?></li>
					</ul>
			</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('')?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
	<tr>
			<td colspan=3 height=10% bgcolor=black >
					<hr align=center color=white size=3 width=90%>
					<font size=2 color=black face="century gothic" ><center> 
						Copyright &copy 2017<b>&nbsp Framework</b></a><br>
						D4 Teknik Informatika | Jurusan Teknologi Informasi<br><b>POLITEKNIK NEGERI MALANG</b></a>
						<br><br>
					</center></font>
				</td>
		<tr>
</html>