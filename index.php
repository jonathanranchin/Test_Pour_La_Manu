
<?php
$title = "Page d'Accueil";
require 'navbar.php';
?>
<body class="d-flex flex-column d-flex justify-content-between align-content-around h-100 d-inline-block align-items-xl-stretch">

    <main role="main" class="container">
        <h1>Bienvenue sur l'interface qui lie Médecin et Patients</h1>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <ul>
                    <h3>Vérifier que tous vos patients et n'oubliez pas vos rendez-vous</h3>
                    <li><a href="liste-patients.php">Consulter les patients</a></li>
                    <li><a href="liste-rdv.php">Consulter les rendez-vous</a></li>
                    <h3>Ajoutez vos rendez-vous et vos patients ! </h3>
                    <li><a href="ajout-patient-rendez-vous.php">Ajouter un patient et son rendez-vous</a></li>
                    <li><a href="ajout-patient.php">Ajouter un patient</a></li>
                    <li><a href="ajout-rdv.php">Ajouter un rendez-vous</a></li>
                </ul>

            </div>
        </div>
    </div>
</main>
<?php
require "footer.php"
?>
</body>

</html>
