<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center">
<FONT size="+2">Inserire i risultati della fantagiornata</FONT><br></p>

<?
  
 $password = mysql_escape_string($_POST["password"]);
 $sql = "SELECT * FROM `amministratore` WHERE amministratore.password = PASSWORD('$password')";

 $query = mysql_query($sql) or die(errore());
  
 $numero = mysql_num_rows($query);
 
  if ($numero ==1)
  {
    $fantagiornata = $_POST["fantagiornata"];
 $dbtransaction = 1;
 $sql = "begin";
 $query = mysql_query($sql) or die(errore());
    $sql = "SELECT codice FROM giocatori WHERE fantasquadra IS NOT NULL ORDER BY cognome";
    $query = mysql_query($sql) or die(errore());
    while ($line = mysql_fetch_row($query))
    {
      $voto = $_POST["voto$line[0]"];
      $goalfatti = $_POST["goalfatti$line[0]"];
      $assist = $_POST["assist$line[0]"];
      $rigorisbagliati = $_POST["rigorisbagliati$line[0]"];
      $autoreti = $_POST["autoreti$line[0]"];
      $espulsione = $_POST["espulsione$line[0]"];
      $ammonizioni = $_POST["ammonizioni$line[0]"];
      $rigoriparati = $_POST["rigoriparati$line[0]"];
      $goalsubiti = $_POST["goalsubiti$line[0]"];
      
      $sql2 = "INSERT INTO `risultato` VALUES ('$line[0]','$fantagiornata','$voto','$goalfatti','$assist','$rigorisbagliati','$autoreti','$espulsione','$ammonizioni','$rigoriparati','$goalsubiti')";
      $query2 = mysql_query($sql2) or die(errore());
    }    

    $sql = "INSERT INTO `fantagiornate` VALUES ('')";
    $query = mysql_query($sql) or die(errore());
    $sql = "SELECT MAX(numero) FROM fantagiornate";
    $query = mysql_query($sql) or die(errore());
    $line = mysql_fetch_array($query);
    $new_fantagiornata = $line[0];

/****************************************************************************************
  c'è $fantagiornata e $new_fantagiornata ... bisogna calcolare i risultati per ogni
  formazione e poi inserire le nuove formazioni
  i risultati dei giocatori già sono stati inseriti
****************************************************************************************/    

    $sql = "SELECT nome FROM fantasquadre";
    $query = mysql_query($sql) or die(errore());
    while ($line = mysql_fetch_row($query))
    {
      $sql2 = "SELECT formazione FROM schiera WHERE fantasquadra='$line[0]' AND fantagiornata='$fantagiornata'";
      $query2 = mysql_query($sql2) or die(errore());
      $line2 = mysql_fetch_array($query2);
      $formazione = $line2[0];
      $totale = 0;
      $riserva=0;
      $sql2 = "SELECT giocatore FROM giocare JOIN giocatori ON giocatori.codice = giocare.giocatore WHERE formazione='$formazione' ORDER BY ruolo DESC, riserva ASC";
      $query2 = mysql_query($sql2) or die(errore());
      while ($line2 = mysql_fetch_row($query2))
      {
        $sql3 = "SELECT voto,goalfatti,assist,rigorisbagliati,autoreti,espulsione,ammonizioni,rigoreparati,goalsubiti,riserva FROM risultato JOIN giocare ON risultato.giocatore = giocare.giocatore WHERE risultato.giocatore='$line2[0]' AND fantagiornata='$fantagiornata'";
	$query3 = mysql_query($sql3) or die(errore());
	$line3 = mysql_fetch_array($query3);
	
	if ($line3[9] == 1)
	{
	  if ($riserva == 1)
	  {
	    $riserva == 0;
	    $tot_giocatore = $line3[0] + (3 * $line3[1]) + $line3[2] - (3 * $line3[3]) - (2 * $line3[4]) - $line3[5] - (0.5 * $line3[6]) + (3 * $line3[7]) - $line3[8];
   	    $totale = $totale + $tot_giocatore;	  
	  }
	}
	else
	{
	  if ($line3[0] == 0)
	  {
	    $riserva=1;
	  }
	  else
	  {
	    $tot_giocatore = $line3[0] + (3 * $line3[1]) + $line3[2] - (3 * $line3[3]) - (2 * $line3[4]) - $line3[5] - (0.5 * $line3[6]) + (3 * $line3[7]) - $line3[8];
   	    $totale = $totale + $tot_giocatore;
          }
	}
      }
      $sql2 = "SELECT punti FROM `fantasquadre` WHERE nome='$line[0]'";
      $query2 = mysql_query($sql2) or die(errore());
      $line2 = mysql_fetch_array($query2);
      $punti = $line2[0];
      $punti = $punti + $totale;
      $sql2 = "UPDATE `fantasquadre` SET "
	 . " punti=$punti "
	 . " where nome='$line[0]'";
      $query2 = mysql_query($sql2) or die(errore());
      
      $sql2 = "SELECT schema,codice FROM schiera,formazioni WHERE fantagiornata=$fantagiornata AND formazione=codice AND fantasquadra='$line[0]'";
      $query2 = mysql_query($sql2) or die(errore());
      $line2 = mysql_fetch_array($query2);
      $schema = $line2[0];
      $formazione_vecchia = $line2[1];
      $sql2 = "INSERT INTO formazioni VALUES ('','$schema')";
      $query2 = mysql_query($sql2) or die(errore());
      $sql2 = "SELECT MAX(codice) FROM formazioni";
      $query2 = mysql_query($sql2) or die(errore());
      $line2 = mysql_fetch_array($query2);
      $formazione_nuova = $line2[0];
      $sql2 = "INSERT INTO schiera VALUES ('$new_fantagiornata','$line[0]','$formazione_nuova')";
      $query2 = mysql_query($sql2) or die(errore());
      $sql2 = "SELECT giocatore,riserva FROM giocare WHERE formazione=$formazione_vecchia";
      $query2 = mysql_query($sql2) or die(errore());
      while($line2 = mysql_fetch_row($query2))
      {
        $sql3 = "INSERT INTO giocare VALUES ('$formazione_nuova','$line2[0]','$line2[1]')";
	$query3 = mysql_query($sql3) or die(errore());
      }
      
    }    
    echo "Risultati inseriti con successo!!!<br>";
  }
  else
  {
    echo "<br>ERRORE: password non valida o database corrotto"; 
  }

?>

<?
  require "down.php"
?>

