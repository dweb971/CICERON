<body>
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <form method="POST" action='<?php echo "https://".$_SERVER["HTTP_HOST"]."/traitement.php";?>' class="needs-validation" novalidate  >
            <div class="col-4">
                <div class="form-group row">
                    <select class="custom-select" name="civFrm" required>
                        <option selected value="">Choisir civilité</option>
                        <option value="1">M</option>
                        <option value="2">Mle</option>
                        <option value="3">Mme</option>
                    </select>
                    <div class="invalid-feedback">
                        Merci de choisir votre civilite !!!
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nom" class="col-md-2 col-form-label">Nom : <span class="obj">(*)</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" value="" placeholder="NOM" name="nomFrm"
                            maxlength="100" minlength="1" required>
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div class="invalid-feedback">
                            Merci d'indiquer votre NOM !!!
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prenom" class="col-md-2 col-form-label">Prénom : <span class="obj">(*)</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" value="" placeholder="Prénom" name="prenomFrm"
                            maxlength="55" minlength="2" required>
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div class="invalid-feedback">
                            Merci d'indiquer votre Prénom !!!
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telephone" class="col-sm-2 col-form-label">Téléphone : <span
                            class="obj">(*)</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="" value="" placeholder="Fixe ou Mobile"
                            maxlength="15" name="telFrm" required pattern="[0-9]{10}">
                        <p>Format : 0590010203 ou 0690010203</p>
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div class="invalid-feedback">
                            Merci d'indiquer votre numéro de téléphone fixe ou mobile !!!
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="staticEmail" class="col-md-2 col-form-label">Email : <span
                            class="obj">(*)</span></label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="emailFrm" maxlength="160" minlength="7" value=""
                            placeholder="email@example.com" name="emailFrm">
                        <div class="valid-feedback">
                            Merci!
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="" value="" placeholder="Mot de passe"
                        name="motdepasse" maxlength="20" minlength="4" required>

                    <div class="valid-feedback">
                        Merci!
                    </div>
                    <div class="invalid-feedback">
                        Merci d'indiquer votre mot de passe !!!
                    </div>
                </div>

                <div class="form-group row">
                    <label for="prenom" class="col-sm-2 col-form-label">Adresse : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" value="" placeholder="Adresse" name="adresse"
                            maxlength="60" minlength="5" required>
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div class="invalid-feedback">
                            Merci d'indiquer votre Adresse !!!
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="prenom" class="col-sm-2 col-form-label">Complémentaire : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" value="" placeholder="Complémentaire"
                            name="complementaire" maxlength="60" minlength="2" required>
                        <div class="valid-feedback">
                            Merci!
                        </div>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="prenom" class="col-sm-2 col-form-label">Code postal :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" value="" placeholder="9711,7520..." name="postal"
                            maxlength="5" minlength="1" required>
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div class="invalid-feedback">
                            Merci d'indiquer votre code postal !!!
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="prenom" class="col-sm-2 col-form-label">Ville : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" value="" placeholder="Ville" name="ville"
                            maxlength="40" minlength="4" required>
                        <div class="valid-feedback">
                            Merci!
                        </div>
                        <div class="invalid-feedback">
                            Merci d'indiquer votre ville !!!
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <select class="custom-select" name="pays" required>
                        <option selected value="">Choisir Pays</option>
                        <option value="1">Guadeloupe</option>
                        <option value="2">Martinique</option>
                        <option value="2">La Reunion</option>
                        <option value="2">France</option>
                    </select>
                    <div class="invalid-feedback">
                        Merci d'indiquer votre pays !!!
                    </div>
                </div>

                <div class="form-group row">
                    <p>Champ obligatoire (*)</p>
                    <button type="submit" class="btn btn-primary" name="validerFrm" value="valider">Valider</button>
                </div>
                </form>


                <div class="col-4">

                </div>
            </div>
        </div>

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