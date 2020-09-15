var number = Math.floor(Math.random()*4)+1;
var description='<div class="mess">Efektywnie zarządzaj własnym budżetem!</div>';

function changeposition()
{
	
	if (number == 1)
		 description='<div class="mess2">Efektywnie zarządzaj własnym budżetem!</div>';
	if (number == 2)
		 description='<div class="mess3">Zadbaj o stabilny przyrost gotówki!</div>';
	if (number == 3)
		description='<div class="mess">Zrób użytek z każdego grosza, zamień go w prawdziwy majątek!</div>';
	if (number == 4)
		description='<div class="mess4">Regularność przerodzi się w sukces!</div>';
}
function hideslide()
{
	$("#slider").fadeOut(300);
}

function changeslide()
{
	number++; 
	if (number > 4) number=1;
	
	var plik = "<img src=\"img/img"+number+".png\" width = 70% height = 350px />";
	
	changeposition();
	document.getElementById("slider").innerHTML = plik+description;
	
	$("#slider").fadeIn(300);
	
	setTimeout("changeslide()", 6000);
	
	setTimeout("hideslide()",5700);
}

var points;// = [40, 100, 1, 5, 25, 10];
//document.getElementById("demo").innerHTML = points;

function changetoregister() 
{
	var register = '<form class="p-2 my-2 bg-light text-black rounded" action="register.php" method="post"><div class="form-group"><label for="przykladowyEmail" class="text-center"> Imię: </label><div class="input-group mb-2"><div class="input-group-prepend"><span class="input-group-text button-size" id="basic-addon1"><i class="icon-user"></i></span></div><input type="text" class="form-control" placeholder="Imię " aria-label="Username" aria-describedby="basic-addon1" name="nickname"></div><label for="przykladowyEmail" class="text-center"> Nazwisko: </label><div class="input-group mb-2"><div class="input-group-prepend"><span class="input-group-text button-size" id="basic-addon1"><i class="icon-user"></i></span></div><input type="text" class="form-control" placeholder="Nazwisko " aria-label="Username" aria-describedby="basic-addon1" name="surname"></div><label for="przykladowyEmail" class="text-center"> Adres Email: </label><div class="input-group mb-1"><div class="input-group-prepend"><span class="input-group-text button-size" id="basic-addon1">@</span></div><input type="text" class="form-control" placeholder="Adres Email " aria-label="Username" aria-describedby="basic-addon1" name="email"></div><small id="podpowiedzEmail" class="form-text text-muted">W powyższym polu wpisujesz swój adres email.</small></div><div class="form-group"><label for="przykladoweHaslo">Hasło:</label><div class="input-group mb-1"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="icon-lock"></i></span></div><input type="password" class="form-control" placeholder="Hasło" aria-label="password" aria-describedby="basic-addon1" name="password1"></div></div><div class="form-group"><label for="przykladoweHaslo">Powtórz Hasło:</label><div class="input-group mb-1"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="icon-lock"></i></span></div><input type="password" class="form-control" placeholder="Hasło " aria-label="password" aria-describedby="basic-addon1" name="password2"></div></div><div class = "text-center mt-2"><button type="submit" class="btn btn-primary"> Zarejestruj się </button></div></form>';
	
	var newtitle = '<h2>Od skutecznego oszczędzania dzieli Cię już tylko 1 krok.</h2>';
	
	document.getElementById("loginButt").innerHTML = register;
	document.getElementById("paneltitle").innerHTML = newtitle;
}
function changetologin()
{
	var login = '<form action="login.php" method="post" class="p-4 my-3 bg-light text-black rounded"><div class="form-group"><label for="przykladowyEmail" class="text-center"> Adres Email: </label><div class="input-group mb-1"><div class="input-group-prepend"><span class="input-group-text button-size" id="basic-addon1">@</span></div><input type="text" class="form-control" placeholder="Adres Email " aria-label="Username" aria-describedby="basic-addon1" name="email"></div></div><div class="form-group"><label for="przykladoweHaslo">Hasło:</label><div class="input-group mb-1"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="icon-lock"></i></span></div><input type="password" class="form-control" placeholder="Hasło " aria-label="password" aria-describedby="basic-addon1" name="pass"></div></div><div class="form-check"><input class="form-check-input" type="checkbox" id="autoSizingCheck2"><label class="form-check-label" for="autoSizingCheck2">Zapamiętaj mnie</label></div><div class = "text-center mt-3"><button type="submit" class="btn btn-primary"> Zaloguj się </button></div></form>';
	
	var newtitle = '<h2>Zaloguj się na własne darmowe konto!</h2>';
	
	document.getElementById("loginButt").innerHTML = login;
	document.getElementById("paneltitle").innerHTML = newtitle;
}
function detect() {
	
	
	
	var navinside = '<div><ul class="nopoints text-center my-auto pl-0"><li class="nav-item collapse-menu rounded"><a class="nav-link text-white" href="menu-glowne.html"><span class="mainmenu"><i class="icon-home"></i> Strona główna<span></a></li><li class="nav-item collapse-menu text-center rounded dropdown"><a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"onclick="incomesmenu()"><span class="mainmenu"><i class="icon-money-1"></i> Przychody</span></a><div id="incomes" class="bg-light rounded" aria-labelledby="navbarDropdown"></div></li><li class="nav-item collapse-menu rounded dropdown"><a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="expansesmenu()"><span class="mainmenu"><i class="icon-grocery-store"></i> Wydatki</span></a><div id="expanses" class="bg-light rounded" aria-labelledby="navbarDropdown"></div></li><li class="nav-item collapse-menu rounded"><a class="nav-link text-white" href="bilans-budzetu.html"><span class="mainmenu"><i class="icon-chart-bar"></i> Przeglądaj bilans</span></a></li><li class="nav-item collapse-menu"><a class="nav-link text-white rounded" href="#"><span class="mainmenu"><i class="icon-cog-alt"></i> Ustawienia</span></a></li><li class="nav-item collapse-menu rounded"><a class="nav-link text-white" href="logout.php"><span class="mainmenu"><i class="icon-logout"></i> Wyloguj się</span></a></li></ul></div>'
	
	var bigullist = '<div><ul class="d-inline-block nopoints my-auto pl-0"><li class="nav-item collapse-menu rounded d-inline-block"><a class="nav-link text-white" href="menu-glowne.php"><span class="mainmenu"><i class="icon-home"></i>Strona główna<span></a></li><li class="nav-item collapse-menu rounded dropdown d-inline-block"><a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mainmenu"><i class="icon-money-1"></i>Przychody</span></a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item rounded" href="Dodaj-przychod.php"><i class="icon-doc-add"></i> Dodaj przychód</a><a class="dropdown-item rounded" href="#"><i class="icon-edit"></i> Edytuj przychód</a><a class="dropdown-item rounded" href="#"><i class="icon-trash"></i> Usuń przychód</a></div></li><li class="nav-item collapse-menu rounded dropdown d-inline-block"><a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mainmenu"><i class="icon-grocery-store"></i>Wydatki</span></a><div class="dropdown-menu " aria-labelledby="navbarDropdown"><a class="dropdown-item rounded" href="dodaj-wydatek.php"><i class="icon-doc-add"></i> Dodaj wydatek</a><a class="dropdown-item rounded" href="#"><i class="icon-edit"></i> Edytuj wydatek</a><a class="dropdown-item rounded" href="#"><i class="icon-trash"></i> Usuń wydatek</a></div></li><li class="nav-item collapse-menu rounded d-inline-block"><a class="nav-link text-white" href="bilans-budzetu.php"><span class="mainmenu"><i class="icon-chart-bar"></i>Przeglądaj bilans</span></a></li><li class="nav-item collapse-menu rounded d-inline-block"><a class="nav-link text-white" href="2XL"><span class="mainmenu"><i class="icon-cog-alt"></i>Ustawienia</span></a></li></ul></div><div class="toright"><ul class="toright d-inline-block nopoints my-auto pl-0"><li class="nav-item collapse-menu rounded d-inline-block"><a class="nav-link text-white" href="logout.php"><span class="mainmenu"><i class="icon-logout"></i>Wyloguj się<span></a></li></ul></div>';
	
	var tabletoption = '<div><ul class="d-inline-block nopoints my-auto pl-0"><li class="nav-item collapse-menu rounded d-inline-block"><a class="nav-link text-white" href="menu-glowne.html"><span class="mainmenu"><i class="icon-home"></i> Strona główna<span></a></li><li class="nav-item collapse-menu rounded dropdown d-inline-block"><a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mainmenu"><i class="icon-money-1"></i> Przychody</span></a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="Dodaj-przychod.html"><i class="icon-doc-add"></i> Dodaj przychód</a><a class="dropdown-item" href="#"><i class="icon-edit"></i> Edytuj przychód</a><a class="dropdown-item" href="#"><i class="icon-trash"></i> Usuń przychód</a></div></li><li class="nav-item collapse-menu rounded dropdown d-inline-block"><a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mainmenu"><i class="icon-grocery-store"></i> Wydatki</span></a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="dodaj-wydatek.html"><i class="icon-doc-add"></i> Dodaj wydatek</a><a class="dropdown-item" href="#"><i class="icon-edit"></i> Edytuj wydatek</a><a class="dropdown-item" href="#"><i class="icon-trash"></i> Usuń wydatek</a></div></li><li class="nav-item collapse-menu rounded d-inline-block"><a class="nav-link text-white" href="bilans-budzetu.html"><span class="mainmenu"><i class="icon-chart-bar"></i> Przeglądaj bilans</span></a></li><li class="nav-item collapse-menu rounded d-inline-block"><a class="nav-link text-white" href="safsdf"><span class="mainmenu"><i class="icon-cog-alt"></i> Ustawienia</span></a></li><li class="nav-item collapse-menu rounded d-inline-block"><a class="nav-link text-white" href="logout.php"><span class="mainmenu"><i class="icon-logout"></i> Wyloguj się<span></a></li></ul></div>';
	
   if(window.innerWidth <= 735) {		
      document.getElementById("mainmenu").innerHTML=navinside;
   }
   else{
	   if(window.innerWidth <= 993 && window.innerWidth > 735){		   
	  document.getElementById("mainmenu").innerHTML=tabletoption;
	   }
	   else{
	  document.getElementById("mainmenu").innerHTML=bigullist;
	   }
   }
}
function changelogo(){
	 if(window.innerWidth < 340) {		
      document.getElementById("maintitle").innerHTML='<span><i class="icon-wallet"></i></span>';
	}
	else{
		document.getElementById("maintitle").innerHTML='<span><i class="icon-wallet"></i></span>Oszczędzanko.pl'
   }
}
var commenthide=true;
function addcomment(){
		if(commenthide==true){
	document.getElementById("comment").innerHTML='<div class="pb-2 bg-light rounded mt-3 px-3 info-place text-break bg-light"><fieldset class="border-mine border-info pb-3 px-2"><legend  class="w-auto"><h5>Komentarz</h5></legend><div class="form-group"><label>Twój komentarz:</label><textarea class="form-control small-text" id="exampleFormControlTextarea1" rows="3" name="incomeComment"></textarea></div></fieldset></div>';
	commenthide = false;
	}
	else if (commenthide==false){
	document.getElementById("comment").innerHTML='';
	commenthide = true;	
	}
}

