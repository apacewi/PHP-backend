<?php
	session_start();
	//zabezpieczenie przed odpaleniem bezposrednio
	if(!isset($_POST['email']))
	{
		header('Location: logowanie.php');
		exit();
	}
	// nadanie fladze wartosci true
	$veryfied=true;
	
	//weryfikacja imienia <3 lub >20	
	if(strlen($_POST['nickname'])<3 || strlen($_POST['nickname'])>20)
	{
		$_SESSION['usernameError'] = '<div style="color:red">Podaj imię od 3 do 20 znaków.</div>';
		$veryfied=false;
	}
	//weryfikacja nazwiska <2 lub >30
	if(strlen($_POST['surname'])<2 || strlen($_POST['surname'])>30)
	{
		$_SESSION['surnameError'] = '<div style="color:red">Podaj nazwisko od 2 do 30 znaków.</div>';
		$veryfied=false;
	}
	// przypisanie email
	$email = $_POST['email'];
	// sanityzacja email
	$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
	//weryfikacja email
	if((filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)==false || ($email!=$sanitizedEmail)))
	{
		$veryfied=false;
		$_SESSION['emailError'] = '<div style="color:red">Podaj poprawny adres E-mail.</div>';
	}
	//przypisanie hasel
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	//weryfikacja dluosci hasla
	if((strlen($password1)<8)||(strlen($password1)>20))
	{
		$veryfied=false;
		$_SESSION['passwordError'] = '<div style="color:red">Podaj hasło składające się z conajmniej 8 do maksymalnie 20 znaków.</div>';
	}
	//weryfikacja zgodnosci hasel
	if($password1!=$password2)
	{
		$veryfied=false;
		$_SESSION['passwordError'] = '<div style="color:red">Podane hasła nie są takie same.</div>';
	}
	//hashowanie hasel
	 $hashed_password=password_hash($password1, PASSWORD_DEFAULT);
	// echo $hashed_password; exit();
	
	require_once "database.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	try
	{
		$connection = new mysqli($host, $db_user, $db_password, $db_name);
		if($connection->connect_errno!=0)
		{
			throw new Exception(mysqli_connect_errno());
		}
		else
		{
			//sprawdzanie istnienia emaila w bazie
			$result = $connection->query("SELECT userID FROM users WHERE email='$email'");
			if(!result) throw new Exception($connection->error);
			
			$numberOfMails = $result->num_rows;
			if($numberOfMails>0)	
			{
				$veryfied=false;
				$_SESSION['emailError'] = '<div style="color:red">Podany adres E-mail już istnieje!</div>';
			}
			
			$connection->close();
		}
	}
	catch(Exception $errorType)
	{
		echo '<span style="color:red;">Błąd serwera</span>';
		echo '<br />Informacja developerska: '.$errorType;	
		//$_SESSION['eType']=$errorType;
	}
	
	// testowe sprawdzenie bledow!!
	if($veryfied==false){
		header('Location: register-error.php');
	}
	else if($veryfied==true){
		//DODAJ NOWEGO UZYTKOWNIKA DO BAZY
		
			$nickname=$_POST['nickname'];
			$surname=$_POST['surname'];
			//dodanie nowego uzytkownika
			//INSERT INTO tab1 (ID, Imie, Nazwisko) VALUES ('1', 'Jan', 'Kowalski');
			$connection = new mysqli($host, $db_user, $db_password, $db_name);
			if($connection->query("INSERT INTO users (userId, username, surname, password, email) VALUES (NULL, '$nickname', '$surname', '$hashed_password', '$sanitizedEmail')"))
			{
				//przekopiuj kategorie z default incomes i expanses do assigned to users
				//incomes
				
				
				
				
				$_SESSION['newUser']='<h2>Udało się założyć nowe konto! Możesz się zalogować.</h2>';
				header('Location: logowanie.php');
			}			
			else
			{
				throw new Exception($connection->error);
			}
			
			$connection->close();
		
		

		
	}








?>