<?
// Il nome dell'host (hostname) su cui si trova MySQL
$dbserver = "localhost";
// Il nome del nostro database
$dbdatabase = "dbsaverio";
// Il nostro nome utente (username)
$dbutente = "saverio";
// La nostra password
$dbpassword = "saverio";

$dbtransaction = 0;

function errore()
{
  echo "<h1>Errore in connessione!</h1><br />
  Tipo di errore:<br />";
  echo mysql_error();
    
  if ($dbtransaction == 1)
  {
    $dbtransaction = 0; //per evitare di dare un commit inaspettato
    $sql = "rollback";
    $query = mysql_query($sql) or die();
  }
  
}

$connessione = @mysql_connect($dbserver, $dbutente, $dbpassword) or die(errore());
$db = mysql_select_db($dbdatabase, $connessione) or die(errore());

?>
