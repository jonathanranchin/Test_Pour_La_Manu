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

    Header("Location: ../liste-rdv.php");
}
?>