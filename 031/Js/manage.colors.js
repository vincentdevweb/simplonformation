window.onload = () => {

    /* On simplifie le nom de l'objet document */
    let d = document;

    let couleurs = d.querySelectorAll("input");

    let couleurs_text_bg_dark = d.querySelectorAll('.text-bg-dark');

    let boutton = d.querySelector('#reset');

    let debut_de_page = d.querySelector('#to-top');



    couleurs[0].addEventListener('change', (e) => {
        document.body.style.backgroundColor = e.target.value;
        Cookies.set('couleur1', e.target.value);
    });
    document.body.style.backgroundColor = Cookies.get('couleur1');


    couleurs[1].addEventListener('change', (e) => {
        couleurs_text_bg_dark.forEach(coucou => {
            coucou.style.setProperty("background-color", e.target.value, "important");
        });
        Cookies.set('couleur2', e.target.value);//RECUP COOKIE
    });
    //UTILISATION DU COOKIE
    couleurs_text_bg_dark.forEach(coucou => {
        coucou.style.setProperty("background-color", Cookies.get('couleur2'), "important");
    });

    couleurs[2].addEventListener('change', (e) => {

        couleurs_text_bg_dark.forEach(coucou => {

            coucou.style.setProperty("color", e.target.value, "important");

        });
        Cookies.set('couleur3', e.target.value);

    });
    couleurs_text_bg_dark.forEach(coucou => {
        coucou.style.setProperty("color", Cookies.get('couleur3'), "important");
    });


    couleurs[3].addEventListener('change', (e) => {
        document.body.style.color = e.target.value;
        Cookies.set('couleur4', e.target.value);
    });

    document.body.style.color = Cookies.get('couleur4');


    boutton.addEventListener('click', (e) => {
        Cookies.remove('couleur1');
        Cookies.remove('couleur2');
        Cookies.remove('couleur3');
        Cookies.remove('couleur4');
        location.reload();
    });

    debut_de_page.addEventListener('click', (e) => {
        console.log(debut_de_page);
        scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
        });
    });

}