var goedendoelen;
var button;
index = 0;

var goedendoelen = ['kika', 'rode kruis', 'dieren lot'];

var slideShowArray = ['kika.jpg', 'rodekruis.jpg', 'dierenlot.jpg'];

window.onload = function() {
    goedendoelen = document.getElementById("goedendoelen");

    setInterval(slideShow, 3000);
}


function slideShow() {
    goedendoelen.style.backgroundImage = "url(images/" + slideShowArray[index] + ")"
    index++;
    if (index == slideShowArray.lenght) {
        index = 0;
    }
}