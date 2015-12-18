if (navigator.appName.search("Microsoft")>-1) {
      resObjekt = new ActiveXObject("MSXML2.XMLHTTP");
}
else {
       resObjekt = new XMLHttpRequest();
}
function sndReq() {
    resObjekt.open('get', 'snacksession.txt',true);
    resObjekt.onreadystatechange = handleResponse;
    resObjekt.send(null);
}
function handleResponse() {
  var text='<a href="#" class="list-group-item"><h4 class="list-group-item-heading">';
  document.getElementById("ergeb").style.visibility = "visible";
  if(resObjekt.readyState == 4){
    meinJSONObjekt = eval( "(" + resObjekt.responseText + ")" );
    for(i=0;i <meinJSONObjekt.inhalt.length;i++) {
      text += '<p class="list-group-item-text">' + meinJSONObjekt.inhalt[i].date + "</p>" 
	     + '<h4 class="list-group-item-heading">'+ meinJSONObjekt.inhalt[i].message + "</h4></a>";
    }
    document.getElementById("ergeb").innerHTML = text;
  }
} 