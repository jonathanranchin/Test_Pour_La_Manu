<?php
session_start();
$variable = $_SESSION['myid'] ;
if (!empty($_POST)) {

    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
    $request = "UPDATE appointments SET dateHour = :dateHour WHERE id = '$variable'";

    $response = $bdd->prepare($request);

    $response->execute([
        'dateHour' => $_POST['date'] . ' ' . $_POST['hour'] . ':00',
    ]);
    Header("Location: liste-rdv.php");
}
?>

<?php
$title = "Modify Rendez Vous";
require 'navbar.php';
?>

<body>
    <div class="container">
    <h1>Modifiez un rendez vous!</h1>
        <div class="row mt-3">
            <div class="col-12">
                <a href="liste-rdv.php" class="btn btn-primary btn-sm mb-2">
                    < Retour</a>

                <form action="modify-rdv.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="">Date du rendez-vous</label>
                        <input name="date" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Heure du rendez-vous</label>
                        <input name="hour" type="time" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Id du rendez vous</label>
                        <p name="idPatients" id="<?=$variable?>" class="form-control"><?=$variable?></p>
                    </div> 
                    <button class="btn btn-success float-right">Modifier le RDV</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
require "footer.php"
?>
    </body>
    </html>
