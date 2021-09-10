<?php

require_once("controllers/appointmentController.php");
require_once("controllers/patientsController.php");

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'list_patients') {
        listPatients();
    }
    elseif ($_GET['action'] == 'patient') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            onePatient($_GET['id'] );
        }
    }
    elseif ($_GET['action'] == 'list_appointments') {
        getAppointments();
    
    }
    elseif ($_GET['action'] == 'appointment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            findAppointment($_GET['id']);
        }
    }
    elseif ($_GET['action'] == 'add_patient_and_appointment') {
        goCreateNewPatientWithAppointment();
    } elseif($_GET['action'] == 'add_patient') {
        goCreatePatient();
    }
     elseif($_GET['action'] == 'add_appointment') {
        goCreateAppointment();
    }
    elseif ($_GET['action'] == 'new_appointment') {
        newAppointment();
    }
    if($_GET['action'] == 'new_patient_and_appointment'){
        newPatientWithAppointment();
    }
    elseif ($_GET['action'] == 'new_patient') {
        newPatient();
    }
    elseif ($_GET['action'] == 'remove_patient' && $_GET['id']>0) {
        removePatient($_GET['id']);
    }
    elseif ($_GET['action'] == 'remove_appointment') {
        newPatient();
    }
    elseif ($_GET['action'] == 'remove_rdv' && $_GET['id']>0) {
        removeAppointment($_GET['id']);
    }
    elseif ($_GET['action'] == 'go_modify_rdv' && $_GET['id']>0) {
        goUpdateAppointment($_GET['id']);
    }
    elseif ($_GET['action'] == 'modify_rdv' && $_GET['id']>0) {
        updateAppointment($_GET['id']);
    }
    elseif ($_GET['action'] == 'go_modify_patient' && $_GET['id']>0) {
        goUpdatePatient($_GET['id']);
    }
    elseif ($_GET['action'] == 'modify_patient' && $_GET['id']>0) {
        updatePatient($_GET['id']);
    }
} else  { 
    home();
    }
?>