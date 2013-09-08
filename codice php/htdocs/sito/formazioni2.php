<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Visualizza Formazione
<?
  echo " " . $_POST["idsquadra"];
?>

</FONT><br></p>

<TABLE align="center" border="1" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD><p align="center"><FONT size="+1"><strong>Codice</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Nome</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Cognome</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Ruolo</strong></FONT></p></TD>
  <TD><p align="center"><FONT size="+1"><strong>Note</strong></FONT></p></TD>
</TR>

<?
  if (isset($_POST["idsquadra"]))
  {
    $flag=0;
    $fantagiornata = $_POST["fantagiornata"];
    $idsquadra = $_POST["idsquadra"];
    $sql = "SELECT giocatori.codice,giocatori.nome,giocatori.cognome,giocatori.ruolo,giocare.riserva FROM schiera,formazioni,giocare,giocatori WHERE schiera.fantagiornata=$fantagiornata AND schiera.fantasquadra='$idsquadra' AND formazioni.codice=schiera.formazione AND giocare.formazione=schiera.formazione AND giocatori.codice=giocare.giocatore ORDER BY giocatori.ruolo DESC, giocare.riserva ASC";
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
        print ("<td>$line[0]</td> <td>$line[1]</td> <td>$line[2]</td> <td>$line[3]</td> <td>");
	$line[4] == 0 ? print("titolare") : print("riserva");
        print ("</td></tr>");
      }
    }
  }
  else
  {
    $flag=1;
  }
  
?>

</TABLE>

<?
  if ($flag)
  {
    print ('<p align="left">Nessuna squadra selezionata!</p>');
  }
?>


<?
  require "down.php"
?>
