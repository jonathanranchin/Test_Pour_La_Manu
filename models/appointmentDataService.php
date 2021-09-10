<?php
require_once("appointment.php");
require_once("patient.php");
//CRUD

function getAllAppointments(){

    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');

    $request = "SELECT
    ap.id as apId,
    ap.datehour,
    ap.idPatients,
    p.id as pId,
    p.lastname,
    p.firstname,
    p.birthdate,
    p.phone,
    p.mail
    from appointments as ap
    inner join patients as
    p on ap.idPatients = p.id";
    $response = $bdd->query($request);

    $results = $response->fetchAll(PDO::FETCH_ASSOC);
    $patients = array();
    $appointments = array();

    foreach($results as $patientWithAppointments) {
        $patientId = $patientWithAppointments['pId'];
            $existingPatient = new patientModel($patientWithAppointments['pId'],
            $patientWithAppointments['lastname'],
            $patientWithAppointments['firstname'],
            $patientWithAppointments['birthdate'],
            $patientWithAppointments['phone'],
            $patientWithAppointments['mail']);
        $existingAppointment = new appointmentModel($patientWithAppointments['apId'],$patientWithAppointments['datehour'],$patientWithAppointments['idPatients']);
            $existingAppointment->setPatient($existingPatient);
        array_push($appointments, $existingAppointment );
    }
    
    return $appointments;
}

function getOneAppointment($id){
    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
    $request = "SELECT *
    FROM appointments
    WHERE  id = $id";

    $response = $bdd->query($request);

    $appointment = $response->fetch(PDO::FETCH_ASSOC);
    
    return $appointment;
    
}

function deleteAppointment($id) {
        $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
        $stmt = $bdd->prepare("DELETE FROM appointments WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        echo "<meta http-equiv='refresh' content='0'>";
}

function addAppointment(){

        $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
    
        $request = 'INSERT INTO appointments(dateHour, idPatients)
                    VALUES (:dateHour, :idPatients)';
    
        $response = $bdd->prepare($request);
    
        $response->execute([
            'dateHour' => $_GET['date'] . ' ' . $_GET['hour'] . ':00',
            'idPatients' => $_GET['idPatients'],
        ]);
}

function modifyAppointment($id){

        $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
        $request = "UPDATE appointments SET dateHour = :dateHour WHERE id = '$id'";
    
        $response = $bdd->prepare($request);
    
        $response->execute([
            'dateHour' => $_GET['date'] . ' ' . $_GET['hour'] . ':00',
        ]);
}

function getOnePatientAppointments($id) {

$bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');

$request = 'SELECT * FROM appointments WHERE idPatients = ' . $id;
$response = $bdd->query($request);

$appointments = $response->fetchAll(PDO::FETCH_ASSOC);

return $appointments;

}

?>