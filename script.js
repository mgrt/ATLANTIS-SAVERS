function verif() {

    var nomR = document.forms["f1"]["nom_produit"].value;
    
    var errorN = document.getElementById('errorNR');


    var letters = /^[A-Za-z]+$/;
    var dateNow = new Date();
    if (nomR == "") {
        errorN.innerHTML = "Veuillez entrer votre nom! ";

    }
    else if (!(nomR.match(letters) && nomR.charAt(0).match(/^[A-Z]+$/))) {
        errorN.innerHTML = "Veuillez entrer un nom valid!";
    } else {
        errorN.innerHTML = "";

    }

    
}
/*
function changeAutre() {
    var autre = document.forms["f1"]["desc"];
    if (document.getElementById("autre").checked = true) {
        autre.style.display = "";
    }
    else {
        autre.style.display = "none";

    }
}
*/
function validateForm(e) {
    e.preventDefault();
    verif();
}