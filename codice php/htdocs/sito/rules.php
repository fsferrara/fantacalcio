<?
  require "dbvariabili.php";
  require "up.php"
?>

<P ALIGN=CENTER STYLE="font-style: normal; text-decoration: none; page-break-before: always">
<FONT FACE="Lucidasans"><FONT SIZE=4><B>Business rules</B></FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<BR>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>Un giocatore che compare
schierato in una formazione <B>NON DEVE</B> essere cancellato dalla
tabella &ldquo;giocatori&rdquo;.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<BR>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>Un giocatore che ha avuto almeno
una valutazione in una qualsiasi fantagionata <B>NON DEVE</B> essere
cancellato dalla tabella &ldquo;giocatori&rdquo;.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<BR>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>Un giocatore che appartiene ad
una fantasquadra <B>NON DEVE</B> essere cancellato dalla tabella
&ldquo;giocatori&rdquo;.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<BR>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>L'attributo &ldquo;punti&rdquo;
della tabella &ldquo;fantasquadre&rdquo; <B>SI OTTIENE</B> sommando
ai vecchi punti tutti quelli ottenuti dai giocatori schierati in
campo durante la fantagiornata seguendo le regole del fantacalcio.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<BR>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>L'attributo &ldquo;fantacrediti&rdquo;
della tabella &ldquo;fantasquadre&rdquo; <B>SI OTTIENE</B> sottraendo
al massimo dei fantacrediti (200) i valori dei 18 giocatori
appartenente alla fantasquadra.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<BR>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>L'attributo &ldquo;fantacrediti&rdquo;
della tabella &ldquo;fantasquadre&rdquo; <B>DEVE</B> essere maggiore
o uguale a 0 e minore o uguale a 200.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<BR>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in"><FONT SIZE=2><FONT FACE="Lucidasans"><SPAN STYLE="text-decoration: none"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: medium">L'attributo
&ldquo;valore&rdquo; della tabella &ldquo;giocatori&rdquo; </SPAN><B>DEVE</B><SPAN STYLE="font-weight: medium">
essere maggiore di 0 e minore o uguale a 183</SPAN></SPAN></SPAN>.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in"><FONT SIZE=2><FONT FACE="Lucidasans">L'attributo
&ldquo;numero&rdquo; della tabella &ldquo;fantagiornate&rdquo; <B>DEVE</B>
essere maggiore di 0 e minore o uguale a 34; inoltre deve essere un
campo ad incremento in quanto serve a numerare le 34 giorante del
fantacampionato.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in"><FONT FACE="Lucidasans"><FONT SIZE=2>Un
fantallenatore nella scelta dei giocatori da acquistare <B>DEVE</B>
scegliere esattemente 18 giocatori tra cui 2 portieri, 6 difensori, 6
centrocampisti, 4 attaccanti.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in"><BR>
</P>

<?
  require "down.php"
?>
