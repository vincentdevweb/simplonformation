window.onload = () => {

    /* On simplifie le nom de l'objet document */
    let d = document;

    let couleurs = d.querySelectorAll("input");

    let couleurs_text_bg_dark = d.querySelectorAll('.text-bg-dark');

    let boutton = d.querySelector('#reset');

    let debut_de_page = d.querySelector('#to-top');



    couleurs[0].addEventListener('change', (e) => {


        e.target.value = couleurs[0].value;

        document.body.style.backgroundColor = e.target.value;

    });

    couleurs[1].addEventListener('change', (e) => {

        couleurs_text_bg_dark.forEach(coucou => {

            coucou.style.setProperty("background-color", couleurs[1].value, "important");

        });
    });

    couleurs[2].addEventListener('change', (e) => {

        couleurs_text_bg_dark.forEach(coucou => {

            coucou.style.setProperty("color", couleurs[2].value, "important");

        });
    });


    couleurs[3].addEventListener('change', (e) => {

        e.target.value = couleurs[3].value;

        document.body.style.color = e.target.value;

    });

    boutton.addEventListener('click', (e) => {
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