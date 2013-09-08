<?
  require "dbvariabili.php";
  require "up.php"
?>

<P ALIGN=CENTER STYLE="font-style: normal; text-decoration: none; page-break-before: always">
<FONT FACE="Lucidasans"><FONT SIZE=4><B>Dizionario dei dati</B></FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<BR>
</P>
<P ALIGN=JUSTIFY STYLE="font-weight: medium"><FONT FACE="Lucidasans"><FONT SIZE=2><I><U>Tabella
entit&agrave;:</U></I></FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<BR><BR>
</P>
<TABLE WIDTH=100% BORDER=1 BORDERCOLOR="#000000" CELLPADDING=4 CELLSPACING=0>
	<COL WIDTH=64*>
	<COL WIDTH=64*>
	<COL WIDTH=64*>
	<COL WIDTH=64*>
	<THEAD>
		<TR VALIGN=TOP>
			<TH WIDTH=25%>
				<P ALIGN=CENTER STYLE="font-style: normal; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2><B>NOME</B></FONT></FONT></P>
			</TH>
			<TH WIDTH=25%>
				<P ALIGN=CENTER STYLE="font-style: normal; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2><B>DESCRIZIONE</B></FONT></FONT></P>
			</TH>
			<TH WIDTH=25%>
				<P ALIGN=CENTER STYLE="font-style: normal; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2><B>ATTRIBUTI</B></FONT></FONT></P>
			</TH>
			<TH WIDTH=25%>
				<P ALIGN=CENTER STYLE="font-style: normal; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2><B>CHIAVE</B></FONT></FONT></P>
			</TH>
		</TR>
	</THEAD>
	<TBODY>
		<TR VALIGN=TOP>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Giocatori</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2 STYLE="font-size: 9pt">Informazioni
				relative ai giocatori.</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2 STYLE="font-size: 9pt">Da
				notare che l'attributo &ldquo;Squadra&rdquo; &egrave; riferito
				alla vera squadra di appartenenza del giocatore e non alla
				fantasquadra.</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Nome</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Cognome</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Ruolo</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Valore</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Squadra</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Codice</FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Fantagiornata</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2 STYLE="font-size: 9pt">Contiene
				tutte le fantagiornate gi&agrave; giocate.</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<BR>
				</P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Numero</FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Fantasquadra</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2 STYLE="font-size: 9pt">Informazioni
				sulle fantasquadre che giocano il fantacampionato.</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Fantallenatore</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Password</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Maglietta</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Fantacrediti</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Punti</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Nome</FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Formazioni</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2 STYLE="font-size: 9pt">Informazioni
				sulla formazione schierata da una fantasquadra ad ogni
				fantagiornata.</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Schema</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Codice</FONT></FONT></P>
			</TD>
		</TR>
	</TBODY>
</TABLE>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<BR><BR>
</P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<BR><BR>
</P>
<P ALIGN=JUSTIFY STYLE="font-weight: medium"><FONT FACE="Lucidasans"><FONT SIZE=2><I><U>Tabella
relazioni:</U></I></FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<BR><BR>
</P>
<TABLE WIDTH=100% BORDER=1 BORDERCOLOR="#000000" CELLPADDING=4 CELLSPACING=0>
	<COL WIDTH=64*>
	<COL WIDTH=64*>
	<COL WIDTH=64*>
	<COL WIDTH=64*>
	<THEAD>
		<TR VALIGN=TOP>
			<TH WIDTH=25%>
				<P ALIGN=CENTER STYLE="font-style: normal; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2><B>NOME</B></FONT></FONT></P>
			</TH>
			<TH WIDTH=25%>
				<P ALIGN=CENTER STYLE="font-style: normal; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2><B>DESCRIZIONE</B></FONT></FONT></P>
			</TH>
			<TH WIDTH=25%>
				<P ALIGN=CENTER STYLE="font-style: normal; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2><B>ATTRIBUTI</B></FONT></FONT></P>
			</TH>
			<TH WIDTH=25%>
				<P ALIGN=CENTER STYLE="font-style: normal; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2><B>ENTITA' COINVOLTE</B></FONT></FONT></P>
			</TH>
		</TR>
	</THEAD>
	<TBODY>
		<TR VALIGN=TOP>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Risultato</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2 STYLE="font-size: 9pt">Per
				ogni fantagiornata associa informazioni sui giocatori relative al
				loro andamento.</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Voto</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Goalfatti</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Assist</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Rigorisbagliati</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Autorete</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Espulsione</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Ammonizioni</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Rigoreparato</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Goalsubiti</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Fantagiornata (0,M)</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Giocatori (0,N)</FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Fantacontratto</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2 STYLE="font-size: 9pt">Stabilisce
				i giocatori appartenenti ad una fantasquadra.</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<BR>
				</P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Fantasquadra (18,18)</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Giocatori (0,1)</FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Schiera</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2 STYLE="font-size: 9pt">Associa
				una formazione schierata da una fantasquadra ad ogni
				fantagiornata.</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<BR>
				</P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Fantagiornata (0,P)</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Fantasquadra (0,34)</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Formazioni (P,Q)</FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Giocare</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2 STYLE="font-size: 9pt">Associa
				15 giocatori per ogni formazione.</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Riserva</FONT></FONT></P>
			</TD>
			<TD WIDTH=25%>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Formazioni (15,15)</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-style: normal; font-weight: medium; text-decoration: none">
				<FONT FACE="Lucidasans"><FONT SIZE=2>Giocatori (0,1)</FONT></FONT></P>
			</TD>
		</TR>
	</TBODY>
</TABLE>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<BR><BR>
</P>

<?
  require "down.php"
?>
