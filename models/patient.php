<?php
class patientModel {
    public $id;
    public  $lastname;
    public  $firstname;
    public  $birthdateString;
    public  $phone =  null;
    public  $mail;
    public $appointments = array();
    //Constructor
    public function __construct($id, $lastname, $firstname, $birthdate, $phone, $mail) {
        //$p['id']
        $this->id = $id;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthdateString = $birthdate;
        $this->phone = $phone;
        $this->mail = $mail;
    }
    //Destructor
    public function __destruct()
    {
        //Possibility to add special acts or method coding.
    }
    //Getters
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getFirstName()
    {
        return $this->firstname;
    }
    public function getBirthdate()
    {
        $date = new DateTime($this->birthdateString);
        return $date->format('Y-d-m');
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getMail()
    {
        return $this->mail;
    }
    //Setters
    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }
    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }
    public function setBirthdate($birthdateString)
    {
       $this->birthdateString = $birthdateString;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    //Set Appointment
    public function setAppointments($appointments){
        if(isset($appointments)){
            $this->appointments = $appointments;
        }
    }
    public function addAppointment($appointment){
        $filter = array_filter($patients, function($patient) { return $patient->id == $this->id; });
        if(!isset($filter)){
            array_push($this->appointments, $appointment );
        }
    }
    public function removeAppointment($appointment){

        $index = 0;
        $filter = array_filter($patients, function($patient) { return $patient->id == $this->id; });
        if(isset($filter)){
            foreach($this->appointments as $existingAppointment) {
                if($existingAppointment->id == $appointment->id) {
                    unset($this->appointments[$index]);
                }
                $index++;
            }
        }
    }
}
?>