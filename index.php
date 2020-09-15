<?php
	session_start();
	if(isset($_SESSION['logged'])&&($_SESSION['logged']== true))
	{
		header ('Location: menu-glowne.php');
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang = "pl">
<head>

<meta charset = "utf-8" />
<meta http-equiv="X-UA-Compatible" content ="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Jak skutecznie oszczędzać?</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/fontello.css" type="text/css" />
<script src="zmiany.js"></script>
<script src="jquery.js"></script>

</head>

<body onload="changeslide(); changelogo()" onResize="changelogo()">
	<header>
		<div class="container-top">
			<nav class="navbar bg-dark fixed-top navbar-expand-md text-white">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand text-white text-center" href="index.php">
							<h4 id="maintitle">
								<span>
									<i class="icon-wallet"></i>
								</span>Oszczędzanko.pl
							</h4>
						</a>
					</div>
					<div> 
						<div class="d-inline-block border-right pr-2">
							<a class="text-white" href="logowanie.php">
								<div class="btn btn-dark">				
									<h6>Rejestracja
										<span class="">
											<i class="icon-money-1"></i>
										</span>
									</h6> 
								</div>
							</a>						
						</div>
						<div class="d-inline-block px-1"> 
							<a href="logowanie.php">
								<div class="btn btn-dark">	
									<h6>Zaloguj się 
										<span class="">
											<i class="icon-user"></i>
										</span>
									</h6> 
								</div>
							</a>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
		<main class = "container">			
			<div class="row justify-content-center">
				<div class="col-sm-8">
					<div class="p-3 mb-2 bg-light text-black rounded">
						<div class="wysrodkuj">
							<div id ="slider" class="text-center text-break"></div>
						</div>
					</div>
					<article class="p-3 mb-2 bg-light text-black rounded text-break">
						<header>
							<h3>Czym jest aplikacja budżetowa?</h3>
						</header>
						<p class="text-justify">Aplikacja budżetowa umieszczona na niniejszej witrynie ma za zadanie w pełni pomóc Ci zapanować nad własnymi wydatkami a co za tym idzie szybciej i skuteczniej spełniać marzenia! Serwis jest w szczególności przeznaczony osobom pragnącym raz na zawsze uporać się z efektem znikających pieniędzy z portfela. Powodzenia przyszły milionerze!</p>
					</article>				
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