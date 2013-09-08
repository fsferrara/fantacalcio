<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Giocatori appartenenti a nessuna fantasquadra</FONT><br></p>

<p align="center"><FONT size="+1"><br>Portieri</FONT></p>
<TABLE align="center" border="1" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD><p align="center"><FONT size="+1"><strong>Codice</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Nome</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Cognome</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Ruolo</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Valore</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Squadra</strong></FONT></p></TD>
</TR>

<?
  $flag = 0;
  $sql = "SELECT codice,nome,cognome,ruolo,valore,squadra FROM giocatori WHERE ISNULL(giocatori.fantasquadra) AND ruolo='portiere' ORDER BY cognome";
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
    foreach ($line as $campo)
    {
      print ("<td>$campo</td>");
    }
    print ("</tr>");
   }
  }
  
?>

</TABLE>

<?
  if ($flag)
  {
    print ('<p align="left">Nessun portiere libero esistente sul mercato!</p>');
  }
?>


<p align="center"><FONT size="+1"><br>Difensori</FONT></p>
<TABLE align="center" border="1" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD><p align="center"><FONT size="+1"><strong>Codice</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Nome</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Cognome</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Ruolo</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Valore</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Squadra</strong></FONT></p></TD>
</TR>

<?
  $flag = 0;
  $sql = "SELECT codice,nome,cognome,ruolo,valore,squadra FROM giocatori WHERE ISNULL(giocatori.fantasquadra) AND ruolo='difensore' ORDER BY cognome";
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
    foreach ($line as $campo)
    {
      print ("<td>$campo</td>");
    }
    print ("</tr>");
   }
  }
  
?>

</TABLE>

<?
  if ($flag)
  {
    print ('<p align="left">Nessun difensore libero esistente sul mercato!</p>');
  }
?>

<p align="center"><FONT size="+1"><br>Centrocampisti</FONT></p>
<TABLE align="center" border="1" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD><p align="center"><FONT size="+1"><strong>Codice</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Nome</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Cognome</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Ruolo</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Valore</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Squadra</strong></FONT></p></TD>
</TR>

<?
  $flag = 0;
  $sql = "SELECT codice,nome,cognome,ruolo,valore,squadra FROM giocatori WHERE ISNULL(giocatori.fantasquadra) AND ruolo='centrocampista' ORDER BY cognome";
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
    foreach ($line as $campo)
    {
      print ("<td>$campo</td>");
    }
    print ("</tr>");
   }
  }
  
?>

</TABLE>

<?
  if ($flag)
  {
    print ('<p align="left">Nessun centrocampista libero esistente sul mercato!</p>');
  }
?>

<p align="center"><FONT size="+1"><br>Attaccanti</FONT></p>
<TABLE align="center" border="1" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD><p align="center"><FONT size="+1"><strong>Codice</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Nome</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Cognome</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Ruolo</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Valore</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Squadra</strong></FONT></p></TD>
</TR>

<?
  $flag = 0;
  $sql = "SELECT codice,nome,cognome,ruolo,valore,squadra FROM giocatori WHERE ISNULL(giocatori.fantasquadra) AND ruolo='attaccante' ORDER BY cognome";
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
    foreach ($line as $campo)
    {
      print ("<td>$campo</td>");
    }
    print ("</tr>");
   }
  }
  
?>

</TABLE>

<?
  if ($flag)
  {
    print ('<p align="left">Nessun attaccante libero esistente sul mercato!</p>');
  }
?>

<?
  require "down.php"
?>
