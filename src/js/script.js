function mostrar(selectDiv) {

    var display = document.getElementById(selectDiv).style.display;
    
    if (display == "none") {
        display = 'flex';
    }
    else {
        display = 'none'
    }
}