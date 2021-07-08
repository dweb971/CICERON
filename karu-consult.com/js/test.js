/* let tab=[11,12,13,14,15,16,17];
        var tableau= document.getElementById("tableau");
        let nbrtab=tableau.cells.length;
        console.log(tableau.cells.length);
        for (let i=0;i<nbrtab;i++) {
         tableau.cells[i].innerHTML="9";   
        };
        let semaine = [11,12,13,14,15,16,17];
        let nbrtab1 = semaine.length;
        for (let i=0;i<nbrtab1;i++) {
            alert(i); 
        }
        */
        /* ENLEVEZ ICI let semaine = [11,12,13,14,15,16,17];
        let nbrtab = semaine.length;
        let tableau = document.getElementById("tableau")
        let cells = tableau.cells;
        //console.log (cells)
        let nbrcells = cells.length;
        for (let i=0;i<nbrcells;i++) {
            //tableau.cells[i].innerHTML=i;
            for (let d=0;d<nbrtab;d++){
                //tableau.cells[i].innerHTML=semaine[d];
                
                //console.log (i+""+d);
                if (i==d) {
                    tableau.cells[i].innerHTML=semaine[d];

                    const date=new Date();
                    //console.log(date);
                    const jour=date.getDate();
                    //console.log(jour)
                    if (jour==semaine[d]) {
                        tableau.cells[i].className="date_jour";
                    } else{
                        tableau.cells[i].className=""; 
                    }
                }
                
            }
            
            
        }
        let mois= new Array ("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet","Aout","Septembre", "Octobre", "Novembre","Décembre");
        let deroulantes= document.getElementById("deroulantes");
        //console.log(déroulantes.length);

        
        let nbrOptions=deroulantes.length
        for (let i=0;i< nbrOptions; i++){
            //console.log(deroulantes[i].innerHTML);
        }

        function ciceronNom () {
            let deroulantes=document.getElementById("deroulantes");
           let index= deroulantes.selectedIndex;
           //console.log(index)
           let titreh1=document.getElementById ("titreh1");
           titreh1.innerHTML=index;
           deroulantes[index].innerHTML
        }
        let valFrm= document.getElementById("valFrm")
        valFrm.addEventListener ("click", function (event){
            //executer notre fonction rdv
            //console.log (event)
            let nom = document.getElementById('nomFrm');
            let prenom=document.getElementById('prenomFrm');

            //champ du formulaire
            let civ=document.getElementById('civFrm');
            let tel=document.getElementById("telFrm");
            let visite=document.getElementById("visiteFrm");

            rdv (civ, nom, prenom,tel,visite);


            
        } );
        
        
     
        function rdv (civ, nom, prenom,tel,visite) {
            let civM=civ.value;
            let nomM= nom.value;
            let prenomM= prenom.value;
            let telM=tel.value;
            let visiteM=visite.value;
            
            

            // test d'affichage
            //alert ("Voici mes coordonnées : "+noM+" "+prenoM);
            
            if (civM == "Choisir civilité"){
                civ.classList.add("errorBG");
            } else {
                civ.classList.remove("errorBG");
            }
            if (nomM == ""){
                nom.classList.add ("errorBG");
                nom.parentNode.children[1].classList.add("on");
                nom.parentNode.children[1].classList.remove("off");

            } else {
                nom.classList.remove("errorBG");
                nom.parentNode.children[1].classList.remove("on");
                nom.parentNode.children[1].classList.add("off");

            }
            if (prenomM == ""){
                prenom.classList.add ("errorBG");
                prenom.parentNode.children[1].classList.add("on");
                prenom.parentNode.children[1].classList.remove("off");
            } else {
                prenom.classList.remove("errorBG");
                prenom.parentNode.children[1].classList.remove("on");
                prenom.parentNode.children[1].classList.add("off");
            }
            if (telM == ""){
                tel.classList.add ("errorBG");
                tel.parentNode.children[1].classList.add("on");
                tel.parentNode.children[1].classList.remove("off");
            } else {
                tel.classList.remove("errorBG");
                tel.parentNode.children[1].classList.remove("on");
                tel.parentNode.children[1].classList.add("off");
            }
            if (visiteM == "Raison de la visite"){
                visite.classList.add ("errorBG");
                visite.parentNode.children[1].classList.add("on");
                visite.parentNode.children[1].classList.remove("off");
            } else {
                visite.classList.remove("errorBG");
                visite.parentNode.children[1].classList.remove("on");
                visite.parentNode.children[1].classList.add("off");
            }
            

            
        }
        */