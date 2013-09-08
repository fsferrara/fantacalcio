<?
  require "dbvariabili.php";
  require "up.php"
?>

<p align="center"><FONT size="+2">Modifica Formazione</FONT><br></p>

<FORM name="form1" action="modificaformazione3.php" method="POST">

<TABLE border="0" cellpadding="1" cellspacing="1" width="100%">

<?
  $schema = $_POST["schema"];
  $squadra = $_POST["squadra"];
  $fantagiornata = $_POST["fantagiornata"];
  
  print('
  <TR>
  <TD width="50%" align="right">
    schema scelto:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="schema" maxlength="20" alt="schema" align="left" value="' . $schema . '" readonly>
  </TD>
  </TR>
  <TR>
  <TD width="50%" align="right">
    fantasquadra selezionata:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="squadra" maxlength="20" alt="schema" align="left" value="' . $squadra . '" readonly>
  </TD>
  </TR>
  <TR>
  <TD width="50%" align="right">
    fantagiornata selezionata:
  </TD>
  <TD width="50%" align="left">
    <INPUT type="text" name="fantagiornata" maxlength="20" alt="schema" align="left" value="' . $fantagiornata . '" readonly>
  </TD>
  </TR>
  ');
  
  switch($schema)
  {
    case "3-4-3":
      require "343.php";
      break;
    case "3-5-2":
      require "352.php";
      break;
    case "4-5-1":
      require "451.php";
      break;
    case "4-4-2":
      require "442.php";
      break;
    case "4-3-3":
      require "433.php";
      break;
    case "5-4-1":
      require "541.php";
      break;
    case "5-3-2":
      require "532.php";
      break;
  }
?>
</TABLE>
 <P align="center"><INPUT type="submit" name="modifica" value="modifica" alt="modifica"></P>
</FORM>

<?
  require "down.php"
?>
