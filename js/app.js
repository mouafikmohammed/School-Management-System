function openTab(evt, tabName) {
  var i, tabcontents, tabLinks;
  tabcontents = document.getElementByClassName("tabcontent");
  for (i = 0; i < tabcontents.length; i++) {
    tabcontents[i].style.display = "none";
  }
  tabLinks = document.getElementByClassName("tabLinks");
  for (i=0; i < tabLinks.length; i++) {
    tabLinks[i].className = tabLinks[i].className.replace(" active","");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();