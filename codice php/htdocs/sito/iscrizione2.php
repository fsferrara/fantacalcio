<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center">
<FONT size="+2">Iscrizione al Fantacampionato</FONT><br></p>

<?
 $flag = 1;
 $dbtransaction = 1;
 $sql = "begin";
 $query = mysql_query($sql) or die(errore());

 if (isset($_POST["portiere1"]) && isset($_POST["portiere2"]) && isset($_POST["difensore1"]) && isset($_POST["difensore2"]) && isset($_POST["difensore3"]) && isset($_POST["difensore4"]) && isset($_POST["difensore5"]) && isset($_POST["difensore6"]) && isset($_POST["centrocampista1"]) && isset($_POST["centrocampista2"]) && isset($_POST["centrocampista3"]) && isset($_POST["centrocampista4"]) && isset($_POST["centrocampista5"]) && isset($_POST["centrocampista6"]) && isset($_POST["attaccante1"]) && isset($_POST["attaccante2"]) && isset($_POST["attaccante3"]) && isset($_POST["attaccante4"]))
 {
   $flag = 0;
 }
 
 if ($_POST["portiere1"] == $_POST["portiere2"])
 {
   $flag = 1;
 }
 
 for ( $i=1 ; $i<6 ; $i=$i+1 )
 {
   for ($j=$i+1 ; $j<=6 ; $j=$j+1)
   {
     if ($_POST["difensore$i"] == $_POST["difensore$j"])
     {
       $flag = 1;
     }
   }
 }
 
 for ( $i=1 ; $i<6 ; $i=$i+1 )
 {
   for ($j=$i+1 ; $j<=6 ; $j=$j+1)
   {
     if ($_POST["centrocampista$i"] == $_POST["centrocampista$j"])
     {
       $flag = 1;
     }
   }
 }
 
 for ( $i=1 ; $i<4 ; $i=$i+1 )
 {
   for ($j=$i+1 ; $j<=4 ; $j=$j+1)
   {
     if ($_POST["attaccante$i"] == $_POST["attaccante$j"])
     {
       $flag = 1;
     }
   }
 }
 
 if ( $flag == 0 )
 {
   $g[1] = $_POST["portiere1"];
   $g[2] = $_POST["portiere2"];
   $g[3] = $_POST["difensore1"];
   $g[4] = $_POST["difensore2"];
   $g[5] = $_POST["difensore3"];
   $g[6] = $_POST["difensore4"];
   $g[7] = $_POST["difensore5"];
   $g[8] = $_POST["difensore6"];
   $g[9] = $_POST["centrocampista1"];
   $g[10] = $_POST["centrocampista2"];
   $g[11] = $_POST["centrocampista3"];
   $g[12] = $_POST["centrocampista4"];
   $g[13] = $_POST["centrocampista5"];
   $g[14] = $_POST["centrocampista6"];
   $g[15] = $_POST["attaccante1"];
   $g[16] = $_POST["attaccante2"];
   $g[17] = $_POST["attaccante3"];
   $g[18] = $_POST["attaccante4"];
   
   $sql = "SELECT SUM(valore) FROM giocatori WHERE codice='$g[1]' OR codice='$g[2]' OR codice='$g[3]' OR codice='$g[4]' OR codice='$g[5]' OR codice='$g[6]' OR codice='$g[7]' OR codice='$g[8]' OR codice='$g[9]' OR codice='$g[10]' OR codice='$g[11]' OR codice='$g[12]' OR codice='$g[13]' OR codice='$g[14]' OR codice='$g[15]' OR codice='$g[16]' OR codice='$g[17]' OR codice='$g[18]'";
   $query = mysql_query($sql) or die(errore()); 
   $line = mysql_fetch_array($query,MYSQL_NUM);
   $fantacrediti = 200 - $line[0];
   if ( $fantacrediti >= 0 )
   {
     $nome = mysql_escape_string($_POST["nome"]);
     $fantallenatore = mysql_escape_string($_POST["fantallenatore"]);
     $password = $_POST["password"];
     $maglietta = $_POST["maglietta"];
     $schema = "4-4-2";
     $punti = 0;  
    
     $sql = "INSERT INTO `fantasquadre` VALUES ('$nome','$fantallenatore',PASSWORD('$password'),'$maglietta','$fantacrediti','$punti')";
     $query = mysql_query($sql) or die(errore());
       
     /******* Setto i giocatori "non disponibili" *********/ 
     for ( $i=1 ; $i<=18 ; $i=$i+1)
     {
       $sql = "UPDATE `giocatori` SET "
	 . " fantasquadra=\"$nome\" "
	 . " where codice=" . $g[$i];
       $query = mysql_query($sql) or die(errore());
     }
     /***********************************************************/

     /******** Inserisco la formazione ************/
     $sql = "INSERT INTO `formazioni` VALUES ('', '$schema')";
     $query = mysql_query($sql) or die(errore());
     $sql = "SELECT MAX(codice) FROM `formazioni`";     
     $query = mysql_query($sql) or die(errore());
     $line = mysql_fetch_array($query,MYSQL_NUM);
     $formazione = $line[0];
     $sql = "SELECT MAX(numero) FROM `fantagiornate`";     
     $query = mysql_query($sql) or die(errore());
     $line = mysql_fetch_array($query,MYSQL_NUM);
     $fantagiornata = $line[0];     
     $sql = "INSERT INTO `schiera` VALUES ('$fantagiornata','$nome','$formazione')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[1]', '0')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[2]', '1')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[3]', '0')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[4]', '0')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[5]', '0')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[6]', '0')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[7]', '1')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[9]', '0')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[10]', '0')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[11]', '0')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[12]', '0')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[13]', '1')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[15]', '0')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[16]', '0')";
     $query = mysql_query($sql) or die(errore());
     $sql = "INSERT INTO `giocare` VALUES ('$formazione', '$g[17]', '1')";
     $query = mysql_query($sql) or die(errore());
     /***********************************************************/
     
     echo "Fantasquadra inserita con successo!!!<br>";   
   }
   else
   {
     echo "Non puoi superare i 200 fantacrediti!";
   }
 }
 else
 {
   echo "Errore nella scelta dei giocatori!";
 }
?>

<?
  require "down.php"
?>