<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Classifica del Fantacampionato</FONT><br></p>

<TABLE align="center" border="1" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD><p align="center"><FONT size="+1"><strong>Maglietta</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Fantasquadra</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Fantallenatore</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Punti</strong></FONT></p></TD>
</TR>

<?
  $flag = 0;
  $sql = "SELECT maglietta,nome,fantallenatore,punti FROM fantasquadre ORDER BY punti DESC";
  $query = mysql_query($sql) or die(errore());
  $righe_infette = mysql_affected_rows($connessione);
  if ( $righe_infette == 0 )
  {
   $flag = 1;
  }
  else
  {
   while ($line = mysql_fetch_array($query,MYSQL_NUM))
   {
    print ("<tr>");
    print ("<td align=\"center\"><IMG src=\"../../icons/magliette/$line[0].gif\" width=\"39\" height=\"38\" border=\"0\"></td><td>$line[1]</td><td>$line[2]</td><td>$line[3]</td>");
    print ("</tr>");
   }
  }
  
?>

</TABLE>

<?
  if ($flag)
  {
    print ('<p align="left">Nessuna squadra iscritta al campionato!</p>');
  }
?>

<?
  require "down.php"
?>
