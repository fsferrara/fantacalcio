<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center">
<FONT size="+2">Scambia Giocatore</FONT><br></p>

<?
  
 $password = mysql_escape_string($_POST["password"]);
 $squadra = mysql_escape_string($_POST["squadra"]);
 $sql = "SELECT fantacrediti FROM `fantasquadre` WHERE nome='$squadra' AND password = PASSWORD('$password')";
 $query = mysql_query($sql) or die(errore());
 
 $numero = mysql_num_rows($query);
 if ($numero == 1)
  { 
    $in = $_POST["in"];
    $out = $_POST["out"];
    $line = mysql_fetch_array($query);
    $fantacrediti = $line[0];
    $sql = "SELECT valore FROM giocatori WHERE codice = $out";
    $query = mysql_query($sql) or die(errore());
    $line = mysql_fetch_array($query);
    $fantacrediti = $fantacrediti + $line[0];
    $sql = "SELECT valore FROM giocatori WHERE codice = $in";
    $query = mysql_query($sql) or die(errore());
    $line = mysql_fetch_array($query);
    $fantacrediti = $fantacrediti - $line[0];
    
    if ($fantacrediti >= 0)
    {
     $sql = "SELECT MAX(numero) FROM fantagiornate";
     $query = mysql_query($sql) or die(errore());
     $line = mysql_fetch_array($query);
     $max_fantagiornata = $line[0];
     $sql = "SELECT giocare.giocatore FROM schiera,formazioni,giocare WHERE schiera.fantagiornata=$max_fantagiornata AND schiera.fantasquadra='$squadra' AND formazioni.codice=schiera.formazione AND giocare.formazione=schiera.formazione AND giocare.giocatore='$out'";
     $query = mysql_query($sql) or die(errore()); 
     $righe_infette = mysql_affected_rows($connessione);
 
 $dbtransaction = 1;
 $sql = "begin";
 $query = mysql_query($sql) or die(errore());
 
     if ( $righe_infette == 1 )
     {
        $sql = "SELECT formazione FROM schiera WHERE fantasquadra='$squadra' AND fantagiornata=$max_fantagiornata";
	$query = mysql_query($sql) or die(errore()); 
	$line = mysql_fetch_array($query);
        $formazione = $line[0];
	
        $sql = "UPDATE `giocare` SET "
	 . " giocatore=$in "
	 . " where giocatore=$out AND formazione=$formazione";
        $query = mysql_query($sql) or die(errore());
     }
      echo "Ti rimangono " . $fantacrediti . " fantacrediti<br>";
      $sql = "UPDATE `giocatori` SET "
	 . " fantasquadra=\"$squadra\" "
	 . " where codice=$in";
      $query = mysql_query($sql) or die(errore());
      $sql = "UPDATE `giocatori` SET "
	 . " fantasquadra=NULL "
	 . " where codice=$out";
      $query = mysql_query($sql) or die(errore());
      $sql = "UPDATE `fantasquadre` SET "
	 . " fantacrediti=$fantacrediti "
	 . " where nome='$squadra'";
      $query = mysql_query($sql) or die(errore());
      echo "Giocatore scambiato con successo!!!<br>";    
    }
    else
    {
      echo "Impossibile scambiare questo giocatore, hai bisogno di " . abs($fantacrediti) . " fantacrediti!";
    } 
  }
  else
  {
    echo "<br>ERRORE: password non valida o database corrotto"; 
  }

?>

<?
  require "down.php"
?>
