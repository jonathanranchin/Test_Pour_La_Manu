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
Header("Location: liste-patients.php");
}

$title = "Créez un patient et son rendez vous";
require 'navbar.php';
?>

<div class="container">
    <h1>Ajoutez un patient et son rendez vous!</h1>
        <div class="row mt-3">
            <div class="col-12">
                <form action="ajout-patient-rendez-vous.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="">Firstname</label>
                        <input name="firstname" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Lastname</label>
                        <input name="lastname" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Birthdate</label>
                        <input name="birthdate" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input name="phone" type="tel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mail</label>
                        <input name="mail" type="email" class="form-control">
                    </div>
                    
                    <form action="ajout-patient-rendez-vous.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="">Date du rendez-vous</label>
                        <input name="date" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Heure du rendez-vous</label>
                        <input name="hour" type="time" class="form-control">
                    </div>
                    <button class="btn btn-success float-right">Créer le patient</button>
                </form>
            </div>
        </div>
    </div>


<?php
require "footer.php"
?>