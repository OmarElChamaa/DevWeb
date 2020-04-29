var dataReload = document.querySelectorAll("data-reload");



var lang = {
    eng: {
        remplir_txt: "Fill in",
        Titre_txt: "Title",
        desc_txt: "Descrpition"

    },
    fr: {
        remplir_txt: "Remplir",
        Titre_txt: "Titre",
        desc_txt: "Description"
    }


};

if (window.location.hash) {
    if (window.location.hash === "#eng") {
        remplir.textContent = lang.eng.remplir_txt;
        Titre.textContent = lang.eng.Titre_txt;
        desc.textContent = lang.eng.desc_txt;
    }
    if (window.location.hash === "#fr") {
        remplir.textContent = lang.fr.remplir_txt;
        Titre.textContent = lang.fr.Titre_txt;
        desc.textContent = lang.eng.desc_txt;
    }
}

//language reload onclick
for (i = 0; i <= dataReload.length; i++) {
    dataReload[i].onclick = function() {
        location.reload(true);
    };
}