<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<HTML>

<HEAD>
  <TITLE>Gestione Di Un Campionato Di Fantacalcio</TITLE>
  <META name="keywords" content="fantacalcio torneo">
  <META name="description" content="Gestione di un campionato di fantacalcio in php e mysql">
  <META name="GENERATOR" content="Quanta">
  <META name="author" content="Francesco Saverio Ferrara">
  
<!-- INIZIO SCRIPT MENU - PARTE PRIMA -->

<style type="text/css">

.bar { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: #FFFFFF; vertical-align: middle; font-weight: bold; text-decoration:none;}
.stbar { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: #FFFFFF; vertical-align: middle; text-decoration:none;}

</style>


<script language="JavaScript">

/* ****** Sezione personalizzabile ******* */

var QM=4;   // quanti menu 

var AM=18; // altezza dei menu

var qV1 = 6; // Quante Voci per la tendina 1
var qV2 = 4; // Quante Voci per la tendina 2
var qV3 = 2; // ecc.
var qV4 = 5;
var qV5 = 10;
var qV6 = 10;
var qV7 = 9;
var qV8 = 6;
var qV9 = 6;
var qV10 =6;
// in teoria ne regge fino a 99, eventualmente va allungato l'array TND (tendine). Pero', che me ne faccio di 99 menu?

var LT= new Array();
LT[0]=0;
LT[1]=238; // Larghezza Tendina 1 
LT[2]=238; // Larghezza Tendina 2
LT[3]=238; // ecc.
LT[4]=238;
LT[5]=160;
LT[6]=160;
LT[7]=160;


var tC=500; //  tempo di chiusura tendina dopo il mouseover
var tso=30; //  tempo di successione scomparsa fra una voce e l'altra
var cMZ="#07004F";        // colore menu "zero", cioe', quello che costituisce la barra
var cOmZ="blue";      // colore menu zero al mouseOver
var cVM="#07004F";      // colore voci menu  
var cOV="blue";     // colore voci al mouseOver

var aTb="center"     // allineamento testo menu barra (possibilita': left, center, right) 
var aTv="center"    // allineamento testo voci menu (come sopra)

var CspB=0;        // cellspacing (table barra)
var CpdB=0;       // cellpadding (table barra)
var BrdB=0;      // border (table barra)

var CspV=0;        // cellspacing (table voci)
var CpdV=0;       // cellpadding (table voci)
var BrdV=0;      // border (table voci)

var dA=110;    // distanza dall'alto
var dsxP=14; // distanza da sx del Primo Menu
var dMo=6;  // distanza fra un menu e l'altro in orizzontale
var dMv=2; // distanza fra un menu e l'altro in verticale

var Voci= new Array();
Voci[0]=0;
Voci[1]=new Array('Documentazione','Regolamento fantacalcio','Requisiti funzionali','Schema E/R','Dizionario dei dati','Modello logico','Business rules','menu 1 link 7','menu 1 link 8','menu 1 link 9','menu 1 link 10');
Voci[2]=new Array('Fantacampionato','Iscrizione al campionato','Classifica','Giocatori liberi sul mercato','Visualizza formazioni','menu 2 link 5','menu 2 link 6','menu 2 link 7','menu 2 link 8','menu 2 link 9','menu 2 link 10');
Voci[3]=new Array('Fantallenatore','Modificare formazione','Scambiare giocatore','menu 3 link 3','menu 3 link 4','menu 3 link 5','menu 3 link 6','menu 3 link 7','menu 3 link 8','menu 3 link 9','menu 3 link 10');
Voci[4]=new Array('Amministratore','Inserisci giocatore','Cancella giocatore','Aggiorna valore dei giocatori','Elimina fantasquadra','Inserisci i risultati della fantagiornata','menu 4 link 6','menu 4 link 7','menu 4 link 8','menu 4 link 9','menu 4 link 10');
Voci[5]=new Array('menu 5','menu 5 link 1','menu 5 link 2','menu 5 link 3','menu 5 link 4','menu 5 link 5','menu 5 link 6','menu 5 link 7','menu 5 link 8','menu 5 link 9','menu 5 link 10');
Voci[6]=new Array('menu 6','menu 6 link 1','menu 6 link 2','menu 6 link 3','menu 6 link 4','menu 6 link 5','menu 6 link 6','menu 6 link 7','menu 6 link 8','menu 6 link 9','menu 6 link 10');
Voci[7]=new Array('menu 7','menu 7 link 1','menu 7 link 2','menu 7 link 3','menu 7 link 4','menu 7 link 5','menu 7 link 6','menu 7 link 7','menu 7 link 8','menu 7 link 9','menu 7 link 10');

var Link=new Array();
Link[0]=0;
Link[1]=new Array('','regolamento.php','requisiti.php','schema.php','dizionario.php','logico.php','rules.php','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm');
Link[2]=new Array('','iscrizione.php','classifica.php','giocatori.php','formazioni.php','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm');
Link[3]=new Array('','modificaformazione.php','swapgiocatore.php','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm');
Link[4]=new Array('','insertgiocatore.php','deletegiocatore.php','updategiocatore.php','eliminasquadra.php','newfantagiornata.php','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm');
Link[5]=new Array('','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm');
Link[6]=new Array('','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm');
Link[7]=new Array('','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm','menu0link0.htm');

var Trg=new Array(); // Il link funziona SOLO se viene specificato un target. Per aprire la pag.htm nella finestra corrente scrivere 's' (sta per _self); per una nuova finestra scrivere 'b' (_blank); per un frame scrivere il 'NomeFrame'; per una popup scrivere 'p'.
Trg[0]=0;
Trg[1]=new Array('','s','s','s','s','s','s','s','s','s','s'); // relativamente al primo menu: target per link 0 (quello della voce barra), di seguito il target per i link 1, 2 , 3, ecc.
Trg[2]=new Array('','s','s','s','s','s','s','s','s','s','s'); // relativamente al secondo menu (come sopra)
Trg[3]=new Array('','s','s','s','s','s','s','s','s','s','s');
Trg[4]=new Array('','s','s','s','s','s','s','s','s','s','s');
Trg[5]=new Array('','s','s','s','s','s','s','s','s','s','s');
Trg[6]=new Array('','s','s','s','s','s','s','s','s','s','s');
Trg[7]=new Array('','s','s','s','s','s','s','s','s','s','s');


/* ****** Fine Sezione personalizzabile ******* */
/* */
/* Da qui in poi eventuali modifiche sono consigliabili solo a chi e' molto esperto di JavaScript, vi invitiamo a non */
/* intervenire se non siete sicuri di quel che fate, non vi garantiamo risposta alcuna */
/* */

var TND= new Array(qV1,qV2,qV3,qV4,qV5,qV6,qV7,qV8,qV9,qV10);


var DG=(document.getElementById);
var DL=(document.layers);
var DA=(document.all);

// le var sottostanti vanno pre-inizializzate per non creare errori

var cQV=""; // convenzionalmente Quale Voce, "convenzionalmente" significa: anziche' "barra1", scrivo barra101 o barra201 ecc.
var CmB=""; // chiudi menu Barra
var AmB=""; // apri menu Barra
var ndcB="";   // numero di comodo Barra 
var ndcQVM=""; // numero di comodo Quante Voci Menu (idem)
var cQVM="";   //
var VZ="barra100";   //

function Overa(qVOver,NumConB,quale,colOv) { // quante voci (serve per chiuderle), numero convenzionale Barra, quale voce (1,2,3, ecc), OverMenuColor
window.clearTimeout(CmB);
if(quale==0) {
for(cs=ndcQVM; cs>ndcB; cs--) {
qVcs="barra"+cs; // quali voci chiudo subito
(DA)?document.all[qVcs].style.visibility="hidden" : (DL)? document.layers[qVcs].visibility="hide" : document.getElementById(qVcs).style.visibility ="hidden";
}
for (cbg=1; cbg<=QM; cbg++) {
rip="barra"+cbg+"00";
(DA)?document.all[rip].style.background=cMZ : (DL)? document.layers[rip].bgColor=cMZ : document.getElementById(rip).style.background=cMZ; //torna colore originario
  }
}

cQV=qVOver+NumConB; 
cQm="barra"+(quale+NumConB); // convenzionalmente quale menu
if (quale==0) {
for (i=NumConB+1; i<=cQV; i++) {
qualeVoceApro="barra"+i;
(DA)?document.all[qualeVoceApro].style.visibility="visible" : (DL)? document.layers[qualeVoceApro].visibility="show" : document.getElementById(qualeVoceApro).style.visibility="visible";
   }
}
(DA)?document.all[cQm].style.background=colOv : (DL)? document.layers[cQm].bgColor=colOv : document.getElementById(cQm).style.background=colOv;
}

function outMenu(qVOut,NumConBOut) {

cQVM=cQV;
cQV=qVOut+NumConBOut;
ndcB=NumConBOut;
ndcQVM=NumConBOut+qVOut;

VZ="barra"+ndcB; // Voce Zero


for (b=NumConBOut+1; b<=cQV; b++) {
qualeVoceB="barra"+b;
(DA)?document.all[qualeVoceB].style.background=cVM : (DL)? document.layers[qualeVoceB].bgColor=cVM : document.getElementById(qualeVoceB).style.background=cVM; //torna colore originario
}
CmB=setTimeout('cB()',tC); 
}

function cB() { // chiudi barra
if (cQVM>ndcB) {
qualeVoceCh="barra"+cQVM;
(DA)?document.all[qualeVoceCh].style.visibility="hidden" : (DL)? document.layers[qualeVoceCh].visibility="hide" : document.getElementById(qualeVoceCh).style.visibility="hidden";
cQVM--;
setTimeout('cB()',tso);
} else {
(DA)?document.all[VZ].style.background=cMZ : (DL)? document.layers[VZ].bgColor=cMZ : document.getElementById(VZ).style.background=cMZ; //torna colore originario
cQVM=ndcB;
  }
}

function Vai(lnk,tg) {
if (tg=="s") {
self.location.href=lnk;
} else if (tg=="b") {
window.open(lnk,'','toolbar=yes,location=yes,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes,copyhistory=yes');
} else if (tg=="p") {
pp=window.open(lnk,'pp','toolbar=no,location=no,top=50,left=50,width=300,height=300');
pp.focus();
} else if (tg!="" && tg!="s" && tg!="b" && tg!="p") {
top[tg].location.href=lnk;
	}
}
</script>

<!-- FINE SCRIPT MENU - PARTE PRIMA -->
  
</HEAD>

<BODY onresize="if (DL) {location.reload()}" onUnload="cB();" text="Navy" alink="Red" vlink="Red" link="Red" background="../../icons/sfondo.gif">

  <TABLE align="center" border="0" cellpadding="0" cellspacing="0" width="980">
  <TR><TD>
  
   <TABLE border="0" cellpadding="0" cellspacing="0" width="980" bgcolor="Blue">
    <TR bgcolor="Blue">
     <TD bgcolor="Blue"><IMG src="../../icons/logo.png" alt="fantacalcio" width="980" height="100" align="middle" border="0"></TD>
    </TR>
   </TABLE>

<!-- INIZIO SCRIPT MENU TENDINA - PARTE 2 -->
   
<script language="javascript">
var CU = new Array(); // fra un momento aggiunge Cento Unita' all'ID di ciascun menu 
CU[0]=0;
dispD=dsxP; // diverra' "Disponi Menu a dx"
diT=0; // decide indice tendine tendine (array TND) 
for (ndc=0; ndc<QM; ndc++) { // "ndc" = numero di comodo
CU[CU.length]=CU[ndc]+100;
uni=ndc+1 // "ndc" da adesso, anziche' da zero, inizia da 1; "uni" sta per "unita'".
IDb="barra"+CU[uni]; // identificativo di ciascuna barra
dispD=dispD+dMo+LT[ndc];
ddx=dispD-dMo; // Disponi Menu a dx
qV="qV"+uni;
cu="CU["+uni+"]";


(DL)? document.writeln('<layer id="'+IDb+'" left="'+ddx+'" top="'+dA+'" width="'+LT[uni]+'" height="'+AM+'" bgcolor="'+cMZ+'" visibility="show" onmouseover="Overa('+qV+','+cu+',0,cOmZ);" onmouseout="outMenu('+qV+','+cu+');"><table width="'+LT[uni]+'" border="'+BrdB+'" cellspacing="'+CspB+'" cellpadding="'+CpdB+'" height="'+AM+'"><tr align="'+aTb+'" valign="middle"><td><a href="javascript:Vai(\''+Link[uni][0]+'\',\''+Trg[uni][0]+'\');" class="bar">'+Voci[uni][0]+'</a></td></tr></table></layer>') :                                                        document.writeln('<div id="'+IDb+'" style="position:absolute; width:'+LT[uni]+'px; height: '+AM+'px; background-color:'+cMZ+'; left: '+ddx+'px; top: '+dA+'; visibility: visible" onmouseover="Overa('+qV+','+cu+',0,cOmZ);" onmouseout="outMenu('+qV+','+cu+');" onclick="Vai(\''+Link[uni][0]+'\',\''+Trg[uni][0]+'\');"><table width="'+LT[uni]+'" border="'+BrdB+'" cellspacing="'+CspB+'" cellpadding="'+CpdB+'" height="'+AM+'"><tr align="'+aTb+'" valign="middle"><td style="cursor: pointer"><a href="#" class="bar" onFocus="this.blur();">'+Voci[uni][0]+'</a></td></tr></table></div>');

dispB=dA; // diverra' "Disponi Menu verso il Basso"
for (ndcV=0; ndcV < TND[diT]; ndcV++) { // "ndcV" = numero di comodo per le voci delle tendine.
uniV=ndcV+1 // "uniV" da adesso, anziche' da zero, inizia da 1.
IDb="barra"+(CU[uni]+uniV); // identificativo di ciascuna voce della tendina
dispB=dispB+dMv+AM; // Disponi Menu verso il Basso


(DL)? document.writeln('<layer id="'+IDb+'" left="'+ddx+'" top="'+dispB+'" width="'+LT[uni]+'" height="'+AM+'" bgcolor="'+cVM+'" visibility="hide" onmouseover="Overa('+qV+','+cu+','+uniV+',cOV);" onmouseout="outMenu('+qV+','+cu+');"><table width="'+LT[uni]+'" border="'+BrdV+'" cellspacing="'+CspV+'" cellpadding="'+CpdV+'" height="'+AM+'"><tr align="'+aTv+'" valign="middle"><td><a href="javascript:Vai(\''+Link[uni][uniV]+'\',\''+Trg[uni][uniV]+'\');" onclick="setTimeout(\'cB()\',tC);" class="stbar">'+Voci[uni][uniV]+'</a></td></tr></table></layer>') : document.writeln('<div id="'+IDb+'" style="position:absolute; width:'+LT[uni]+'px; height: '+AM+'px; background-color:'+cVM+'; left: '+ddx+'px; top: '+dispB+'; visibility: hidden" onmouseover="Overa('+qV+','+cu+','+uniV+',cOV);" onmouseout="outMenu('+qV+','+cu+');" onclick="Vai(\''+Link[uni][uniV]+'\',\''+Trg[uni][uniV]+'\');"><table width="'+LT[uni]+'" border="'+BrdV+'" cellspacing="'+CspV+'" cellpadding="'+CpdV+'" height="'+AM+'"><tr align="'+aTv+'" valign="middle"><td style="cursor: pointer"><a href="#" class="stbar" onFocus="this.blur();">'+Voci[uni][uniV]+'</a></td></tr></table></div>');
}
diT++;
}
</script>

<!-- FINE SCRIPT MENU TENDINA - PARTE 2 -->
   
  <p><br><br></p>