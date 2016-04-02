<?php	
	//gerecht verwijderen naargelang het type gerecht en id
	function VerwijderGerecht($gerecht, $id)
	{
		global $link;
			
		$result=mysqli_query($link,"DELETE FROM $gerecht WHERE ID$gerecht = '$id'");
		return true;
	}

	//functie dat een string terug geeft van alle data uit de database in een form
	function maakTabelForm($array, $gerecht)
	{
		$string = "";
		
		for($x = 0; $x < count($array); $x++)
		{
			//form maken
			$string .= "<form action='?pagina=admin&gerecht=".$gerecht."' method='POST'><input type='hidden' name='id' value='".$array[$x][0]."' />".$array[$x][1]." -> €".$array[$x][2]."<input type='submit' value='verwijder'/></p></form>";
		}
		
		return $string;
	}

	//functie dat een string terug geeft van alle data uit de database
	function maakTabel($array)
	{
		$string = "";
		
		for($x = 0; $x < count($array); $x++)
		{
			$string .= "<p class='gerechtRij'>".$array[$x][1]." <input type='submit' class='btn btn-info btn-sm lblPrijs' value=' €  ".$array[$x][2]."' /></p>";
		}
		
		return $string;
	}
	
	//nieuw gerecht met de gegeven waarden toevoegen in de gegeven tabel
	function VoegGerechtToe($omschrijving, $prijs, $tabel)
	{
		global $link;
			
		$result=mysqli_query($link,"INSERT INTO $tabel VALUES ('','$omschrijving','$prijs');");
		return true;
	}
	
	//geeft een array terug van alle desserten
	function GetDessert()
	{
		global $link;
			
		$array = null;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM dessert");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDdessert"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//geeft een array terug van alle soepen
	function GetSoepen()
	{
		global $link;
			
		$array = null;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM soepen");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDsoepen"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//geeft een array terug van alle salades en pasta's
	function GetSaladesEnPastas()
	{
		global $link;
			
		$array = null;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM salades");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDsalades"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//geeft een array terug van alle ontbijten
	function GetOntbijt()
	{
		global $link;
			
		$array = null;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM ontbijt");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDontbijt"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//geeft een array terug van alle belgische makelij
	function GetMakelij()
	{
		global $link;
			
		$array = null;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM makelij");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDmakelij"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//geeft een array terug van alle broodjes
	function GetBroodjes()
	{
		global $link;
			
		$array = null;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM broodjes");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDbroodjes"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//geeft een array terug van alle kleine hapjes
	function GetKleineHapjes()
	{
		global $link;
			
		$array = null;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM kleinehap");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDkleinehap"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//functie om in te loggen
	function Login($mail,$paswoord)
	{
		global $link;
		
		$mail = mysqli_real_escape_string($link, $mail);	
		$password = mysqli_real_escape_string($link, $paswoord);
		$password = hash("sha512", $password);
		
		$result = mysqli_query($link, "SELECT * FROM user WHERE mail='".$mail."'");
		
		$row = mysqli_fetch_assoc($result);
		
		if($mail == $row['mail'] && $password == $row['paswoord'])
		{
			unset($_SESSION['user']);
			$_SESSION['user'] = 1000;
			return true;
		}
		else
		{
			unset($_SESSION['fout']);
			$_SESSION['fout'] = 'Login is fout!';
			return false;
		}
		mysqli_close($link);
	}
?>