<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Visualizza Formazione</FONT><br></p>

<FORM name="form1" action="formazioni2.php" method="POST">
<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">

<TR>
  <TD width="50%" align="right">
    seleziona la squadra:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="idsquadra">
      <?
        $sql = "SELECT nome FROM fantasquadre ORDER BY nome";
	$query = mysql_query($sql) or die(errore());
	while ($line = mysql_fetch_array($query,MYSQL_NUM))
	{
	  print "<OPTION value=\"$line[0]\">$line[0]</OPTION>";
	}
      ?>
    </SELECT>
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    seleziona la fantagiornata:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="fantagiornata">
      <?
        $sql = "SELECT numero FROM fantagiornate ORDER BY numero";
	$query = mysql_query($sql) or die(errore());
	while ($line = mysql_fetch_array($query,MYSQL_NUM))
	{
	  print "<OPTION value=\"$line[0]\">$line[0]</OPTION>";
	}
      ?>
    </SELECT>
  </TD>
</TR>

</TABLE>

<P align="center"><INPUT type="submit" name="visualizza" value="visualizza" alt="visualizza"></P>

</FORM>

<?
  require "down.php"
?>
