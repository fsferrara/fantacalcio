<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center">
<FONT size="+2">Aggiornamento Giocatore</FONT><br></p>

<?
  
 $password = mysql_escape_string($_POST["password"]);
 $sql = "SELECT * FROM `amministratore` WHERE amministratore.password = PASSWORD('$password')";

 $query = mysql_query($sql) or die(errore());
  
 $numero = mysql_num_rows($query);
 
 $id = $_POST["codice"];
 $nome = mysql_escape_string($_POST["nome"]);
 $cognome = mysql_escape_string($_POST["cognome"]);
 $ruolo = $_POST["ruolo"];
 $valore = $_POST["valore"];
 $squadra = mysql_escape_string($_POST["squadra"]); 
  if ($numero ==1)
  {
    $sql = "UPDATE `giocatori` SET "
	 . " nome=\"$nome\", "
	 . " cognome=\"$cognome\", "
	 . " ruolo=\"$ruolo\", "
	 . " valore=\"$valore\", "
	 . " squadra=\"$squadra\" "
	 . " where codice=$id";
    $query = mysql_query($sql) or die(errore());
    echo "Giocatore modificato con successo!!!<br>";
  }
  else
  {
    echo "<br>ERRORE: password non valida o database corrotto"; 
  }

?>

<?
  require "down.php"
?>
