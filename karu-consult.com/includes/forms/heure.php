<form action="POST" id="H">
    <select class="custom-select" id="heure" required>
        <option value="" selected>Choisir une heure</option>
        <option value="7:00">7h00</option>
        <option value="7:30">7h30</option>
        <option value="8:00">8h00</option>
        <option value="8:40">8h40</option>
        <option value="9:00">9h00</option>
        <option value="9:40">9h40</option>
        <option value="10:00">10h00</option>
        <option value="10:40">10h40</option>
        <option value="11:00">11h00</option>
        <option value="11:40">11h40</option>
        <option value="14:00">14h00</option>
        <option value="14:30">14h30</option>
    </select>
    <div class="invalid-feedback" id="heureForm">
        Merci de choisir une heure de rendez-vous !
    </div>
</form>
<script>
// verifie date et heure deja pris

// liste deroulante

let listeH = document.getElementById("heure");
let httpRequest

// ecouteur type change
listeH.addEventListener("change", function() {
    let dateRDV = document.getElementById("rdvFrm").value;
    let heureRDV = this.value;
    let info = document.getElementById("errorDH");

    httpRequest = new XMLHttpRequest();

    console.log();

    // requete vers serveur
    httpRequest.open('POST', 'https://karu-consult.com/traitement.php');


    // changer le type mime de la quete pour methode POST
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');




    //
    httpRequest.send("rdvFrm=" + encodeURIComponent(dateRDV) + "&heureFrm=" + encodeURIComponent(heureRDV));



    // traitement de la reponse serveur
    httpRequest.onreadystatechange = function() {

        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            // tout va bien, la réponse a été reçue
            // console.log(httpRequest.responseText);
            console.log(httpRequest.responseText);
        } else {
            // pas encore prête
        }
        if (httpRequest.status === 200) {
            // parfait !
            if (httpRequest.responseText != '') {
                console.log(httpRequest.responseText);

                info.classList.remove("errorDH");
                info.classList.add("is-invalid");
                info.innerHTML = httpRequest.responseText;
            } else {
                info.classList.add("errorDH");
                listeH.classList.remove("is-invalid");
            }


        } else {
            // il y a eu un problème avec la requête,
            // par exemple la réponse peut être un code 404 (Non trouvée)
            // ou 500 (Erreur interne au serveur)

            // cacher bloc erreur
            info.classList.add("errorDH");
        }







    };

});
</script>