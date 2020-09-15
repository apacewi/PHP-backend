<?php
	session_start();
	// jesli zmienna jest ustawiona i ma wartosc false to do index.php
	if(isset($_SESSION['logged'])&&($_SESSION['logged']==false))
	{
		header ('Location: logowanie.php');
		exit();
	}
	// jesli zmienna NIE jest ustawiona do index.php
	else if(!isset($_SESSION['logged']))
		{
		header ('Location: logowanie.php');
		exit();
		}
	// jesli zmienna jest ustawiona i ma wartosc true to pozwol wejsc dalej <- to else
	
?>
<!DOCTYPE HTML>
<html lang = "pl">
<head>

<meta charset = "utf-8" />
<meta http-equiv="X-UA-Compatible" content ="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Oszczędzanko-menu-glowne</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/fontello.css" type="text/css" />
<script src="zmiany.js"></script>
<script src="jquery.js"></script>

</head>

<body onLoad="detect(); changelogo(); changemenucontent()" onResize="detect(); changelogo(); changemenucontent()">
	<header>
		<div class="container-top">
			<nav class="navbar bg-dark fixed-top navbar-expand-lg text-white">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand text-white text-center" href="index.php">
							<h4 id="maintitle">
								<span>
									<i class="icon-wallet"></i>
									Oszczędzanko.pl
								</span>
							</h4>
						</a>
					</div>
					<div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false">
							<i class="icon-menu text-white collapse-menu rounded"></i>
						</button>
					</div>	
					<div id="mainmenu" class="collapse navbar-collapse">					
					</div>
				</div>
			</nav>
		</div>
	</header>
		<main class="container">
			<div class="row justify-content-center">
				<div class="col-10 bg-light text-center pt-3 pb-2 rounded text-break">
					<h4>Witaj <?php echo $_SESSION['username'] ?> w innowacyjnym systemie oszczędzania.</h4>
					<h6 class="pb-3">Poniżej została przedstawiona oś z Twoimi działaniami oraz ich efektami. Pozwoli to na lepsze zrozumienie działania aplikacji.</h6>
				</div>
			</div>	
			<div id="main-menu-content" class="row justify-content-center"></div>
			<div class="row justify-content-center">
				<div class="col-8 bg-light text-center mt-3 pt-3 pb-2 rounded text-break">				
					<p><span class="mynumber">7</span>W Twoje ręce została oddana także władza nad konfiguracją konta, edycją lub usuwaniem transakcji. Jednym słowem masz pełną kontrolę nad swoim budżetem. Powodzenia i miłego korzystania!</p>
				</div>
			</div>			
		</main>
	<section>
	<div class="sticky-footer-container"></div>
		<footer id = "footer" class="myfooter container-fluid bg-dark">
			<div class="row">
				<div class="col-6 text-right socialmedia mt-3">
					<a href="#"><i class="icon-facebook bg-primary text-white"></i></a>
					<a href="#"><i class="icon-twitter bg-white text-primary"></i></a>
				</div>	
				<div class="col-6 text-left socialmedia mt-3">
					<a href="#"><i class="icon-gplus bg-danger text-white"></i></a>
					<a href="#"><i class="icon-linkedin bg-white text-primary"></i></a>
				</div>
			</div>
			<div class="row bg-dark">
				<div class="col-12 text-center text-white my-2">
					Copyright © 2020. Made with love by Arkadiusz Pacewicz. All Rights Reserved.
				</div>
			</div>
		</footer>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>