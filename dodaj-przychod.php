<?php
	session_start();
	if(!isset($_SESSION['logged']))
	{
		header ('Location: index.php');
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang = "pl">
<head>

<meta charset = "utf-8" />
<meta http-equiv="X-UA-Compatible" content ="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Oszczędzanko-dodaj-przychod</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/fontello.css" type="text/css" />
<script src="zmiany.js"></script>
<script src="jquery.js"></script>

</head>

<body onLoad="detect(); changelogo(); showDate()" onResize="detect(); changelogo()">
	<header>
		<div class="container-top">
			<nav class="navbar bg-dark fixed-top navbar-expand-lg text-white">
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
				<div class="col-12 col-sm-10 col-md-8 pt-2 pb-3 rounded">
					<span class="text-center text-white d-block pt-3 h3">DODAJ PRZYCHÓD:</span>				
					<form method="post" class="col-11 m-auto pt-4">
						<div class="pb-2 bg-light rounded mb-3 px-3 info-place text-break bg-light">
							<fieldset class="border-mine border-success pb-3 px-2">
								<legend  class="w-auto"><h5>Kwota przychodu</h5></legend>
								<div class="form-group text-center">
									<label for="price-input" class="col-8 col-form-label">Wysokość przychodu:</label>
									<div class ="col-8 m-auto">
										<input class="form-control" id="price-input" type="text" placeholder="Kwota" name="incomeAmount">
									</div>
								</div>
							</fieldset>
						</div>					
						<div class="pb-2 bg-light rounded mb-3 px-3 info-place text-break bg-light">
							<fieldset class="border-mine border-success pb-3 px-2">
								<legend  class="w-auto"><h5>Data</h5></legend>
								<div class="form-group text-center">
									<label for="date-input" class="col-8 col-form-label">Data uzyskania przychodu:</label>
									<div class="col-8 m-auto">
										<input class="form-control" type="date" value="" id="date-input" name="incomeDate">
									</div>
								</div>
							</fieldset>
						</div>
						<div class="pb-2 bg-light rounded mb-3 px-3 info-place text-break bg-light">
							<fieldset class="border-mine border-success pb-3 px-2">
								<legend  class="w-auto"><h5>Tytuł przychodu</h5></legend>
								<div class="text-center px-3">
									<div class = "py-1 mb-1">
										<label>
											<input type="radio" name="Tytuł przychodu"> Wynagrodzenie 
										</label>
									</div>			
									<div class = "py-1 mb-1">
										<label>
											<input type="radio" name="Tytuł przychodu"> Odsetki bankowe
										</label>
									</div>
									<div class = "py-1 mb-1">
										<label>
											<input type="radio" name="Tytuł przychodu"> Sprzedaż na allegro
										</label>
									</div>
									<div class = "py-1 mb-1">
										<label>
											<input type="radio" name="Tytuł przychodu"> Inne
										</label>	
									</div>			
								</div>
							</fieldset>
						</div>
						<div class="buttons-sizing-forms rounded buttons-underline border-success text-center m-auto" onclick="addcomment()">
							<span class="button-size text-break">Dodaj komentarz</span>
						</div>
						<div id="comment"></div>
						<div class="input-group mt-3 mb-3 d-inline-block text-center buttons-pos">
								 <button type="submit" class="btn btn-success btn-lg">Dodaj Przychód</button>
							</div>						
							<div class="input-group mt-3 mb-3 d-inline-block text-center buttons-pos">
								 <button type="reset" class="btn btn-danger btn-lg"> Anuluj Przychód </button>
						</div>
					</form>	
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
				<div class="col-sm-12 text-center text-white my-2">
					Copyright © 2020. Made with love by Arkadiusz Pacewicz. All Rights Reserved.
				</div>
			</div>
		</footer>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>