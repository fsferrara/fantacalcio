<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Modifica Formazione</FONT><br></p>

<?
  $schema = $_POST["schema"];
  $squadra = $_POST["squadra"];
  $fantagiornata = $_POST["fantagiornata"];

  $flag=0;
  for ( $i=1 ; $i<15 ; $i=$i+1 )
  {
    for ($j=$i+1 ; $j<=15 ; $j=$j+1)
    {
      if ($_POST["g$i"] == $_POST["g$j"])
      {
        $flag = 1;
      }
    }
  }
  
  if ($flag == 1)
  {
    echo "Hai scelto lo stesso giocatore più di una volta!!!";
  }
  else
  { 
    $g[1] = $_POST["g1"];
    $g[2] = $_POST["g2"];
    $g[3] = $_POST["g3"];
    $g[4] = $_POST["g4"];
    $g[5] = $_POST["g5"];
    $g[6] = $_POST["g6"];
    $g[7] = $_POST["g7"];
    $g[8] = $_POST["g8"];
    $g[9] = $_POST["g9"];
    $g[10] = $_POST["g10"];
    $g[11] = $_POST["g11"];
    $g[12] = $_POST["g12"];
    $g[13] = $_POST["g13"];
    $g[14] = $_POST["g14"];
    $g[15] = $_POST["g15"];
  
 $dbtransaction = 1;
 $sql = "begin";
 $query = mysql_query($sql) or die(errore());    
    
    $sql = "SELECT formazione FROM schiera WHERE fantagiornata=$fantagiornata AND fantasquadra='$squadra'"; 
    $query = mysql_query($sql) or die(errore());
    $line = mysql_fetch_array($query); 
    $formazione = $line[0];    
    $sql = "DELETE FROM giocare WHERE formazione = $formazione";
    $query = mysql_query($sql) or die(errore());
    
    switch($schema)
    {
      case "3-4-3":
        require "343m.php";
        break;
      case "3-5-2":
        require "352m.php";
        break;
      case "4-5-1":
        require "451m.php";
        break;
      case "4-4-2":
        require "442m.php";
        break;
      case "4-3-3":
        require "433m.php";
        break;
      case "5-4-1":
        require "541m.php";
        break;
      case "5-3-2":
        require "532m.php";
        break;
    }
    echo "Formazione modificata con successo!"; 
  }
  
?>

<?
  require "down.php"
?>
