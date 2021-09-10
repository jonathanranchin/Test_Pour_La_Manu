<?php
include_once 'patient.php';
class appointmentModel {
    public $id;
    public  $dateHour;
    public  $idPatients;
    public $patient = null;

    //Constructor
    public function __construct( $id,
    $dateHour,
    $idPatients) {
        //$p['id']
        $this->id = $id;
        $this->dateHour = $dateHour;
        $this->idPatients = $idPatients;
    }
    //Destructor
    public function __destruct()
    {
        //Possibility to add special acts or method coding.
    }
    //Getters
    public function getDateHour()
    {
        $date = new DateTime($this->dateHour);
        return $date->format('Y-m-d H:i:s');
    }
    public function getIdPatients()
    {
        return $this->idPatients;
    }
    //Setters
    public function setDateHour($dateHour)
    {
        $this->dateHour= $dateHour;
    }
    public function setIdPatients($idPatients)
    {
        $this->idPatients = $idPatients;
    }
    public function setPatient($patient)
    {
        if(isset($patient)){
            $this->patient = $patient;
        }
    }
    public function getPatientFirstName(){
        if(isset($this->patient)){
            return $this->patient->firstname;
        } else {
            return 'N/A';
        }
    }
    public function getPatientLastName(){
        if(isset($this->patient)){
            return $this->patient->lastname;
        }
        else {
            return 'N/A';
        }
    }
}
?>