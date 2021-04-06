window.onclick = function(element) {
    var panel = element.target.nextElementSibling;



    if (element.target.id == "accPanel1") {

        if (panel.style.display == "none") {
            panel.style.display = "block";
        } else {
            panel.style.display = "none";
        }
    }


    if (element.target.id == "accPanel2") {

        if (panel.style.display == "none") {
            panel.style.display = "block";
        } else {
            panel.style.display = "none";
        }
    }

    if (element.target.id == "accPanel3") {

        if (panel.style.display == "none") {
            panel.style.display = "block";
        } else {
            panel.style.display = "none";
        }
    }
}