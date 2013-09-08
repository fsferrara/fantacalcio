  <p align="center"><br><br><br>
   <hr width="100%" noshade="true" size="3" align="center" color="#07004f">
  </p> 
  
  <TABLE border="0" cellpadding="0" cellspacing="0" width="100%"><TR>
  <TD align="center" width="125"><IMG src="../../icons/l_apache.png" width="102" height="47" align="middle" border="0"></TD>
  <TD align="center" width="125"><IMG src="../../icons/l_mysql.png" width="102" height="47" align="middle" border="0"></TD>
  <TD align="center" width="125"><IMG src="../../icons/l_php.png" width="102" height="47" align="middle" border="0"></TD>
  <TD><A href="javascript:%20history.go(-1)"><IMG src="../../icons/a_back.gif" alt="back" width="60" height="40" align="right" border="0"></A></TD>
  </TR></TABLE>
  
  </TD></TR>
  </TABLE>

</BODY>

</HTML>

<?
  if ($dbtransaction == 1)
  {
    $sql = "commit";
    $query = mysql_query($sql) or die(errore());
  }
  mysql_close($connessione) or die(errore());
?>


<!-- FINE HTML - INIZIO BANNER -->

<SCRIPT language=JavaScript>
var speed = 10 
var pause = 2500 
var timerID = null
var bannerRunning = false
var ar = new Array()
ar[0] = "Gioco del Fantacalcio!!!"
ar[1] = "Powered by PHP & MYSQL"
ar[2] = "Progetto di 'Basi di Dati e Sistemi Informativi'"
ar[3] = "Scritto da Ferrara Francesco Saverio - 566/811"
var message = 0
var state = ""
clearState()

function stopBanner() {	
	if (bannerRunning)		
	clearTimeout(timerID)	
	timerRunning = false
}

function startBanner() {	
	stopBanner()	
	showBanner()
}

function clearState() {	
	state = ""	
	for (var i = 0; i < ar[message].length; ++i) {		
		state += "0"	
	}
}

function showBanner() {	
	if (getString()) {		
		message++		
	if (ar.length <= message)			
		message = 0		
		clearState()		
		timerID = setTimeout("showBanner()", pause)	
	} 
	else {		
		var str = ""		
	for (var j = 0; j < state.length; ++j) {			
		str += (state.charAt(j) == "1") ? ar[message].charAt(j) : "     "		
	}		
	window.status = str		
	timerID = setTimeout("showBanner()", speed)	
	}
}

function getString() {	
	var full = true	
	for (var j = 0; j < state.length; ++j) {		
		if (state.charAt(j) == 0)			
		full = false	
	}	
	if (full) return true	
	while (1) {		
	var num = getRandom(ar[message].length)		
	if (state.charAt(num) == "0")			
		break	
	}	
	state = state.substring(0, num) + "1" + state.substring(num + 1, state.length)	
	return false
}

function getRandom(max) {	
	var now = new Date()		
	var num = now.getTime() * now.getSeconds() * Math.random()	
	return num % max
}
startBanner()
</SCRIPT>
