
function showModal(str,registro)
{
if (str=="")
  {
  document.getElementById("modal-contenido").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("modal-contenido").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","/formas?sub="+str+"&menu_id="+registro,true);
xmlhttp.send();
}
   

function showForma(sub,str,registro)
{
if (str=="")
  {
  document.getElementById("modal-contenido").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("modal-contenido").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","/formas?sub="+sub+"&formas="+str+"&id="+registro,true);
xmlhttp.send();
}
   
