function showLastModified() {

var javascriptstuff = document.getElementById("update");

// var text = "Last update on: " + document.lastModified;
var lastUpdate = document.createTextNode(writeDateModified(false)); // writeDateModified(true or false) or worksWithSafari()???? instead of text

javascriptstuff.appendChild(lastUpdate);

}

window.onload = showLastModified; // Don't run script until page mapped