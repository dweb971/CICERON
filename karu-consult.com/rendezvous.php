<?php
$page = "rendezvous";
?>
<?php
include("includes/head.php");

?>
<div class="container">
    <ul class="list-group list-group-horizontal">
        <li>
            <a href="index.php" title="Page d'accueil">Accueil</a>
        </li>
        <li>
            Rendez-vous
        </li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 id="titreh1">Rendez-vous</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3">
            <h2><span class="badge badge-secondary">Etape 1</span></h2>
        </div>
        <div class="col-6">
            <form class="needs-validation" novalidate>

                <select class="custom-select is-invalid" id="deroulantes" required>
                    <option value="1" selected>Janvier</option>
                    <option value="2">Février</option>
                    <option value="3">Mars</option>
                    <option value="4">Avril</option>
                    <option value="5">Mai</option>
                    <option value="6">Juin</option>
                    <option value="7">Juillet</option>
                    <option value="8">Août</option>
                    <option value="9">Septembre</option>
                    <option value="10">Octobre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Décembre</option>
                </select>
                <div class="invalid-feedback">
                    veuillez choisir une date !!!
                </div>
            </form>
        </div>
        <div class="col-3">

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3">
            <h2><span class="badge badge-secondary">Etape 2</span></h2>
        </div>
        <div class="col-6">
            <?php include("includes/forms/date.php") ?>

        </div>
        <div class="col-3">

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3">
            <h2><span class="badge badge-secondary">Etape 3</span></h2>
        </div>
        <div class="col-6">
            <?php include("includes/forms/heure.php"); ?>
        </div>
        <div class="col-3">
            <div class="alert alert-danger errorDH" role="alert" id="errorDH">

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3">
            <h2><span class="badge badge-secondary">Etape 4</span></h2>
        </div>
        <div class="col-6">
            <?php
            include("includes/forms/patient.php");

            ?>
        </div>
        <div class="col-3">

        </div>
    </div>
</div>
<?php
include("includes/footer.php")


?>