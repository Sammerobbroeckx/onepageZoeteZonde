<!DOCTYPE html>
<html lang="en">

<?php
	include("php/linkdb.php");
	include("php/SqlFuncties.php");
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>De Zoete Zonde</title>

	<link href="css/reset.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
	<!--Leaflet-->
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
	<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><p class="navbartext">Home</p></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#menu"><p class="navbartext">Menu</p></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><p class="navbartext">Contact</p></a>
                    </li>
					<li>
						<a href="#login" data-toggle="modal"><p class="navbartext">Login</p></a>
					</li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" id="fotogallerij">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/foto1.jpg" alt="Foto" width="100vh" height="100vh">
							</div>

							<div class="item">
								<img src="img/foto2.jpg" alt="Foto" width="100vh" height="100vh">
							</div>

							<div class="item">
								<img src="img/foto3.jpg" alt="Foto" width="100vh" height="100vh">
							</div>

							<div class="item">
								<img src="img/foto4.jpg" alt="Foto" width="100vh" height="100vh">
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="menu-section">
        <div class="container">
            <div class="row">
				<h1 class="menu">MENU</h1>
				
                <div class="col-md-3">
					<ul>
						<li class="btnMenu menuActive" id="btnOntbijt">ontbijten</li>
						<li class="btnMenu" id="btnBrood">broodjes en omeletten</li>
						<li class="btnMenu" id="btnHap">de kleine hap</li>
						<li class="btnMenu" id="btnMakelij">Belgische makelij</li>
						<li class="btnMenu" id="btnSoep">soepen</li>
						<li class="btnMenu" id="btnSalade">salades en pasta's</li>
						<li class="btnMenu" id="btnDessert">desserten</li>
					</ul>
				</div>
				
				<div class="col-md-7">
                    <div class="divMenu" id="divOntbijt">
						<?php
							echo maakTabel(GetOntbijt());
						?>
					</div>
                    <div class="divMenu" id="divBrood">
						<?php
							echo maakTabel(GetBroodjes());
						?>
					</div>
                    <div class="divMenu" id="divHap">
						<?php
							echo maakTabel(GetKleineHapjes());
						?>
					</div>
                    <div class="divMenu" id="divMakelij">
						<?php
							echo maakTabel(GetMakelij());
						?>
					</div>
                    <div class="divMenu" id="divSoep">
						<?php
							echo maakTabel(GetSoepen());
						?>
					</div>
                    <div class="divMenu" id="divSalade">
						<?php
							echo maakTabel(GetSaladesEnPastas());
						?>
					</div>
                    <div class="divMenu" id="divDessert">
						<?php
							echo maakTabel(GetDessert());
						?>
					</div>
				</div>
				<div class="col-md-2"></div>
            </div>
        </div>
    </section>
	
	<!-- Contact Section -->
	<div id="mapid">
		<section id="contact" class="contact-section">		
			<div class="container">
				<div id="aboveLeaflet" class="row">
					<div class="col-lg-4"></div>
					<div class="col-lg-4">
						<h1>Contact Section</h1>
						
						<form action="php/mail.php" method="POST">
							<input class="form-control" type="text" name="naam" placeholder="Naam" required></input>
							<input class="form-control" type="text" name="email" placeholder="E-mail adres" required></input>
							<textArea class="form-control" type="text" name="message" placeholder="je bericht" required></textArea>
							<input type="submit" class="btn btn-info" value="Verstuur!"/>
						</form>
					</div>
					<div class="col-lg-4"></div>
				</div>
			</div>
		</section>
	</div>
	
		<!--admin login form-->
		<div class="modal fade" id="login" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3>Admin Login</h3>
					</div>
					<div class="modal-body">
						<form action="?pagina=login" method="POST">
							<input class="form-control" type="text" name="mail" placeholder="E-mail adres" required></input>
							<input class="form-control" type="password" name="paswoord" placeholder="je paswoord" required></input>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success">Login!</button>
						<button class="btn btn-danger" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
	
	<script src="js/menu.js"></script>
	
	<script>
		//init leaflet
		var mymap = L.map('mapid').setView([51.09200, 4.366033], 15);

		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
			maxZoom: 18,
			id: 'sammerobbroeckx.pih4612k',
			accessToken: 'pk.eyJ1Ijoic2FtbWVyb2Jicm9lY2t4IiwiYSI6ImNpbWhudHg4MDAwMHF2d2x5dTYwMmprdWoifQ.8K-5_OLy7DS3kehI6SmXHw'
		}).addTo(mymap);
		
		var marker = L.marker([51.086486, 4.366033]).addTo(mymap);
		
		marker.bindPopup("<b>De Zoete Zonde</b><br>Antwerpsestraat 5<br> 2850 Boom").openPopup();
	</script>
</body>

</html>
