var xmlhttp;
function loadXMLDoc(url,cfunc) {
  if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=cfunc;
  xmlhttp.open("GET",url,true);
  xmlhttp.send();
}  

function remove(element) {
  return element.parentNode.removeChild(element);
}

function ajax_load_options(val) {
    var sel = document.getElementById('dva');
    var url = "ajax_load.php?data=" + val;
    
    loadXMLDoc(url,function() {
      if(xmlhttp.readyState==4 && xmlhttp.status==200) {

      
                sel.innerHTML = xmlhttp.responseText; // výstup přiřadí do selectu
               
               


       
                  
      } 
    });
}
