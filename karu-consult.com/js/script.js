/*
Auteur : dweb2021
Name script : scripts
Year script : 2021
*/

document.addEventListener("DOMContentLoaded", function(){
    const dt = new Date();
    const ms = dt.getMonth();
    let fullMois = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];
    for(let m = 0;m<fullMois.length;m++){
        if(m===ms){
            //console.log(allMois[m]);
            calendrier(fullMois[m], dt.getFullYear);
            document.getElementById("deroulantes").selectedIndex = m;
            console.log(document.getElementById("deroulantes").selectedIndex);

            // appel function mois_annee
            recup_mois_annee(fullMois[m])
        }
    }
    ecrireDate();
});

// my listener
const deroulantes = document.getElementById("deroulantes");

deroulantes.addEventListener("change",function(){

    // index mois selectionné.
    let indexMoisSelect = deroulantes.selectedIndex;
    let mois = deroulantes[indexMoisSelect].innerHTML;
    
    //creer une date et obtenir l'annee en cours
    let annee = new Date();

    //executer function calendrier
    calendrier(mois , annee.getFullYear() );

} );

// my calendar
function calendrier(mois, annee){
    let nbrJourMois;
    let agenda = document.getElementById("agenda");
    let nbrRows = agenda.rows.length;
    //let bissextile = [2020,2024,2028,2032,2036,3040,2044,2048,2052]; 
    let bissextile = [2020];
    let lastYear;
    //console.log(agenda.rows[0].cells.length);
    bissextile.push(2020);
    bissextile.push(2024);
    bissextile.push(2028);
    bissextile.push(2032);
    bissextile.push(2036);
    bissextile.push(2040);
    bissextile.push(2044);
    bissextile.push(2048);



    

    switch(mois){
        case "Janvier":
            var firstDay = ecrireDate(0, annee);
            nbrJourMois = 31;
            tableauHTML(nbrRows, agenda, nbrJourMois, firstDay);
            break;

        case "Février":
            var firstDay = ecrireDate(1, annee);
            for(i=0;i<bissextile.length;i++){
                if(bissextile[i] == annee){
                    lastYear = bissextile[i];
                }
            }
            if(lastYear == annee){
                nbrJourMois = 29;
            }
            else {
                nbrJourMois = 28;
            }
            tableauHTML(nbrRows, agenda, nbrJourMois, firstDay);
            break;

        case "Mars":
            var firstDay = ecrireDate(2, annee);
            nbrJourMois = 31;
            tableauHTML(nbrRows, agenda, nbrJourMois, firstDay);
            break;

        case "Avril":
            var firstDay = ecrireDate(3, annee);
            nbrJourMois = 30;
            tableauHTML(nbrRows, agenda, nbrJourMois, firstDay);
            break; 
            
        case "Mai":
            var firstDay = ecrireDate(4, annee);
            nbrJourMois = 31;
            tableauHTML(nbrRows, agenda, nbrJourMois, firstDay);
            break; 
            
        case "Juin":
            var firstDay = ecrireDate(5, annee);
            nbrJourMois = 30;
            tableauHTML(nbrRows, agenda, nbrJourMois, firstDay);
            break;   

        case "Juillet":
            var firstDay = ecrireDate(6, annee);
            nbrJourMois = 31;
            tableauHTML(nbrRows, agenda, nbrJourMois, firstDay);
            break; 

        case "Août":
            var firstDay = ecrireDate(7, annee);
            nbrJourMois = 31;            
            tableauHTML(nbrRows, agenda, nbrJourMois, firstDay);
            break; 

        case "Septembre":
            var firstDay = ecrireDate(8, annee);
            nbrJourMois = 30;
            tableauHTML(nbrRows, agenda, nbrJourMois, firstDay);
            break; 

        case "Octobre":
            var firstDay = ecrireDate(9, annee);
            nbrJourMois = 31;
            tableauHTML(nbrRows, agenda, nbrJourMois, firstDay);
            break;
            
        case "Novembre":
            var firstDay = ecrireDate(10, annee);
            nbrJourMois = 30;
            tableauHTML(nbrRows, agenda, nbrJourMois, firstDay);
            break;
            
        default:
            var firstDay = ecrireDate(11, annee);
            nbrJourMois = 31;
            tableauHTML(nbrRows, agenda, nbrJourMois, firstDay);
            break;
    }
}

