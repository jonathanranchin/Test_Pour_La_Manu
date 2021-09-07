<?php
session_start();
$variable = $_SESSION['id']; 
if (!empty($_POST)) {

    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
    $request = "UPDATE patients SET lastname = :lastname, firstname = :firstname, birthdate = :birthdate, phone= :phone, mail = :mail WHERE id = '$variable'";

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