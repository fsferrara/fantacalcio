<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Scambia Giocatore</FONT><br></p>

<?
   $sql = "SELECT lock_formazione FROM amministratore";
   $query = mysql_query($sql) or die(errore()); 
   $line = mysql_fetch_array($query);
   
   if ($line[0] == 0)
   {
   print('
<FORM name="form1" action="swapgiocatore2.php" method="POST">

<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD width="50%" align="right">
    seleziona squadra:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="idsquadra">
      ');
        $sql = "SELECT nome FROM fantasquadre ORDER BY nome";
	$query = mysql_query($sql) or die(errore());
	while ($line = mysql_fetch_array($query,MYSQL_NUM))
	{
	  print "<OPTION value=\"$line[0]\">$line[0]</OPTION>";
	}
      print('
    </SELECT>
  </TD>
</TR>


<TR>
  <TD width="50%" align="right">
    seleziona il ruolo in cui operare:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="ruolo">
              <OPTION selected value="portiere">portiere</OPTION>
	      <OPTION value="difensore">difensore</OPTION>
	      <OPTION value="centrocampista">centrocampista</OPTION>
	      <OPTION value="attaccante">attaccante</OPTION>
    </SELECT>
  </TD>
</TR>


</TABLE>

<P align="center"><INPUT type="submit" name="conferma" value="conferma" alt="conferma"></P>

</FORM>
');
}
else
{
print('<p align="center">Questa pagina è momentaneamente bloccata dall\'amministratore</p>');
}
?>
<?
  require "down.php"
?>
