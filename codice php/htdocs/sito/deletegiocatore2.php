<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center">
<FONT size="+2">Cancella Giocatore</FONT><br></p>

<?
  
 $password = mysql_escape_string($_POST["password"]);
 $sql = "SELECT * FROM `amministratore` WHERE amministratore.password = PASSWORD('$password')";

 $query = mysql_query($sql) or die(errore());
  
 $numero = mysql_num_rows($query);
 
 $idgiocatore = $_POST["idgiocatore"];
 if ($numero == 1)
  {
    $sql = "DELETE FROM `giocatori` WHERE codice = '$idgiocatore'";
    $query = mysql_query($sql) or die(errore());
    $righe_infette = mysql_affected_rows($connessione);
    if ($righe_infette == 0)
    {
      echo "Nessun giocatore presente con quel nome.<br>";
    }
    else
    {
      echo "Giocatore cancellato con successo!!!<br>";
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
