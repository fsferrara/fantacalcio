<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center">
<FONT size="+2">Inserisci Giocatore</FONT><br></p>

<FORM name="form1" action="insertgiocatore2.php" method="POST">

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
    nome:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="nome" maxlength="20" alt="nome" align="left">
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    cognome:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="cognome" maxlength="20" alt="cognome" align="left">
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    ruolo:
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

<TR>
  <TD width="50%" align="right">
    valore:
  </TD>
  <TD width="50%" align="left">
    <SELECT name="valore">
              <OPTION selected value="1">1</OPTION>
	      <?
	        for ( $i=2 ; $i<184 ; $i=$i+1 )
		{
		  echo "<OPTION value=\"" . $i ."\">" . $i . "</OPTION>";
		}
	      ?>
    </SELECT>
  </TD>
</TR>

<TR>
  <TD width="50%" align="right">
    squadra reale:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="squadra" maxlength="20" alt="squadra" align="left">
  </TD>
</TR>

</TABLE>
 <P align="center"><INPUT type="submit" name="invia" value="invia" alt="invia">&nbsp;<INPUT type="reset" name="pulisci" value="pulisci" alt="pulisci"></P>
</FORM>

<?
  require "down.php"
?>
