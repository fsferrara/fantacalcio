<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center">
<FONT size="+2">Iscrizione al Fantacampionato</FONT><br></p>

<?
   $sql = "SELECT lock_iscrizione FROM amministratore";
   $query = mysql_query($sql) or die(errore()); 
   $line = mysql_fetch_array($query);
   
   if ($line[0] == 0)
   {
   print('

<FORM name="form1" action="iscrizione2.php" method="POST">
    
<p align="center">Inserire i dati della nuova fantasquadra</p>

<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">

<TR>
  <TD width="50%" align="right">
    nome:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="nome" maxlength="20" alt="nome" align="left">
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    fantallenatore:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="fantallenatore" maxlength="20" alt="fantallenatore" align="left">
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    password:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="password" maxlength="20" alt="password" align="left">
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    colori maglietta:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="maglietta">
              <OPTION selected value="arancio_blu">arancio_blu</OPTION>
	      <OPTION value="arancio_celeste">arancio_celeste</OPTION>
	      <OPTION value="arancio_giallo">arancio_giallo</OPTION>
	      <OPTION value="arancio_nero">arancio_nero</OPTION>
	      <OPTION value="arancio_verde">arancio_verde</OPTION>
	      <OPTION value="arancio_viola">arancio_viola</OPTION>
	      <OPTION value="bianco_blu">bianco_blu</OPTION>
	      <OPTION value="bianco_celeste">bianco_celeste</OPTION>
	      <OPTION value="bianco_nero">bianco_nero</OPTION>
	      <OPTION value="bianco_rosso">bianco_rosso</OPTION>
	      <OPTION value="blu_arancio">blu_arancio</OPTION>
	      <OPTION value="blu_bianco">blu_bianco</OPTION>
	      <OPTION value="blu_giallo">blu_giallo</OPTION>
	      <OPTION value="blu_nero">blu_nero</OPTION>
	      <OPTION value="blu_rosa">blu_rosa</OPTION>
	      <OPTION value="blu_verde">blu_verde</OPTION>
	      <OPTION value="celeste_blu">celeste_blu</OPTION>
	      <OPTION value="celeste_rosa">celeste_rosa</OPTION>
	      <OPTION value="giallo_blu">giallo_blu</OPTION>
	      <OPTION value="giallo_rosso">giallo_rosso</OPTION>
	      <OPTION value="giallo_verde">giallo_verde</OPTION>
	      <OPTION value="granata_celeste">granata_celeste</OPTION>
	      <OPTION value="granata_rosso">granata_rosso</OPTION>
	      <OPTION value="grigio_bianco">grigio_bianco</OPTION>
	      <OPTION value="grigio_giallo">grigio_giallo</OPTION>
	      <OPTION value="grigio_viola">grigio_viola</OPTION>
	      <OPTION value="nero_arancio">nero_arancio</OPTION>
	      <OPTION value="nero_blu">nero_blu</OPTION>
	      <OPTION value="nero_grigio">nero_grigio</OPTION>
	      <OPTION value="nero_verde">nero_verde</OPTION>
	      <OPTION value="rosa_giallo">rosa_giallo</OPTION>
	      <OPTION value="rosa_nero">rosa_nero</OPTION>
	      <OPTION value="rosso_arancio">rosso_arancio</OPTION>
	      <OPTION value="rosso_blu">rosso_blu</OPTION>
	      <OPTION value="rosso_giallo">rosso_giallo</OPTION>
	      <OPTION value="verde_arancio">verde_arancio</OPTION>
	      <OPTION value="verde_bianco">verde_bianco</OPTION>
	      <OPTION value="verde_giallo">verde_giallo</OPTION>
	      <OPTION value="verde_granata">verde_granata</OPTION>
	      <OPTION value="verde_nero">verde_nero</OPTION>
	      <OPTION value="verde_viola">verde_viola</OPTION>
	      <OPTION value="viola_bianco">viola_bianco</OPTION>
	      <OPTION value="viola_blu">viola_blu</OPTION>
	      <OPTION value="viola_nero">viola_nero</OPTION>
	      <OPTION value="viola_verde">viola_verde</OPTION>
    </SELECT>
  </TD>
</TR>
');
for ( $i=1 ; $i <= 2 ; $i=$i+1 )
{
  $sql = "SELECT codice,cognome,nome,valore FROM giocatori WHERE ISNULL(giocatori.fantasquadra) AND giocatori.ruolo='portiere' ORDER BY cognome";
  $query = mysql_query($sql) or die(errore());
  print ("
    <TR>
      <TD width=\"50%\" align=\"right\">
        portiere $i :
      </TD>
      <TD width=\"50%\" align=\"left\">
        
        <SELECT name=\"portiere$i\">
  ");     
  while ($line = mysql_fetch_array($query,MYSQL_NUM))
  {
    print "<OPTION value=\"$line[0]\">($line[0]) $line[1] $line[2] -- $line[3] fantacrediti</OPTION>";
  }
  print ('    
        </SELECT>    
      </TD>
    </TR>
  '); 
}

for ( $i=1 ; $i <= 6 ; $i=$i+1 )
{
  $sql = "SELECT codice,cognome,nome,valore FROM giocatori WHERE ISNULL(giocatori.fantasquadra) AND giocatori.ruolo='difensore' ORDER BY cognome";
  $query = mysql_query($sql) or die(errore());
  print ("
    <TR>
      <TD width=\"50%\" align=\"right\">
        difensore $i :
      </TD>
      <TD width=\"50%\" align=\"left\">
        
        <SELECT name=\"difensore$i\">
  ");     
  while ($line = mysql_fetch_array($query,MYSQL_NUM))
  {
    print "<OPTION value=\"$line[0]\">($line[0]) $line[1] $line[2] -- $line[3] fantacrediti</OPTION>";
  }
  print ('    
        </SELECT>    
      </TD>
    </TR>
  '); 
}

for ( $i=1 ; $i <= 6 ; $i=$i+1 )
{
  $sql = "SELECT codice,cognome,nome,valore FROM giocatori WHERE ISNULL(giocatori.fantasquadra) AND giocatori.ruolo='centrocampista' ORDER BY cognome";
  $query = mysql_query($sql) or die(errore());
  print ("
    <TR>
      <TD width=\"50%\" align=\"right\">
        centrocampista $i :
      </TD>
      <TD width=\"50%\" align=\"left\">
        
        <SELECT name=\"centrocampista$i\">
  ");     
  while ($line = mysql_fetch_array($query,MYSQL_NUM))
  {
    print "<OPTION value=\"$line[0]\">($line[0]) $line[1] $line[2] -- $line[3] fantacrediti</OPTION>";
  }
  print ('    
        </SELECT>    
      </TD>
    </TR>
  '); 
}

for ( $i=1 ; $i <= 4 ; $i=$i+1 )
{
  $sql = "SELECT codice,cognome,nome,valore FROM giocatori WHERE ISNULL(giocatori.fantasquadra) AND giocatori.ruolo='attaccante' ORDER BY cognome";
  $query = mysql_query($sql) or die(errore());
  print ("
    <TR>
      <TD width=\"50%\" align=\"right\">
        attaccante $i :
      </TD>
      <TD width=\"50%\" align=\"left\">
        
        <SELECT name=\"attaccante$i\">
  ");     
  while ($line = mysql_fetch_array($query,MYSQL_NUM))
  {
    print "<OPTION value=\"$line[0]\">($line[0]) $line[1] $line[2] -- $line[3] fantacrediti</OPTION>";
  }
  print ('    
        </SELECT>    
      </TD>
    </TR>
  '); 
}
print(' 
</TABLE>
 <P align="center"><INPUT type="submit" name="invia" value="invia" alt="invia">&nbsp;<INPUT type="reset" name="pulisci" value="pulisci" alt="pulisci"></P>
</FORM>

<FORM name="form2" action="iscrizione_lock.php" method="POST">
<P align="center"><br><br><FONT size="+2">Blocca le iscrizioni</FONT></P>
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
<FORM name="form2" action="iscrizione_unlock.php" method="POST">
<P align="center"><br><br><FONT size="+2">Sblocca le iscrizioni</FONT><br>Questa pagina è momentaneamente bloccata dall\'amministratore</P>
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
