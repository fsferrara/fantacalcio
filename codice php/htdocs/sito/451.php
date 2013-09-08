<?
$j=1;

for ( $i=1 ; $i <= 2 ; $i=$i+1 )
{
  $sql = "SELECT codice,cognome,nome FROM giocatori WHERE fantasquadra='$squadra' AND giocatori.ruolo='portiere' ORDER BY cognome";
  $query = mysql_query($sql) or die(errore());
  print ("
    <TR>
      <TD width=\"50%\" align=\"right\">
        portiere $i :
      </TD>
      <TD width=\"50%\" align=\"left\">
        
        <SELECT name=\"g$j\">
  ");     
  $j = $j + 1;
  while ($line = mysql_fetch_array($query,MYSQL_NUM))
  {
    print "<OPTION value=\"$line[0]\">($line[0]) $line[1] $line[2]</OPTION>";
  }
  print ('    
        </SELECT>    
      </TD>
    </TR>
  '); 
}


for ( $i=1 ; $i <= 5 ; $i=$i+1 )
{
  $sql = "SELECT codice,cognome,nome FROM giocatori WHERE fantasquadra='$squadra' AND giocatori.ruolo='difensore' ORDER BY cognome";
  $query = mysql_query($sql) or die(errore());
  print ("
    <TR>
      <TD width=\"50%\" align=\"right\">
        difensore $i :
      </TD>
      <TD width=\"50%\" align=\"left\">
        
        <SELECT name=\"g$j\">
  ");     
  $j = $j + 1;
  while ($line = mysql_fetch_array($query,MYSQL_NUM))
  {
    print "<OPTION value=\"$line[0]\">($line[0]) $line[1] $line[2]</OPTION>";
  }
  print ('    
        </SELECT>    
      </TD>
    </TR>
  '); 
}


for ( $i=1 ; $i <= 6 ; $i=$i+1 )
{
  $sql = "SELECT codice,cognome,nome FROM giocatori WHERE fantasquadra='$squadra' AND giocatori.ruolo='centrocampista' ORDER BY cognome";
  $query = mysql_query($sql) or die(errore());
  print ("
    <TR>
      <TD width=\"50%\" align=\"right\">
        centrocampista $i :
      </TD>
      <TD width=\"50%\" align=\"left\">
        
        <SELECT name=\"g$j\">
  ");     
  $j = $j + 1;
  while ($line = mysql_fetch_array($query,MYSQL_NUM))
  {
    print "<OPTION value=\"$line[0]\">($line[0]) $line[1] $line[2]</OPTION>";
  }
  print ('    
        </SELECT>    
      </TD>
    </TR>
  '); 
}


for ( $i=1 ; $i <= 2 ; $i=$i+1 )
{
  $sql = "SELECT codice,cognome,nome FROM giocatori WHERE fantasquadra='$squadra' AND giocatori.ruolo='attaccante' ORDER BY cognome";
  $query = mysql_query($sql) or die(errore());
  print ("
    <TR>
      <TD width=\"50%\" align=\"right\">
        attaccante $i :
      </TD>
      <TD width=\"50%\" align=\"left\">
        
        <SELECT name=\"g$j\">
  ");     
  $j = $j + 1;
  while ($line = mysql_fetch_array($query,MYSQL_NUM))
  {
    print "<OPTION value=\"$line[0]\">($line[0]) $line[1] $line[2]</OPTION>";
  }
  print ('    
        </SELECT>    
      </TD>
    </TR>
  '); 
}
?>