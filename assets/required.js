function required() {
    var returnValue;
    var email = document.getElementById("mail").value;
    var titre = document.getElementById("Titre").value;
    var description = document.getElementById("desc").value;


    returnValue = true;
    if (email.trim() == "") {
        document.getElementById("reqEmail").innerHTML = "* Le mail est requis.";
        returnValue = false;
    }
    if (titre.trim() == "") {
        document.getElementById("reqTxtTitre").innerHTML = "* Un titre est requis.";
        returnValue = false;
    }
    if (description.trim() == "") {
        document.getElementById("reqTxtdesc").innerHTML = "* Une description est requise.";
        returnValue = false;
    }

    return returnValue;
}

function requiredAdmin() {
    var returnValue;
    var user = document.getElementById("usr").value;
    var motpasse = document.getElementById("mdp").value;

    returnValue = true;
    if (user.trim() == "") {
        document.getElementById("reqUsr").innerHTML = "* Champ requis.";
        returnValue = false;
    }
    if (motpasse.trim() == "") {
        document.getElementById("reqTxtMDP").innerHTML = "* Champ requis.";
        returnValue = false;
    }
    return returnValue;

}