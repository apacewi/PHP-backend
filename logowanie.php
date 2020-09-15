<?php
session_start();
if(isset($_SESSION['logged']) && ($_SESSION['logged']==true))
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

<title>Oszczędzanko-logowanie</title>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/fontello.css" type="text/css" />
<script src="zmiany.js"></script>
<script src="jquery.js"></script>

</head>

<body onLoad="changelogo()" onResize="changelogo()">
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
				</div>
			</nav>
		</div>
	</header>
		<main class = "container">
		<div class="row justify-content-center">
			<div id="paneltitle" class="col-10 text-center text-color-mine text-white mt-2" >
							<?php
							if(!isset($_SESSION['newUser'])){
								echo "<h2>Zaloguj się na własne darmowe konto!</h2>";
							}
							else{
								echo $_SESSION['newUser'];
								unset($_SESSION['newUser']);
							}
							?>
				
			</div>
		</div>
			<div class="row justify-content-center">
				<section class="col-md-4">					
					<div class="py-3 my-2 bg-light text-black text-center rounded">
						<div class="d-inline-block buttons-sizing rounded border-danger buttons-underline" onclick="changetologin()" >
							<span class="button-size text-break">Zaloguj</span>
						</div>					
						<div class="d-inline-block buttons-sizing rounded buttons-underline border-danger" onclick="changetoregister()">
							<span class="button-size text-break">Zarejestruj</span>
						</div>
					</div>				
					<div id="loginButt">
						<form action="login.php" method="post" class="px-4 py-2 mb-2 bg-light text-black rounded">
							<div class="form-group">						
								<label for="przykladowyEmail" class="text-center"> Adres Email: </label>
							
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<span class="input-group-text button-size" id="basic-addon1">@</span>
									</div>
									<input type="text" id="przykladowyEmail" class="form-control" placeholder="Adres Email " aria-label="Username" aria-describedby="basic-addon1" name="email">
								</div>
							</div>
						  
							<div class="form-group">					  
								<label for="przykladoweHaslo">Hasło:</label>
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon2"><i class="icon-lock"></i></span>
									</div>
									<input type="password" id="przykladoweHaslo" class="form-control" placeholder="Hasło " aria-label="password" aria-describedby="basic-addon1" name="pass">
								</div>
							</div>
							<?php
							if(isset($_SESSION['logError'])){
								echo $_SESSION['logError'];
								unset($_SESSION['logError']);
							}
							?>
							<?php
							if(isset($_SESSION['logout'])){
								echo $_SESSION['logout'];
								unset($_SESSION['logout']);
							}
							?>
							
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="autoSizingCheck2">
								<label class="form-check-label" for="autoSizingCheck2">
								Zapamiętaj mnie
								</label>
							</div>
							<div class = "text-center mt-3">
								<button type="submit" class="btn btn-primary"> Zaloguj się </button>
							</div>
						</form>
					</div>
				</section>
				<section class="col-md-5">
					<div class="bg-light mb-3 p-md-2 my-md-2 rounded text-break">
						<fieldset class="border-mine border-danger text-sizing px-3">
						   <legend  class="w-auto"><h5>Dlaczego warto?</h5></legend>   
							<ul class="mr-3 text-justify">
								<li><h6>Darmowy system oszczędzania:</h6><p>Wystarczy regularnie wprowadzać zawarte transakcje.</p></li>
								
								<li><h6>Mobilność:</h6><p>Możliwość ewidencjonowania budżetu w każdym momencie za pomocą urządzeń mobilnych.</p></li>
								
								<li><h6>Satysfakcja:</h6><p>Nic nie tracisz a możesz jedynie zyskać. Pierwsze efekty zobaczysz już po miesiącu!</p></li>
								
								<li><h6>Pełna kontrola nad budżetem:</h6><p>Widzisz dokładnie stosunek przychodów/wydatków z dowolnego okresu.<p></li>
							</ul>
						</fieldset>
					</div>
				</section>
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