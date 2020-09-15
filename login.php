<?php 
	//rozpoczecie sesji
	session_start();
	// dołączenie bazy
	require_once "database.php";
	//otwarcie połączenia z bazą
	$connection = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if($connection->connect_errno!=0){
		echo "Error: ".$connection->connect_errno;
	}
	else{
		$connectionSuccesfull = "Udane połączenie z bazą";
		// przypisanie zmiennych metoda post jesli nastapilo polaczenie z baza
		$login = $_POST['email'];
		$password = $_POST['pass'];
		// pozbycie sie niebezpiecznych znakow wprowadzonych przez uzytkownika - sanityzacja
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		// sprawdzenie czy zmienne sa ustawione
		//jeśli są wysyłam zapytanie do bazy o sprawdzenie czy takie konto istnieje
		if(isset($login) && isset($password)){
		// w tym momencie mamy połączenie z bazą i poprawnie przesłane dane logowania
		// sprawdzenie w bazie czy są poprawne(jeśli baza zwróci 1 rekord z tymi danymi to gites)
		//zapisanie do zmiennej result czy zapytanie w ogole poszlo
		
			if($result = @$connection->query(sprintf("SELECT * FROM users WHERE BINARY email='%s'", mysqli_real_escape_string($connection, $login)))){
				
			//zapisanie do zmiennej nOR liczby rekordow zwroconych przez poprawne zapytanie
			$numberOfRecords = $result->num_rows;
				if($numberOfRecords >= 1){

					//sprawdzenie uzytkownika w bazie powiodlo sie
					//tworzenie tablicy asocjacyjnej z danymi uzytkownika
					$record = $result->fetch_assoc();
					//sprawdzenie z hashem
						if(password_verify($password, $record['password']))
						{						
						$_SESSION['logged'] = true;
						//czyszczenie rezultatu zapytania sql
						$result->close();
						//zapisanie w zmiennych sesyjnych danych uzytkownika
						$_SESSION['username'] = $record['username'];
						$_SESSION['surname'] = $record['surname'];
						$_SESSION['email'] = $record['email'];
						$_SESSION['userId'] = $record['userId'];
						
						unset($_SESSION['logError']);
						$result->free_result();
						header('Location: menu-glowne.php');
						}
						else{
						$_SESSION['logError'] = '<span style="color:red">Nieprawidłowe dane logowania.</span>';
						header('Location: logowanie.php');
						}
				
				}
				else{
				$_SESSION['logError'] = '<span style="color:red">Nieprawidłowe dane logowania.</span>';
				header('Location: logowanie.php');
				}
			}
			//jesli cos nie tak z zapytaniem do bazy:
			else{
				echo "BLAD ZAPYTANIA<br>";
			}
		}
		//jeśli nie są ustawione odsyłam do logowanie.php
		else{
		header('Location: logowanie.php');
		}
		$connection->close();
	}
	

	
	










	//kontrolne wypisanie zmiennych
  //  echo "Mój login: "."<br>".$login;
	//echo "<br>";
   // echo "Moje hasło: "."<br>".$password;
   // echo "<br>".$connectionSuccesfull;
?>