<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Aggiornamento Giocatore</FONT><br></p>

<FORM name="form1" action="updategiocatore2.php" method="POST">

<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD width="50%" align="right">
    seleziona il giocatore:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="idgiocatore">
      <?
        $sql = "SELECT codice,cognome,nome FROM giocatori ORDER BY cognome";
	$query = mysql_query($sql) or die(errore());
	while ($line = mysql_fetch_array($query,MYSQL_NUM))
	{
	  print "<OPTION value=\"$line[0]\">($line[0]) $line[1] $line[2]</OPTION>";
	}
      ?>
    </SELECT>
  </TD>
</TR>
</TABLE>

<P align="center"><INPUT type="submit" name="modifica" value="modifica" alt="modifica"></P>

</FORM>

<?
  require "down.php"
?>
