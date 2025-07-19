window.attachEvent("onload", fixTransparencyIE6); 

function fixWeatherPng() {
  var img = document.getElementById("fixImageIE6");
  var src = img.src;
  img.style.visibility = "hidden";
  var div = document.createElement("DIV"); 
  div.style.filter = "progid:DXImageTransform.Microsoft.
    AlphaImageLoader(src='" + src + "', sizing='scale')"; 

    img.replaceNode(div);
} 