<?php
if (!empty($_POST)) {

    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');

    $request = 'INSERT INTO appointments(dateHour, idPatients)
                VALUES (:dateHour, :idPatients)';

    $response = $bdd->prepare($request);

    $response->execute([
        'dateHour' => $_POST['date'] . ' ' . $_POST['hour'] . ':00',
        'idPatients' => $_POST['idPatients'],
    ]);

    Header("Location: liste-rdv.php");
}

$bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
$request = 'SELECT id, firstname, lastname FROM patients';
$response = $bdd->query($request);

$patients = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
$title = "Liste des Rendez Vous";
require 'navbar.php';
?>

<body>
    <div class="container">
    <h1>Ajoutez un  rendez vous!</h1>
        <div class="row mt-3">
            <div class="col-12">
                <a href="liste-rdv.php" class="btn btn-primary btn-sm mb-2">
                    < Retour</a>

                <form action="ajout-rdv.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="">Date du rendez-vous</label>
                        <input name="date" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Heure du rendez-vous</label>
                        <input name="hour" type="time" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Choisir un patient</label>
                        <select name="idPatients" id="" class="form-control">
                            <?php foreach ($patients as $p): ?>
                                <option value="<?=$p['id']?>"><?=$p['lastname']?> <?=$p['firstname']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>

                        <button class="btn btn-success float-right">Créer le RDV</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
require "footer.php"
?>
    </body>

    </html>
