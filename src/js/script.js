function mostrar(selectDiv) {

    let display = document.getElementById(selectDiv).style.display;
    
    if (display == "none") {
        document.getElementById(selectDiv).style.display = 'flex';
    }
    else {
        document.getElementById(selectDiv).style.display = 'none'
    }
}