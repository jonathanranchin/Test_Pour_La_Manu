<?php

$patientId = $_GET['id'];
require_once ('models/patientDataService.php');
require_once ('models/appointmentDataService.php');
$patient =  getOnePatient($patientId);
$appointments = getOnePatientAppointments($patientId);
?>
<?php
$title = "Profil Patient";
require 'navbar.php';
?>
<body>
    <div class="container">
    <h1>Profil du patient</h1>
        <div class="row mt-3">
            <div class="col-12">
                        <div class="card-header"><?= $patient->firstname ?> <?= $patient->lastname ?></div>

                        <div class="card-body">
                            <ul>
                                <li>Né le : <?= $patient->getBirthdate() ?></li>
                                <li>Téléphone : <?= $patient->phone ?></li>
                                <li>E-mail : <?= $patient->mail ?></li>
                                <li><form action="index.php" method="GET">
                                        <input type="hidden" name="action" value="go_modify_patient">
                                        <input type="hidden" name="id" value="<?= $patientId?>">
                                        <button class="btn btn-primary float-left">Modifier ce patient</button>
                                
                            </form></li>
                            </ul>
                            
                        </div>
                        <div>
                            
                        </div>
                        <div class="card-footer pb-5 mb-2">
                            <form action="index.php" method="get" class="form">
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input name="date" type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Heure</label>
                                    <input name="hour" type="time" class="form-control">
                                </div>
                                <div class="form-group">
                                <input type="hidden" name="idPatients" value="<?= $patientId?>">
                                <input type="hidden" name="action" value="new_appointment">
                                <button class="btn btn-success float-right">Ajoutez un Rendez Vous</button>
                                </div>
                            </form>
                        </div>
            </div>

            <?php foreach ($appointments as $appointment) :
                ?>
                <div class="card ml-3">
                    <div class="body">
                        Rendez-vous le <?= date('d/m/Y', strtotime($appointment['dateHour'])) ?>
                        à <?= date('H:i', strtotime($appointment['dateHour'])) ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
    </div>

    <?php
require "footer.php"
?>
