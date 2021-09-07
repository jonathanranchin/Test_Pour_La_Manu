<?php
if (!empty($_POST)) {

    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');

    $request = 'INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
                VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';

    $response = $bdd->prepare($request);

    $response->execute([
        'lastname' => $_POST['lastname'],
        'firstname' => $_POST['firstname'],
        'birthdate' => $_POST['birthdate'],
        'phone' => $_POST['phone'],
        'mail' => $_POST['mail'],
    ]);
    Header("Location: ../liste-patients.php");
}
?>