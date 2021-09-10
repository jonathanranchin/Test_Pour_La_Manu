<?php
require_once ("models/patient.php");
require_once ("models/appointment.php");
require_once ("models/appointmentDataService.php");
$patients = getAllPatients();
$title = "Liste des Rendez Vous";
require 'navbar.php';

?>
<body>
    <div class="container">
    <h1>Ajoutez un  rendez vous!</h1>
        <div class="row mt-3">
            <div class="col-12">
                <a href="index.php?action=<?php echo $endpoint2 ?>" class="btn btn-primary btn-sm mb-2">
                    < Retour</a>
                <form action="index.php" method="GET" class="form">
                    <div class="form-group">
                        <label for="">Date du rendez-vous</label>
                        <input name="date" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Heure du rendez-vous</label>
                        <input name="hour" type="time" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Choisir un patient</label>
                        <select name="idPatients" id="" class="form-control">
                            <?php foreach ($patients as $patient):?>
                                <option value="<?=$patient->id?>"><?=$patient->lastname?> <?=$patient->firstname?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <input type="hidden" name="action" value="new_appointment">
                        <button class="btn btn-success float-right">Ajoutez un Rendez Vous</button>
                        
                    </form>
                </div>
            </div>
        </div>
        <?php
require "footer.php"
?>
