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
<title>Oszczędzanko-przegladaj-bilans</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/fontello.css" type="text/css" />
<script src="zmiany.js"></script>
<script src="jquery.js"></script>

<script src="core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

</head>

<body onLoad="detect(); changelogo()" onResize="detect(); changelogo()">
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
				<div class="col-md-10 pt-2 pb-3 rounded bg-light text-center">
					<h4 class="py-3">Oto bilans Twojego budżetu, możesz sprawdzić stan z dowolnego okresu.</h4> 
					<button type="button" class="btn btn-primary py-3 px-2" data-toggle="modal" data-target="#exampleModal">
					  Wybierz okres sprawdzania bilansu.
					</button>				
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Wybierz przedział czasowy:</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							<div class="col-5 m-auto d-inline-block px-0">
								Od:
								<input class="form-control" type="date" value="" id="date-input1">
							</div>
							<div class="col-5 m-auto d-inline-block px-0">
								Do:
								<input class="form-control" type="date" value="" id="date-input2">
							</div>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
							<button type="button" class="btn btn-primary">Wybierz</button>
						  </div>
						</div>
					  </div>
					</div>
				</div>
			</div>	
			<div class="row justify-content-center mt-2">
				<div class="col-md-5 mt-2">
					<div class="bg-light rounded text-center py-3">
						<div class="border-bottom mx-3">
						<h5>Przychody:</h5>
						</div>
						<div class="my-3 mx-1 rounded">
							<table class="text-center m-auto text-break">
							<tr>
								<td>ID</td>		<td>Data</td>	<td>Kwota</td> <td colspan="2">Działanie</td>
							</tr>
							<tr>
								<td>12341442</td>	<td >2020-03-28</td> <td>265</td> <td><i class="icon-edit" title="Edytuj"></i></td> <td><i class="icon-trash" title="Usuń"></i></td>
							</tr>
							<tr>
									<td>665452424</td>	<td>2020-03-26</td> <td>589</td> <td><i class="icon-edit" title="Edytuj"></i></td> <td><i class="icon-trash" title="Usuń"></i></td>
							</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-5 mt-2">
					<div class="bg-light rounded text-center py-3">
						<div class="border-bottom mx-3">
							<h5>Wydatki:</h5>
							</div>
							<div class="my-3 mx-1 rounded">
								<table class="text-center m-auto text-break">
							<tr>
								<td>ID</td>		<td>Data</td>	<td>Kwota</td> <td colspan="2">Działanie</td>
							</tr>
							<tr>
								<td>12341442</td>	<td >2020-03-28</td> <td>265</td> <td><i class="icon-edit" title="Edytuj"></i></td> <td><i class="icon-trash" title="Usuń"></i></td>
							</tr>
							<tr>
								<td>665452424</td>	<td>2020-03-26</td> <td>589</td> <td><i class="icon-edit" title="Edytuj"></i></td> <td><i class="icon-trash" title="Usuń"></i></td>
							</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center mt-2">
				<div class="col-md-8">
					<div class="bg-light rounded text-center py-2">
						<h5>Rezultat bilansu:</h5>
						<div id="wynikBilansu" class="my-3 mx-1 rounded">
							<h3>Gratulacje! Świetnie zarządzasz wydatkami.</h3>
						</div>
					</div>	
				</div>
			</div>
			<div class="row justify-content-center mt-2">
				<div class="col-sm-12 col-md-10">
					<div class="bg-light rounded text-center py-4">
						<h5 class="pb-3">Wykres kołowy:</h5>
						<div id="chartdiv" class="">
							<script>
								am4core.ready(function() {
								am4core.useTheme(am4themes_material);
								am4core.useTheme(am4themes_animated);
								var chart = am4core.create("chartdiv", am4charts.PieChart3D);
								chart.hiddenState.properties.opacity = 0;
								chart.legend = new am4charts.Legend();
								chart.data = [
								  {
									kategoria: "Jedzenie",
									koszt: 501.9
								  },
								  {
									kategoria: "Mieszkanie",
									koszt: 301.9
								  },  
								  {
									kategoria: "Transport",
									koszt: 201.1
								  },
								  {
									kategoria: "Telekomunikacja",
									koszt: 165.8
								  },
								  {
									kategoria: "Opieka zdrowotna",
									koszt: 139.9
								  },
								  {
									kategoria: "Ubranie",
									koszt: 128.3
								  },
								  {
									kategoria: "Higiena",
									koszt: 99
								  },
								  {
									kategoria: "Dzieci",
									koszt: 60
								  },
								  {
									kategoria: "Rozrywka",
									koszt: 23
								  },
								  {
									kategoria: "Wycieczka",
									koszt: 11
								  },
								  {
									kategoria: "Szkolenia",
									koszt: 36
								  },
								  {
									kategoria: "Oszczędności",
									koszt: 2
								  },
								  {
									kategoria: "Na złotą jesień, czyli emeryturę",
									koszt: 46
								  },
								  {
									kategoria: "Spłata długów",
									koszt: 21
								  },
								  {
									kategoria: "Darowizna",
									koszt: 21
								  },
								  {
									kategoria: "Inne wydatki",
									koszt: 26
								  }
								];
								var series = chart.series.push(new am4charts.PieSeries3D());
								series.dataFields.value = "koszt";
								series.dataFields.category = "kategoria";
								series.ticks.template.disabled = true;
								series.labels.template.disabled = true;
								series.slices.template.tooltipPosition = "pointer";
								chart.legend.position = "top";
								});
							</script>
						</div>
					</div>
				</div>
			</div>	
		</main>
	<section class ="container-fluid">
	<div class="sticky-footer-container"></div>
		<footer id = "footer" class="myfooter">
			<div class="row bg-dark">
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