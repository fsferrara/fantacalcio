<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Bloccare le modifiche alle formazioni</FONT><br></p>

<?
  
 $password = mysql_escape_string($_POST["password"]);
 $sql = "SELECT * FROM `amministratore` WHERE amministratore.password = PASSWORD('$password')";

 $query = mysql_query($sql) or die(errore());
  
 $numero = mysql_num_rows($query);
 
  if ($numero ==1)
  {
    $sql = "UPDATE `amministratore` SET "
	 . " lock_formazione=1";
    $query = mysql_query($sql) or die(errore());
    echo "Modifiche alle formazioni bloccate con successo!!!<br>";
  }
  else
  {
    echo "<br>ERRORE: password non valida o database corrotto"; 
  }

?>

<?
  require "down.php"
?>
