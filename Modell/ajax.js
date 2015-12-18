if (navigator.appName.search("Microsoft")>-1) {
      resObjekt = new ActiveXObject("MSXML2.XMLHTTP");
}
else {
       resObjekt = new XMLHttpRequest();
}
function sndReq() {
    resObjekt.open('get', 'snacksession.json',true);
    resObjekt.onreadystatechange = handleResponse;
    resObjekt.send(null);
}
function handleResponse() {
  var text="<table border='1' width='400'><tr><th>Datum</th><th>Nachricht</th></tr>";
  document.getElementById("ergeb").style.visibility = "visible";
  if(resObjekt.readyState == 4){
    meinJSONObjekt = eval( "(" + resObjekt.responseText + ")" );
    for(i=0;i <meinJSONObjekt.inhalt.length;i++) {
      text += "<tr><td>" + meinJSONObjekt.inhalt[i].date + "</td><td>" 
	     + meinJSONObjekt.inhalt[i].message + "</td></tr>";
    }
    document.getElementById("ergeb").innerHTML = text;
  }
} 