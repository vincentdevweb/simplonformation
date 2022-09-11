window.onload = () => {

    //INITIALISATION
    let d = document;

    let france_region = d.querySelectorAll('g');

    let regions = d.querySelector('#regions');
    let departements = d.querySelector('#departements');

    //RECUPERE LA COULEUR DEPARTEMENTS pour les afficher
    let color_dep = d.querySelectorAll('path');

    // RECUPERE LA VALUE DANS L'OPTION + change la couleur
    regions.addEventListener('change', (e) => {
        france_region.forEach(field => {
            field.setAttribute("fill", "#000");//MET LA COULEUR REGION PAR DEFAUT
            if (field.id == regions.value) {
                field.setAttribute("fill", "#9e2020");//CHANGE LA COULEUR DE LA REGION SELECTIONNER
            };
            color_dep.forEach(field => {
                field.setAttribute("fill", "");//MET LA COULEUR DE TOUT LES DEPARTEMENTS PAR DEFAUT
            });
            d.querySelector('#dept_zone').classList.remove('d-none');// ON AFFICHE DE NOUVEAU LA ZONE DU FORMULAIRE(DEPARTEMENT)
        });

        // DISPLAY DEPARTEMENT RE-INITIALISATION SI ON SE REMET SUR CHOIX
        if (regions.value == "0") {
            d.querySelector('#dept_zone').classList.add('d-none');// ON CACHE DE NOUVEAU LA ZONE DU FORMULAIRE(DEPARTEMENT)
        };

        //CREATION OBJTS DU FORMULAIRE
        let zone = d.querySelector('#formulaire');
        let departements_data = new FormData(zone);

        fetch('data.php', {
            method: 'POST',
            body: departements_data
        }).then(reponse => {
            return reponse.json();
        }).then(data => {

            //FONCTION MENU DEROULANT N°2
            let resultat = "<option value='0'>Faites votre choix...</option>";
            for (let cle in data.content) {
                for (let cle2 in data.content[cle]) {
                    resultat += '<option value="dept-' + cle2 + '">';
                    resultat += data.content[cle][cle2];
                    resultat += ' (' + cle2 + ')' + '</option>';
                };
            };

            departements.innerHTML = resultat; //AFFICHE LE RESULTAT FINAL 

        });

        // FONCTION COLOR DEPARTEMENT

        departements.addEventListener('change', (e) => {
            color_dep.forEach(field => {
                field.setAttribute("fill", "");
                if (field.id == departements.value) {
                    field.setAttribute("fill", "#45ed42");
                };
            });
        });

    });

}