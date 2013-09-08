<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center">
<FONT size="+2">Inserisci Giocatore</FONT><br></p>

<?
  
 $password = mysql_escape_string($_POST["password"]);
 $sql = "SELECT * FROM `amministratore` WHERE amministratore.password = PASSWORD('$password')";

 $query = mysql_query($sql) or die(errore());
  
 $numero = mysql_num_rows($query);
 
  if ($numero ==1)
  {
    $squadra = $_POST["squadra"];
 $dbtransaction = 1;
 $sql = "begin";
 $query = mysql_query($sql) or die(errore());    
    $sql = "SELECT formazione FROM schiera WHERE fantasquadra='$squadra'";
    $query = mysql_query($sql) or die(errore());
    while ($line = mysql_fetch_array($query))
    {
      foreach ($line as $campo)
      {
        $sql = "DELETE FROM `formazioni` WHERE codice = $campo";
        $query = mysql_query($sql) or die(errore());
      }
    }
      
    $sql = "DELETE FROM `fantasquadre` WHERE nome = '$squadra'";
    $query = mysql_query($sql) or die(errore());
    
    echo "Fantasquadra eliminata con successo!!!<br>";
  }
  else
  {
    echo "<br>ERRORE: password non valida o database corrotto"; 
  }

?>

<?
  require "down.php"
?>

