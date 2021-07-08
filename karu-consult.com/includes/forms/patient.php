<form action='<?php echo "https://".$_SERVER["HTTP_HOST"]."/traitement.php"; ?>' method="POST" class="needs-validation" id="valFrm"
    novalidate>
                        <div class="form-group row">
                            <select class="custom-select" name="civFrm" required>
                            
                                <option selected>Choisir civilité</option>
                                <option value="1">Monsieur</option>
                                <option value="2">Madame</option>
                              </select>
                              <div class="invalid-feedback">
                              Veuillez choisir votre civilité
                              </div>
                        </div>
                        <div class="form-group row">
                            <label for="nom" class="col-sm-2 col-form-label">Nom : <span>(*)</span></label>
                            <div class="col-sm-10">
                              <input type="text"  class="form-control" id="nom" value="" placeholder="NOM"
                              name="nomFrm" maxlength="1000" minlength="1" required>
                              <div class="valid-feedback">
                              Merci !
                              </div>
                              <div class="invalid-feedback">
                              Indiquez votre Nom !
                              </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prenom" class="col-sm-2 col-form-label">Prénom: <span>(*)</span></label>
                            <div class="col-sm-10">
                              <input type="text"  class="form-control" id="exampleInputPassword1" value="" placeholder="Prénom" name="prenomFrm" maxlength="1984" minlength="2" required>
                              <div class="valid-feedback">
                              looks good
                              </div>
                              <div class="invalid-feedback">
                              Indiquez votre prénom !
                              </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telephone" class="col-sm-2 col-form-label">Téléphone : <span>(*)</span></label>
                            <div class="col-sm-10">
                              <input type="text"  class="form-control" id="exampleInputPassword1" value="" placeholder="Fixe ou mobile" name="telFrm" aria-describedby="exempleInputPassword1Feedback" maxlength="" required>
                              <div class="valid-feedback">
                              looks good 
                              </div>
                              <div class="invalid-feedback">
                              Indiquez votre numeros de telephone
                              </div>
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email"  class="form-control" id="staticEmail" value="" placeholder="email@exemple.com" name="mailFrm" maxlength="5977" minlength="7">
                          </div>
                        </div>
                        <div class="form-group row">
                            <select class="custom-select" name="visiteFrm" id="exampleInputPassword1" aria-describedby="exempleInputPassword1Feedback" required>
                                <option selected>Raison de la visite : (*)</option>
                                <option value="consultation">Consultation</option>
                                <option value="ordonnance">Ordonnance</option>
                                <option value="vaccin">Vaccin</option>
                                <option value="urgence">Urgence</option>
                                <option value="autre">Autre</option>
                              </select>
                              <div class="valid-feedback">
                              looks good 
                              </div>
                              <div class="invalid-feedback">
                              Choisir une raison de visite
                              </div>
                        </div>
                        <div class="form-group row">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" value="1" name="patientFrm">
                                <label class="custom-control-label" for="customCheck1">Patient du cabinet : </label>
                              </div>
                        </div>
                        <div>
                        <input type="hidden" name="rdvFrm" value="" id="rdvFrm">
                        <input type="hidden" name="heureFrm" value="" id="heureFrm">
                        <input type="hidden" name="action" value="rdv" id="action">
                        </div>
                        <div class="form-group row">
                            <button type="button" class="btn btn-success">Annuler</button>
                            <button type="submit" class="btn btn-primary" name="validerFrm" value="valider">Valider</button>
                        </div>
                      </form>
                      <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
                      <?php

                      //print_r($_SERVER);

                      //echo $_SERVER["HTTP_HOST"];

                      ?>
