<?
  require "dbvariabili.php";
  require "up.php"
?>

<P ALIGN=CENTER STYLE="font-style: normal; text-decoration: none; page-break-before: always">
<FONT FACE="Lucidasans"><FONT SIZE=4><B>Descrizione testuale del
sistema</B></FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
<BR>
</P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>Gli elementi da gestire sono:
giocatori, fantasquadra, fantagiornata, e formazioni.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<BR><BR>
</P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>Il sistema terr&agrave; conto di
tutti i giocatori esistenti sul fantamercato, e per ogni giocatore
appartenente a una fantasquadra associa un voto ad ogni
fantagiornata.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>Il database gestir&agrave; i
dati di ogni fantasquadra, e sar&agrave; possibile interrogarlo per
conoscere la formazione schierata da una fantagiornata in una
qualsiasi giornata.</FONT></FONT></P>
<P ALIGN=JUSTIFY><BR><BR>
</P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>Non c&rsquo;&egrave; un numero
fissato di fantasquadre, ma ce ne possono essere un numero a piacere
a patto che esse non condividano giocatori.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>Ogni fantasquadra &egrave;
individuata unicamente da un nome e deve avere esattamente 18
giocatori, di cui 2 portieri, 6 difensori, 6 centrocampisti, e 2
attaccanti. Tuttavia durante il corso del fantacampionato si possono
scambiare i propri giocatori con quelli disponibili nel database con
lo stesso ruolo a patto che si abbiano i fantacrediti necessari.</FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<BR><BR>
</P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<BR><BR>
</P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<BR><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; font-style: normal; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=4><B>Requisiti funzionali</B></FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<BR><BR>
</P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>In ogni momento il database
potr&agrave; essere interrogato per visualizzare:</FONT></FONT></P>
<UL>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>La classifica delle
	fantagiornate;</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>I giocatori liberi sul mercato;</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>La formazione di una
	fantasquadra durante una qualsiasi fantagiornata.</FONT></FONT></P>
</UL>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<BR><BR>
</P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>Requisiti funzionali per gli
utenti:</FONT></FONT></P>
<UL>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>Iscriversi al campionato;</FONT></FONT></P>
</UL>
<UL>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>Modificare la propria
	formazione;</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>Cambiare un giocatore con un
	altro libero.</FONT></FONT></P>
</UL>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<BR><BR>
</P>
<P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
<FONT FACE="Lucidasans"><FONT SIZE=2>Requisiti funzionali per
l&rsquo;amministratore:</FONT></FONT></P>
<UL>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>Inserire un nuovo giocatore;</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>Cancellare un giocatore;</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>Aggiornare i dati di un
	giocatore;</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>Cancellare una squadra;</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>Bloccare le iscrizioni al
	campionato;</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>Sbloccare le iscrizioni al
	campionato;</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>Bloccare le modifiche alle
	formazioni e il cambio di giocatori;</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>Sbloccare le modifiche alle
	formazioni e il cambio di giocatori;</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="font-style: normal; font-weight: medium; text-decoration: none">
	<FONT FACE="Lucidasans"><FONT SIZE=2>Inserire i risultati di una
	giornata calcistica.</FONT></FONT></P>
</UL>

<?
  require "down.php"
?>
