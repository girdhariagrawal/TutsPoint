var rotate = function() {

}

function changeTab(evt, tabName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("hideContent");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
   }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
