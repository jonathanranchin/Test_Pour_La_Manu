
<?php
$title = "Page d'Accueil";
require 'navbar.php';
?>
<body class="d-flex flex-column d-flex justify-content-between align-content-around h-100 d-inline-block align-items-xl-stretch">

    <main role="main" class="container">
        <h1 class="4">Bienvenue sur l'interface qui lie Médecin et Patients</h1>
        <p></p>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <h2>Accedez à votre base de données afin de trouver, ajouter modifier et supprimer des patients et rendez vous!</h2>
                <p></p>
                <ul>
                    <h3>Vérifier que tous vos patients sont là et n'oubliez pas vos rendez-vous</h3>
                    <li><a href="../index.php?action=<?php echo $endpoint1; ?>">Consulter les patients</a></li>
                    <li><a href="../index.php?action=<?php echo $endpoint2; ?>">Consulter les rendez-vous</a></li>
                    <h3>Ajoutez vos rendez-vous et vos patients ! </h3>
                    <li><a href="../index.php?action=<?php echo $endpoint3; ?>">Ajouter un patient et son rendez-vous</a></li>
                    <li><a href="../index.php?action=<?php echo $endpoint4; ?>">Ajouter un patient</a></li>
                    <li><a href="../index.php?action=<?php echo $endpoint5; ?>">Ajouter un rendez-vous</a></li>
                </ul>
            </div>
        </div>
    </div>
</main>
<?php
require "footer.php"
?>