var isincomesclicked=true;
function incomesmenu(){
		if(isincomesclicked==true){
	document.getElementById("incomes").innerHTML='<a class="dropdown-item" href="Dodaj-przychod.html"><i class="icon-doc-add"></i> Dodaj przychód</a><a class="dropdown-item" href="#"><i class="icon-edit"></i> Edytuj przychód</a><a class="dropdown-item" href="#"><i class="icon-trash"></i> Usuń przychód</a>';
	isincomesclicked = false;
	}
	else if (isincomesclicked==false){
	document.getElementById("incomes").innerHTML='';
	isincomesclicked = true;	
	}
}
var isexpanseclicked=true;
function expansesmenu(){
		
	if(isexpanseclicked==true){
	document.getElementById("expanses").innerHTML='<a class="dropdown-item" href="dodaj-wydatek.html"><i class="icon-doc-add"></i> Dodaj wydatek</a><a class="dropdown-item" href="#"><i class="icon-edit"></i> Edytuj wydatek</a><a class="dropdown-item" href="#"><i class="icon-trash"></i> Usuń wydatek</a>';
	isexpanseclicked = false;
	}
	else if (isexpanseclicked==false){
	document.getElementById("expanses").innerHTML='';
	isexpanseclicked = true;	
	}
}
function changemenucontent()
{
	if(window.innerWidth < 580){
		document.getElementById("main-menu-content").innerHTML='<div class="col-10 p-3"><div class="pb-2 bg-light rounded mb-3 px-3 info-place text-break"><fieldset class="border-mine border-danger pt-2 pb-4 px-2"><legend  class="w-auto"><h5>Twoje działania</h5></legend><div class="text-center px-2"><span class="mynumber">1</span>Wprowadzasz informację o przychodach np. wynagrodzeniu z pracy.</div></fieldset></div><i class="icon-down-open timeline-arrow-3 text-center mb-3"></i><div class="pb-2 bg-light rounded mb-3 px-3 info-place text-break"><fieldset class="border-mine border-danger pt-2 pb-4 px-2"><legend  class="w-auto"><h5>Efekt</h5></legend> <div class="text-center px-2"><span class="mynumber">2</span>Twój portfel w aplikacji zostaje uzupełniony o dodatkowe środki.</div></fieldset></div><i class="icon-down-open timeline-arrow-3 text-center mb-3"></i><div class="pb-2 bg-light rounded mb-3 px-3 info-place text-break"><fieldset class="border-mine border-danger pt-2 pb-4 px-2"><legend  class="w-auto"><h5>Twoje działania</h5></legend> <div class="text-center px-2"><span class="mynumber">3</span>Dokonujesz płatności - wprowadzasz wydatek.</div></fieldset></div><i class="icon-down-open timeline-arrow-3 text-center mb-3"></i><div class="pb-2 bg-light rounded mb-3 px-3 info-place px-2 text-break"><fieldset class="border-mine border-danger pt-2 pb-4"><legend  class="w-auto"><h5>Efekt</h5></legend> <div class="text-center px-2"><span class="mynumber">4</span>Twój portfel zostaje obciążony.</div></fieldset></div><i class="icon-down-open timeline-arrow-3 text-center mb-3"></i><div class="pb-2 bg-light rounded mb-3 px-3 info-place px-2 text-break"><fieldset class="border-mine border-danger pt-2 pb-4"><legend  class="w-auto"><h5>Twoje działania</h5></legend> <div class="text-center px-2"><span class="mynumber">5</span>Panujesz nad swoim budżetem, sprawdzasz bilans z dowolnego okresu.</div></fieldset></div><i class="icon-down-open timeline-arrow-3 text-center mb-3"></i><div class="pb-2 bg-light rounded mb-3 px-3 info-place px-2 text-break"><fieldset class="border-mine border-danger pt-2 pb-4"><legend  class="w-auto"><h5>Efekt</h5></legend> <div class="text-center px-2"><span class="mynumber">6</span>Pełna kontrola to więcej oszczędności :)</div></fieldset></div></div>';
	}
	else{
		if(window.innerWidth >= 580 && window.innerWidth < 770){
			document.getElementById("main-menu-content").innerHTML='<div class="col-sm-5 text-center rounded p-3"><div class="py-2 rounded mb-3 info-place"><span class="timeline-title">Twoje działania:</span></div><div class="py-4 bg-light rounded mb-10 px-3 info-place"><span class="mynumber">1</span>Wprowadzasz informację o przychodach np. wynagrodzeniu z pracy.</div><div class="p-4 bg-light rounded mb-20 px-3 info-place"><span class="mynumber">3</span>Dokonujesz płatności - wprowadzasz wydatek.</div><div class="py-4 bg-light rounded mb-5 px-3 info-place"><span class="mynumber">5</span>Panujesz nad swoim budżetem, sprawdzasz bilans z dowolnego okresu.</div></div><div class="col-sm-2 text-center p-3 px-3 text-center"><div class="fusion-timeline-line"><span class = "timeline-circle mt-15 mb-10"></span><span class = "timeline-circle mb-15"></span><span class = "timeline-circle mb-10"></span><span class = "timeline-circle mb-20"></span><span class = "timeline-circle mb-10"></span><span class = "timeline-circle"></span></div><i class="icon-down-dir timeline-arrow-2"></i></div><div class="col-sm-5 text-center p-3"><div class="py-2 rounded mb-20 px-3 info-place"><span class="timeline-title">Efekt:</span></div><div class="py-4 bg-light rounded mb-15 px-3 info-place"><span class="mynumber">2</span>Twój portfel w aplikacji zostaje uzupełniony o dodatkowe środki.</div><div class="py-4 bg-light rounded mb-20 px-3 info-place"><span class="mynumber">4</span>Twój portfel zostaje obciążony.</div><div class=" p-4 bg-light rounded mb-5 px-3 info-place"><span class="mynumber">6</span>Pełna kontrola to więcej oszczędności :)</div></div>';
		}
		else {
			document.getElementById("main-menu-content").innerHTML='<div class="col-md-5 col-lg-4 col-xl-3 text-center rounded p-3"><div class="py-2 rounded mb-3 info-place"><span class="timeline-title">Twoje działania:</span></div><div class="py-4 bg-light rounded mb-15 px-3 info-place"><span class="mynumber">1</span>Wprowadzasz informację o przychodach np. wynagrodzeniu z pracy.</div><div class="p-4 bg-light rounded mb-15 px-3 info-place"><span class="mynumber">3</span>Dokonujesz płatności - wprowadzasz wydatek.</div><div class="py-4 bg-light rounded mb-5 px-3 info-place"><span class="mynumber">5</span>Panujesz nad swoim budżetem, sprawdzasz bilans z dowolnego okresu.</div></div><div class="col-sm-2 text-center p-3 px-3 text-center"><div class="fusion-timeline-line"><span class = "timeline-circle mt-10 mb-10"></span><span class = "timeline-circle mb-12"></span><span class = "timeline-circle mb-12"></span><span class = "timeline-circle mb-10"></span><span class = "timeline-circle mb-10"></span><span class = "timeline-circle"></span></div><i class="icon-down-dir timeline-arrow"></i></div><div class="col-md-5 col-lg-4 col-xl-3 text-center p-3"><div class="py-2 rounded mb-15 px-3 info-place"><span class="timeline-title">Efekt:</span></div><div class="py-4 bg-light rounded mb-15 px-3 info-place"><span class="mynumber">2</span>Twój portfel w aplikacji zostaje uzupełniony o dodatkowe środki.</div><div class="py-4 bg-light rounded mb-15 px-3 info-place"><span class="mynumber">4</span>Twój portfel zostaje obciążony.</div><div class=" p-4 bg-light rounded mb-5 px-3 info-place"><span class="mynumber">6</span>Pełna kontrola to więcej oszczędności :)</div></div>';
		}
	}	
}
var data = new Date();
var day;
var month;
var rok;
var zmienna = "aafafa";
day = data.getUTCDate();
month = data.getMonth()+1;
rok = data.getFullYear();

if (month < 10) month = "0"+month;
if (day < 10) day = "0"+day;
function showDate()
{
document.getElementById("date-input").value = rok+"-"+month+"-"+day;
}