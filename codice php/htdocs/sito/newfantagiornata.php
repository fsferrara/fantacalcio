<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Inserire i risultati della fantagiornata</FONT><br></p>

<FORM name="form1" action="newfantagiornata2.php" method="POST">

<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">

<TR>
  <TD width="50%" align="right">password di amministratore:</TD>
  <TD width="50%" align="left"><INPUT type="password" name="password" maxlength="20" alt="password" align="left"></TD>
</TR>

<?
  $sql = "SELECT MAX(numero) FROM fantagiornate";
  $query = mysql_query($sql) or die(errore());
  $line = mysql_fetch_array($query);
  $fantagiornata = $line[0];
  
  print('
  <TR>
    <TD width="50%" align="right">
      fantagiornata:
    </TD>
    <TD width="50%" align="left">
      <INPUT type="text" name="fantagiornata" maxlength="20" alt="fantagiornata" align="left" value="' . $fantagiornata . '" readonly>
    </TD>
  </TR>    
  ');

?>

</TABLE>
<?
/*********************************  INIZIO CODICE PHP  *****************************/
    
    $sql = "SELECT codice,nome,cognome FROM giocatori WHERE fantasquadra IS NOT NULL ORDER BY cognome";
    $query = mysql_query($sql) or die(errore());
    while ($line = mysql_fetch_row($query))
    {
      print ('<br>
      <TABLE border="1" cellpadding="1" cellspacing="1" width="100%">
      
      <TR>
        <TD align="left">
          <FONT size="-1">giocatore</FONT>
        </TD>
        <TD align="left">
          <FONT size="-1">voto</FONT>
        </TD>
        <TD align="left">
          <FONT size="-1">goal fatti</FONT>
        </TD>
        <TD align="left">
          <FONT size="-1">assist</FONT>
        </TD>      
        <TD align="left">
          <FONT size="-1">rigori sbagliati</FONT>
        </TD>        
	<TD align="left">
          <FONT size="-1">autoreti</FONT>
        </TD>
        <TD align="left">
          <FONT size="-1">espulsione</FONT>
        </TD>
        <TD align="left">
          <FONT size="-1">ammonizioni</FONT>
        </TD>
        <TD align="left">
          <FONT size="-1">rigori parati</FONT>
        </TD>
        <TD align="left">
          <FONT size="-1">goal subiti</FONT>
        </TD>
      </TR>
      
      <TR>
        <TD><FONT size="-1">' . $line[1] . '<br>' . $line[2] . '</FONT></TD>  
        <TD align="left">
          <SELECT name="voto' . $line[0] .'">
                    <OPTION selected value="0">SENZA VOTO</OPTION>
      ');
	        for ( $i=1 ; $i<11 ; $i=$i+1 )
		{
		  echo "<OPTION value=\"" . $i ."\">" . $i . "</OPTION>";
		}
      print ('
          </SELECT>
        </TD>
        <TD align="left">
          <SELECT name="goalfatti' . $line[0] .'">
                    <OPTION selected value="0">0</OPTION>
      ');
	        for ( $i=1 ; $i<100 ; $i=$i+1 )
		{
		  echo "<OPTION value=\"" . $i ."\">" . $i . "</OPTION>";
		}
      print ('
          </SELECT>
        </TD>
        <TD align="left">
          <SELECT name="assist' . $line[0] .'">
                    <OPTION selected value="0">0</OPTION>
      ');
	        for ( $i=1 ; $i<100 ; $i=$i+1 )
		{
		  echo "<OPTION value=\"" . $i ."\">" . $i . "</OPTION>";
		}
      print ('
          </SELECT>
        </TD>
        <TD align="left">
          <SELECT name="rigorisbagliati' . $line[0] .'">
                    <OPTION selected value="0">0</OPTION>
      ');
	        for ( $i=1 ; $i<100 ; $i=$i+1 )
		{
		  echo "<OPTION value=\"" . $i ."\">" . $i . "</OPTION>";
		}
      print ('
          </SELECT>
        </TD>
        <TD align="left">
          <SELECT name="autoreti' . $line[0] .'">
                    <OPTION selected value="0">0</OPTION>
      ');
	        for ( $i=1 ; $i<100 ; $i=$i+1 )
		{
		  echo "<OPTION value=\"" . $i ."\">" . $i . "</OPTION>";
		}
      print ('
          </SELECT>
        </TD>
        <TD align="left">
          <SELECT name="espulsione' . $line[0] .'">
                    <OPTION selected value="0">0</OPTION>
      ');
	        for ( $i=1 ; $i<2 ; $i=$i+1 )
		{
		  echo "<OPTION value=\"" . $i ."\">" . $i . "</OPTION>";
		}
      print ('
          </SELECT>
        </TD>
        <TD align="left">
          <SELECT name="ammonizioni' . $line[0] .'">
                    <OPTION selected value="0">0</OPTION>
      ');
	        for ( $i=1 ; $i<3 ; $i=$i+1 )
		{
		  echo "<OPTION value=\"" . $i ."\">" . $i . "</OPTION>";
		}
      print ('
          </SELECT>
        </TD>
        <TD align="left">
          <SELECT name="rigoriparati' . $line[0] .'">
                    <OPTION selected value="0">0</OPTION>
      ');
	        for ( $i=1 ; $i<100 ; $i=$i+1 )
		{
		  echo "<OPTION value=\"" . $i ."\">" . $i . "</OPTION>";
		}
      print ('
          </SELECT>
        </TD>
        <TD align="left">
          <SELECT name="goalsubiti' . $line[0] .'">
                    <OPTION selected value="0">0</OPTION>
      ');
	        for ( $i=1 ; $i<100 ; $i=$i+1 )
		{
		  echo "<OPTION value=\"" . $i ."\">" . $i . "</OPTION>";
		}
      print ('
          </SELECT>
        </TD>
      </TR>      
      
      
      
      </TABLE>
      ');
    }
/*********************************  FINE CODICE PHP  *****************************/
?>


</TABLE>

<P align="center"><INPUT type="submit" name="conferma" value="conferma" alt="conferma"></P>

</FORM>

<?
  require "down.php"
?>