function tableauHTML(lignes, agenda, jours, firstDay) {
    //console.log(firstDay);
    let j=0;
    for(let l=0;l<lignes;l++){
        let nbrTD = agenda.rows[l].cells.length;
        for(t=0;t<nbrTD;t++){
            if(l!=0){
                j++;
                if(l==1){

                    if(t==0){
                        //agenda.rows[l].cells[t].innerHTML = j;
                        ecrireJours(agenda.rows[l].cells[t], j, jours);
                    }
                    if(t==1){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==2){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==3){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==4){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==5){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==6){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                }  //fin condition
                

                if(firstDay === 0){ //dimanche
                    if(l==1){
                        
                        if(t<=5){
                            ecrireJours(agenda.rows[l].cells[t], j, "");  
                        }
                        if(t==6){
                            j=1;
                            ecrireJours(agenda.rows[l].cells[t], j, jours);
                        }
                    }
                }
                if(firstDay === 1){ //lundi
                    if(l==1){
                        
                        ecritureTableau(t,j,agenda.rows[l].cells[t],jours);
                    }
                }
                if(firstDay === 2){ //mardi
                    if(l==1){
                        
                        if(t<=0){
                            ecrireJours(agenda.rows[l].cells[t], j, "");  
                        }
                        if(t==1){
                            j=1;
                            ecrireJours(agenda.rows[l].cells[t], j, jours);
                        }
                        if(t>1){
                            ecrireJours(agenda.rows[l].cells[t], j, jours);
                        }
                    }
                }
                if(firstDay === 3){ //mercredi
                    if(l==1){
                        
                        if(t==0){
                            ecrireJours(agenda.rows[l].cells[t], j, "");  
                        }
                        if(t==1){
                            ecrireJours(agenda.rows[l].cells[t], j, "");
                        }
                        if(t==2){
                            j=1;
                            ecrireJours(agenda.rows[l].cells[t], j, jours);
                        }
                        if(t>2){
                            ecrireJours(agenda.rows[l].cells[t], j, jours);
                        }
                    }
                }
                if(firstDay === 4){ //jeudi
                    if(l==1){
                        
                        if(t<=2){
                            ecrireJours(agenda.rows[l].cells[t], j, "");  
                        }
                        if(t==3){
                            j=1;
                            ecrireJours(agenda.rows[l].cells[t], j, jours);
                        }
                        if(t>3){
                            ecrireJours(agenda.rows[l].cells[t], j, jours);
                        }
                    }
                }
                if(firstDay === 5){ //vendredi
                    if(l==1){
                        
                        if(t<=3){
                            ecrireJours(agenda.rows[l].cells[t], j, "");  
                        }
                        if(t==4){
                            j=1;
                            ecrireJours(agenda.rows[l].cells[t], j, jours);
                        }
                        if(t>4){
                            
                            ecrireJours(agenda.rows[l].cells[t], j, jours);
                        }

                        
                    }
                }
                if(firstDay === 6){ //samedi
                    if(l==1){
                        
                        if(t<=4){
                            ecrireJours(agenda.rows[l].cells[t], j, "");  
                        }
                        if(t==5){
                            j=1;
                            ecrireJours(agenda.rows[l].cells[t], j, jours);
                        }
                        if(t==6){
                            ecrireJours(agenda.rows[l].cells[t], j, jours);
                        }
                    }
                }





                if(l==2){
                    if(t==0){
                        //agenda.rows[l].cells[t].innerHTML = j;
                        ecrireJours(agenda.rows[l].cells[t], j, jours);
                    }
                    if(t==1){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==2){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==3){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==4){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==5){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==6){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                }
                if(l==3){
                    if(t==0){
                        //agenda.rows[l].cells[t].innerHTML = j;
                        ecrireJours(agenda.rows[l].cells[t], j, jours);
                    }
                    if(t==1){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==2){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==3){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==4){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==5){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==6){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                }
                if(l==4){
                    if(t==0){
                        //agenda.rows[l].cells[t].innerHTML = j;
                        ecrireJours(agenda.rows[l].cells[t], j, jours);
                    }
                    if(t==1){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==2){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==3){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==4){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==5){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==6){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                }
                if(l==5){
                    if(t==0){
                        //agenda.rows[l].cells[t].innerHTML = j;
                        ecrireJours(agenda.rows[l].cells[t], j, jours);
                    }
                    if(t==1){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==2){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==3){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==4){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==5){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==6){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                }
                if(l==6){
                    if(t==0){
                        //agenda.rows[l].cells[t].innerHTML = j;
                        ecrireJours(agenda.rows[l].cells[t], j, jours);
                    }
                    if(t==1){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==2){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==3){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==4){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==5){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                    if(t==6){
                        ecrireJours(agenda.rows[l].cells[t], j, jours);                    
                    }
                }
            }
        }
    } 
}
function ecrireDate(m, annee){
    let jour =new Date(Date.UTC(annee,m,1,4,0,0,0));
    //UTC +4h
    //console.log(jour);

    //recuperer et afficher date
    return jour.getDay();
}

function ecrireJours(colonne, jour, jourMois){
    if(jour>jourMois){
        colonne.innerHTML = "";
    }
    else{
        //ecrire jour
        colonne.innerHTML = jour;
    }
    
}

function ecritureTableau(t,j,tableauHTML,nbrJourMois){
    if(t==0){
        ecrireJours(tableauHTML, j, nbrJourMois);
    }
    if(t==1){
        ecrireJours(tableauHTML, j, nbrJourMois);                    
    }
    if(t==2){
        ecrireJours(tableauHTML, j, nbrJourMois);                    
    }
    if(t==3){
        ecrireJours(tableauHTML, j, nbrJourMois);                    
    }
    if(t==4){
        ecrireJours(tableauHTML, j, nbrJourMois);                    
    }
    if(t==5){
        ecrireJours(tableauHTML, j, nbrJourMois);                    
    }
    if(t==6){
        ecrireJours(tableauHTML, j, nbrJourMois);                    
    }
}
function selectMoisEnCours(date_actuelle) {
    var options = { month: 'long' };
    //console.log(new Intl.DateTimeFormat('fr-FR', options).format(day));

    return strUcFirst(new Intl.DateTimeFormat('fr-FR', options).format(date_actuelle));
}

// champs obligatoire hors de form patient
let valFrm=document.getElementById("valFrm");
let heure=document.getElementById("heure");
let heureForm=document.getElementById("heureForm");
let heureFrm = document.getElementById("heureFrm");

// verif when submit form for datas without first form
valFrm.addEventListener("click", function(e){
    let agendaForm=document.getElementById("agendaForm");
    let rdvFrm=document.getElementById("rdvFrm");
    let agendaFrm=document.getElementById("agendaFrm");


    if(rdvFrm.value==""){
        agendaFrm.style.display="block";

        // style sur formulaire
        agendaForm.classList.add("agendaForm");
        //agendaForm.style.borderColor="red";

    } else{
        agendaFrm.style.display="none";
         agendaForm.classList.remove="agendaForm";
         // agendaForm.style.borderColor= "";
    }

    valFrm.addEventListener("click", function(){

    });


    //verif select heure when submit form
    if(heureFrm.value==""){
        heureForm.style.display="block";
        heure.classList.add("is-invalid");


    }else {
        heureForm.style.display="none";
        heure.classList.remove("is-invalid");


    }



});

heure.addEventListener("change", function(e){
    console.log(e.target);
    if (e.target.className=='custom-select is-invalid'){
        heure.classList.remove("is-invalid");
        heure.classList.add("is-valid");
    } else {
        heure.classList.add("is-valid");
    }


});