<?php
if (!empty($_POST)) {
    $arr = $_POST;
    static $mail;
    $mail = $arr['mail'];
$bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');

$request = 'INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
            VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';

$request1 = 'INSERT INTO appointments(dateHour, idPatients)
             VALUES (:dateHour, :idPatients)';

$response = $bdd->prepare($request);

$response->execute([
    'lastname' => $_POST['lastname'],
    'firstname' => $_POST['firstname'],
    'birthdate' => $_POST['birthdate'],
    'phone' => $_POST['phone'],
    'mail' => $_POST['mail'],
]);

$response1 = $bdd->prepare($request1);

$query = "SELECT MAX(id) FROM patients;";
$statement = $bdd->prepare($query);
$statement->execute();
$idPatient = $statement->fetch();
$response1->execute([
    'dateHour' => $_POST['date'] . ' ' . $_POST['hour'] . ':00',
    'idPatients' => $idPatient[0],
]);
Header("Location: ../liste-patients.php");
}
?>