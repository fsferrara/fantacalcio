<?
  require "dbvariabili.php";
  require "up.php"
?>

<P ALIGN=CENTER STYLE="font-style: normal; text-decoration: none; page-break-before: always">
<FONT FACE="Lucidasans"><FONT SIZE=4><B>Schema
Relazionale</FONT></FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=LEFT><FONT FACE="Times, serif">Lo schema E/R </FONT>&egrave;
stato tradotto nelle seguenti tabelle:</P>
<P ALIGN=LEFT><FONT SIZE=2>giocatori(<U>codice</U>, nome, cognome,
ruolo, valore, squadra)</FONT></P>
<P ALIGN=LEFT><FONT SIZE=2>fantasquadre<SPAN STYLE="text-decoration: none">(</SPAN><U>nome</U><SPAN STYLE="text-decoration: none">,
fantallenatore, password, maglietta, fantacrediti, punti)</SPAN></FONT></P>
<P ALIGN=LEFT><FONT SIZE=2>fantagiornate(<U>numero</U>)</FONT></P>
<P ALIGN=LEFT STYLE="text-decoration: none"><FONT SIZE=2>formazioni(<U>codice</U>,
schema)</FONT></P>
<P ALIGN=LEFT><FONT SIZE=2>risultato(giocatore<FONT FACE="Bitstream Charter">&deg;</FONT>,
fantagiornata<FONT FACE="Bitstream Charter">&sup2;</FONT>, voto,
goalfatti, assist, rigorisbagliati, autoreti, espulsione,
ammonizioni, rigoriparati, goalsubiti)</FONT></P>
<P ALIGN=LEFT><FONT SIZE=2>fantacontratto(fantasquadra<FONT FACE="Bitstream Charter">&sup1;</FONT>,
giocatore<FONT FACE="Bitstream Charter">&deg;</FONT>)</FONT></P>
<P ALIGN=LEFT><FONT SIZE=2>giocare(formazione<FONT FACE="Bitstream Charter">&sup3;</FONT>,
giocatore<FONT FACE="Bitstream Charter">&deg;</FONT>)</FONT></P>
<P ALIGN=LEFT><FONT SIZE=2>schiera(fantagiornata<FONT FACE="Bitstream Charter">&sup2;</FONT>,
fantasquadra<FONT FACE="Bitstream Charter">&sup1;</FONT>,
formazione<FONT FACE="Bitstream Charter">&sup3;</FONT>)</FONT></P>
<P ALIGN=LEFT><BR><BR>
</P>
<P ALIGN=LEFT><FONT FACE="Bitstream Charter"><FONT SIZE=2>&deg;
chiave esterna per &ldquo;giocatori(codice)&rdquo;<BR>&sup1; chiave
esterna per &ldquo;fantasquadre(nome)&rdquo;<BR>&sup2; chiave esterna
per &ldquo;fantagiornate(numero)&rdquo;<BR>&sup3; chiave esterna per
&ldquo;formazioni(codice)&rdquo;</FONT></FONT></P>
<P ALIGN=LEFT><BR><BR>
</P>

<?
  require "down.php"
?>
