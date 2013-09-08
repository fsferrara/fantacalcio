<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Elimina Fantasquadra</FONT><br></p>

<FORM name="form1" action="eliminasquadra2.php" method="POST">
<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">

<TR>
  <TD width="50%" align="right">password di amministratore:</TD>
  <TD width="50%" align="left"><INPUT type="password" name="password" maxlength="20" alt="password" align="left"></TD>
</TR>

<TR>
  <TD width="50%" align="right">
    seleziona la squadra:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="squadra">
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

</TABLE>

<P align="center"><INPUT type="submit" name="elimina" value="elimina" alt="elimina"></P>

</FORM>

<?
  require "down.php"
?>
