<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center">
<FONT size="+2">Aggiornamento Giocatore</FONT><br></p>

<?
  
 $idgiocatore = $_POST["idgiocatore"];
 
 $sql = "SELECT * FROM `giocatori` WHERE codice = '$idgiocatore'";
 $query = mysql_query($sql) or die(errore());
 $righe_infette = mysql_affected_rows($connessione);
 if ($righe_infette == 0)
 {
   echo "Nessun giocatore presente con quel nome.<br>";
 }
 else
 {
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

mysql_data_seek($query,0);
$row = mysql_fetch_row($query);

print ('
<FORM name="form1" action="updategiocatore3.php" method="POST">

<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">
<TR>
  <TD width="50%" align="right">password di amministratore:</TD>
  <TD width="50%" align="left"><INPUT type="password" name="password" maxlength="20" alt="password" align="left"></TD>
</TR>
</TABLE>


    
    <p align="center">Inserire i dati del giocatore</p>

<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">

<TR>
  <TD width="50%" align="right">
    codice:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="codice" maxlength="20" alt="codice" align="left" value="' . $idgiocatore . '" readonly>
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    nome:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="nome" maxlength="20" alt="nome" align="left" value="' . $row[1] . '">
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    cognome:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="cognome" maxlength="20" alt="cognome" align="left" value="' . $row[2] . '">
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    ruolo:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="ruolo" maxlength="20" alt="ruolo" align="ruolo" value="' . $row[3] . '" readonly>
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    valore:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="valore">
              <OPTION selected value="' . $row[4] . '">' . $row[4] . '</OPTION>
');
	        for ( $i=1 ; $i<184 ; $i=$i+1 )
		{
		  echo "<OPTION value=\"" . $i ."\">" . $i . "</OPTION>";
		}

print ('    
    </SELECT>
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    squadra reale:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="squadra" maxlength="20" alt="squadra" align="left" value="' . $row[5] . '">
  </TD>
</TR>

</TABLE>
 <P align="center"><INPUT type="submit" name="invia" value="invia" alt="invia">&nbsp;<INPUT type="reset" name="pulisci" value="pulisci" alt="pulisci"></P>
</FORM>
');

//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    
 }
?>

<?
  require "down.php"
?>
