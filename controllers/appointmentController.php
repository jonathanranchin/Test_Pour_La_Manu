<?php
require_once("models/appointment.php");
require_once("models/patient.php");
require_once("models/appointmentDataService.php");
function getAppointments(){
    $appointments = getAllAppointments();
    require('vues/liste-rdv.php');
}
function findAppointment($id){
    $appointment = getOneAppointment($id);
    require('vues/rendez-vous.php');
}
function removeAppointment($id) {
    deleteAppointment($id);
    Header('Location: .?action=list_appointments');
}
function goCreateAppointment(){
    require('vues/ajout-rdv.php');
}
function newAppointment(){
    addAppointment();
    Header('Location: .?action=list_appointments');
}
function goUpdateAppointment($id){
    session_start();
    $_SESSION['modify-rdv-id'] = $id;
    require("vues/modify-rdv.php");
}
function updateAppointment($id){
    modifyAppointment($id);
    Header('Location: .?action=list_appointments');
}
function getPatientAppointments($id){
    $appointments = getOnePatientAppointments($id);
}
?>