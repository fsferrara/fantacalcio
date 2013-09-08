<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Cancella Giocatore</FONT><br></p>

<FORM name="form1" action="deletegiocatore2.php" method="POST">

<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD width="50%" align="right">password di amministratore:</TD>
  <TD width="50%" align="left"><INPUT type="password" name="password" maxlength="20" alt="password" align="left"></TD>
</TR>
</TABLE>

<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD width="50%" align="right">
    seleziona il giocatore:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="idgiocatore">
      <?
        $sql = "SELECT g.codice, g.cognome, g.nome FROM (giocatori AS g LEFT JOIN giocare AS f ON g.codice=f.giocatore) LEFT JOIN risultato AS r ON g.codice=r.giocatore WHERE ISNULL(r.giocatore) AND ISNULL(g.fantasquadra) AND ISNULL(f.giocatore) ORDER BY cognome";
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

<P align="center"><INPUT type="submit" name="cancella" value="cancella" alt="cancella"></P>

</FORM>

<?
  require "down.php"
?>
