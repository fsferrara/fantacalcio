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
 
 $id = "NULL";
 $nome = mysql_escape_string($_POST["nome"]);
 $cognome = mysql_escape_string($_POST["cognome"]);
 $ruolo = $_POST["ruolo"];
 $valore = $_POST["valore"];
 $squadra = mysql_escape_string($_POST["squadra"]); 
  if ($numero ==1)
  {
    $sql = "INSERT INTO `giocatori` VALUES ('$id','$nome','$cognome','$ruolo','$valore','$squadra',NULL)";
    $query = mysql_query($sql) or die(errore());
    echo "Giocatore inserito con successo!!!<br>";
  }
  else
  {
    echo "<br>ERRORE: password non valida o database corrotto"; 
  }

?>

<?
  require "down.php"
?>

