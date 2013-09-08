<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Modifica Formazione</FONT><br></p>

<?
   $sql = "SELECT lock_formazione FROM amministratore";
   $query = mysql_query($sql) or die(errore()); 
   $line = mysql_fetch_array($query);
   
   if ($line[0] == 0)
   {
   print('

<FORM name="form1" action="modificaformazione2.php" method="POST">
<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">

<TR>
  <TD width="50%" align="right">
    seleziona la squadra:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="squadra">
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
');

  $sql = "SELECT MAX(numero) FROM fantagiornate";
  $query = mysql_query($sql) or die(errore());
  $line = mysql_fetch_array($query);
  $max_fantagiornata = $line[0];

  print('
  <TR>
  <TD width="50%" align="right">
    fantagiornata:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="fantagiornata" maxlength="20" alt="fantagiornata" align="left" value="' . $max_fantagiornata . '" readonly>
  </TD>
  </TR>
  ');
print('
<TR>
  <TD width="50%" align="right">
    schema iniziale:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="schema">
              <OPTION selected value="3-4-3">3-4-3</OPTION>
	      <OPTION value="3-5-2">3-5-2</OPTION>
	      <OPTION value="4-5-1">4-5-1</OPTION>
	      <OPTION value="4-4-2">4-4-2</OPTION>
	      <OPTION value="4-3-3">4-3-3</OPTION>
	      <OPTION value="5-4-1">5-4-1</OPTION>
	      <OPTION value="5-3-2">5-3-2</OPTION>
   </SELECT>
  </TD>
</TR>

</TABLE>

<P align="center"><INPUT type="submit" name="modifica" value="modifica" alt="modifica"></P>

</FORM>

<FORM name="form2" action="modificaformazione_lock.php" method="POST">
<P align="center"><br><br><FONT size="+2">Blocca le modifiche alle formazioni</FONT></P>
<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD width="50%" align="right">password di amministratore:</TD>
  <TD width="50%" align="left"><INPUT type="password" name="password" maxlength="20" alt="password" align="left"></TD>
</TR>
</TABLE>
 <P align="center"><INPUT type="submit" name="lock" value="lock" alt="lock"></P>
</FORM>
');
}
else
{
print('
<FORM name="form2" action="modificaformazione_unlock.php" method="POST">
<P align="center"><br><br><FONT size="+2">Sblocca le modifiche alle formazioni</FONT><br>Questa pagina è momentaneamente bloccata dall\'amministratore</P>
<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD width="50%" align="right">password di amministratore:</TD>
  <TD width="50%" align="left"><INPUT type="password" name="password" maxlength="20" alt="password" align="left"></TD>
</TR>
</TABLE>
 <P align="center"><INPUT type="submit" name="unlock" value="unlock" alt="unlock"></P>
</FORM>
');
}
?>
<?
  require "down.php"
?>
