<?php

require_once ("patient.php");
//CRUD
function getAllPatients(){
    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
    $request = "SELECT * FROM patients";
    $response = $bdd->query($request);
    $results = $response->fetchAll(PDO::FETCH_ASSOC);
    $patients = array();

    foreach($results as $patient) {
        $existingPatient = new patientModel($patient['id'],$patient['lastname'],$patient['firstname'],$patient['birthdate'],$patient['phone'],$patient['mail']);
        array_push($patients, $existingPatient );
    }

    return $patients;
}

function getOnePatient($id){
    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');

    $request = 'SELECT * FROM patients WHERE id = ' . $id;
    $response = $bdd->query($request);
    $result = $response->fetch(PDO::FETCH_ASSOC);
    $existingPatient = new patientModel($result["id"],$result["lastname"] ,$result["firstname"],$result["birthdate"],$result["phone"],$result["mail"]);

    return $existingPatient;
}

function deletePatient($id){
        $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
        $stmt = $bdd->prepare("DELETE FROM appointments WHERE idPatients=:id");
        $stmt1 = $bdd->prepare("DELETE FROM patients WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt1->bindParam(':id', $id);
        $stmt->execute();
        $stmt1->execute();
}

function modifyPatient($id){ 

    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
    $request = "UPDATE patients SET lastname = :lastname, firstname = :firstname, birthdate = :birthdate, phone= :phone, mail = :mail WHERE id = '$id'";

    $response = $bdd->prepare($request);

    $response->execute([
        'lastname' => $_GET['lastname'],
        'firstname' => $_GET['firstname'],
        'birthdate' => $_GET['birthdate'],
        'phone' => $_GET['phone'],
        'mail' => $_GET['mail'],
    ]);
}
function addPatient() {

    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');

    $request = 'INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
                VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';

    $response = $bdd->prepare($request);

    $response->execute([
        'lastname' => $_GET['lastname'],
        'firstname' => $_GET['firstname'],
        'birthdate' => $_GET['birthdate'],
        'phone' => $_GET['phone'],
        'mail' => $_GET['mail'],
    ]);

}

function addPatientAndAppointment() {

    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
    
    $request = 'INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
                VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';
    
    $request1 = 'INSERT INTO appointments(dateHour, idPatients)
                VALUES (:dateHour, :idPatients)';
    
    $response = $bdd->prepare($request);
    
    $response->execute([
        'lastname' => $_GET['lastname'],
        'firstname' => $_GET['firstname'],
        'birthdate' => $_GET['birthdate'],
        'phone' => $_GET['phone'],
        'mail' => $_GET['mail'],
    ]);

    $response1 = $bdd->prepare($request1);
    
    $query = "SELECT MAX(id) FROM patients;";
    $statement = $bdd->prepare($query);
    $statement->execute();
    $idPatient = $statement->fetch();

    $response1->execute([
        'dateHour' => $_GET['date'] . ' ' . $_GET['hour'] . ':00',
        'idPatients' => $idPatient[0],
    ]);
}

?>