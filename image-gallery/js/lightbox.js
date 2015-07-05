function init() {
	var lightboxElements = "<div id='lightbox'>";
	lightboxElements += "<div id='overlay' class='hidden'></div>";
    lightboxElements  += "<img class='hidden' id='big-image' />";
    lightboxElements  += "/div>";

    document.querySelector("body").innerHTML += lightboxElements;

    var bigImage = document.querySelector("#big-image");
    bigImage = addEventListener("click", toggle, false);
    prepareThumbs();
}

//declare a new function
function toggle( event ){
    //which image was clicked
    var clickedImage = event.target;
    var bigImage = document.querySelector("#big-image");
    var overlay = document.querySelector("#overlay");
    bigImage.src = clickedImage.src;
    //if overlay is hidden, we can assume the big image is hidden
    if ( overlay.getAttribute("class") === "hidden" ) {
        overlay.setAttribute("class", "showing");
        bigImage.setAttribute("class", "showing");
    } else {
        overlay.setAttribute("class", "hidden");
        bigImage.setAttribute("class", "hidden");
    }
}
 
//declare new function
function prepareThumbs() {
    var liElements = document.querySelectorAll("ul#images li");
    var i = 0;
    var image, li;
    //loop through all <li> elements
    while ( i < liElements.length ) {
        li = liElements[i];
        //set class='lightbox'
        li.setAttribute("class", "lightbox");
        image = li.querySelector("img");
        //register a click event handler for the <img> elements
        image.addEventListener("click", toggle, false);
        i += 1;
    }
}
 
document.addEventListener("DOMContentLoaded", init, false);