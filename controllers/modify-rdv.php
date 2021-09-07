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
    Header("Location: ../liste-rdv.php");
}
?>