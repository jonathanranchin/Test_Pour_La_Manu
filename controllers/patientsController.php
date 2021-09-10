<?php
require_once("models/appointment.php");
require_once("models/patient.php");
require_once("models/patientDataService.php");

function home(){
    require('vues/home.php');

}
function listPatients(){
    $patients = getAllPatients();
    require('vues/liste-patients.php');
}
function onePatient($id){
    $patient = getOnePatient($id);
    require('vues/profil-patient.php');
}
function removePatient($id){
    deletePatient($id);
    Header('Location: index.php?action=list_patients');
}
function updatePatient($id){ 
    modifyPatient($id);
    Header('Location: index.php?action=list_patients');
}
function goUpdatePatient($id){
    session_start();
    $_SESSION['modify-patient-id'] = $id;
    require("vues/modify-patient.php");
}
function newPatient() {
    addPatient();
    Header('Location: index.php?action=list_patients');
}
function goCreateNewPatientWithAppointment() {
    require('vues/ajout-patient-rendez-vous.php');
}
function goCreatePatient() {
    require('vues/ajout-patient.php');
}
function newPatientWithAppointment() {
    addPatientAndAppointment();
    Header('Location: .?action=list_patients');
}

?>