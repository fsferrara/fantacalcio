<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Scambia Giocatore</FONT><br></p>

<?
  if (isset($_POST["idsquadra"]))
  {
    $idsquadra = mysql_escape_string($_POST["idsquadra"]);
    $ruolo = $_POST["ruolo"];
    print ('
    <FORM name="form1" action="swapgiocatore3.php" method="POST">

<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">
<TR>
      <TD width="50%" align="right">password del fantallenatore:</TD>
      <TD width="50%" align="left"><INPUT type="password" name="password" maxlength="20" alt="password" align="left"></TD>
</TR>

<TR>
  <TD width="50%" align="right">
    fantasquadra:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="squadra" maxlength="20" alt="squadra" align="left" value="' . $idsquadra . '" readonly>
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    seleziona il giocatore da scambiare:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="out">

');    
    
        $sql = "SELECT codice,cognome,nome,valore FROM giocatori WHERE giocatori.fantasquadra='$idsquadra' AND ruolo='$ruolo' ORDER BY cognome";
	$query = mysql_query($sql) or die(errore());
	while ($line = mysql_fetch_array($query,MYSQL_NUM))
	{
	  print "<OPTION value=\"$line[0]\">($line[0]) $line[1] $line[2] -- $line[3] fantacrediti</OPTION>";
	}
print ('
    </SELECT>
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    seleziona il giocatore da acquisire:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="in">

');
        $sql = "SELECT codice,cognome,nome,valore FROM giocatori WHERE ISNULL(giocatori.fantasquadra) AND ruolo='$ruolo' ORDER BY cognome";
	$query = mysql_query($sql) or die(errore());
	while ($line = mysql_fetch_array($query,MYSQL_NUM))
	{
	  print "<OPTION value=\"$line[0]\">($line[0]) $line[1] $line[2] -- $line[3] fantacrediti</OPTION>";
	}

print('
	
    </SELECT>
  </TD>
</TR>

</TABLE>

<P align="center"><INPUT type="submit" name="scambia" value="scambia" alt="scambia"></P>

</FORM>

  ');          
  }
  else
  {
    print ('<p align="left">Nessuna squadra selezionata!</p>');
  }
?>

<?
  require "down.php"
?>
