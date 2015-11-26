/* object element
var zeit = {
	"tag": datum.getDay,
	"monat": datum.getMonth,
	"jahr": datum.getFullYear,
	"stunde": datum.getHours,
	"minute": datum.getMinutes,
};*/


/*
document.getElementById("btnSpeichern").addEventListener("click", speichern);

document.getElementById("btnSpeichern").onclick = function() {speichern()};
*/
/*
function speichern() {
	text = window.document.getElementById("textfeld").value;
	document.getElementById("item1").innerHTML = text;
	zeit = datum.tag + "." + datum.monat + "." + datum.jahr + ", " + datum.stunde + ":" + datum.minute + " Uhr";
	document.getElementById("dateItem1").innerHTML = zeit;
};*/
function speichern() {
	var text;
	var datum = new Date;
	var zeit;
	text = window.document.getElementById("textfeld").value;
	document.getElementById("item1").innerHTML = text;
	zeit = datum.tag + "." + datum.monat + "." + datum.jahr + ", " + datum.stunde + ":" + datum.minute + " Uhr";
	document.getElementById("dateItem1").innerHTML = zeit;
};