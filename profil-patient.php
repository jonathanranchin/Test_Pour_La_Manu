<?php
session_start();
$_SESSION['id'] = $_GET['id'];
$variable = $_GET['id'];
$bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');

/**
 * Données Patient
 */
$request = 'SELECT * FROM patients WHERE id = ' . $_GET['id'];
$response = $bdd->query($request);

$patient = $response->fetch(PDO::FETCH_ASSOC);

/**
 * Liste de ses rendez-vous
 */
$request = 'SELECT * FROM appointments WHERE idPatients = ' . $_GET['id'];
$response = $bdd->query($request);

$appointments = $response->fetchAll(PDO::FETCH_ASSOC);

?>
<?php
$title = "Profil Patient";
require 'navbar.php';
?>
<body>

    <div class="container">
        <div class="row mt-3">
            <div class="col-12">

                <a href="liste-patients.php" class="btn btn-primary btn-sm mb-2">
                    < Retour</a> <div class="card">
                        <div class="card-header"><?= $patient['firstname'] ?> <?= $patient['lastname'] ?></div>

                        <div class="card-body">
                            <ul>
                                <li>Né le : <?= date('d/m/Y', strtotime($patient['birthdate'])) ?></li>
                                <li>Téléphone : <?= $patient['phone'] ?></li>
                                <li>E-mail : <?= $patient['mail'] ?></li>
                            </ul>
                            <a href="modify-patient.php?id=<?php echo $variable?>"class="btn btn-primary float-right">Modifier ce patient</a>
                        </div>
                        <div class="card-footer">
                            <form action="ajout-rdv.php" method="post" class="form">
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input name="date" type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Heure</label>
                                    <input name="hour" type="time" class="form-control">
                                </div>

                                <input type="hidden" name="idPatients" value="<?= $variable?>">

                                <button class="btn btn-primary float-right">Ajouter un rendez-vous</button>
                            </form>
                        </div>
            </div>

            <?php foreach ($appointments as $appointment) :
                ?>
                <div class="card">
                    <div class="body">
                        Rendez-vous le <?= date('d/m/Y', strtotime($appointment['dateHour'])) ?>
                        à <?= date('H:i', strtotime($appointment['dateHour'])) ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
    </div>

    <?php
require "footer.php"
?>
</body>

</html>
