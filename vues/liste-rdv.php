<?php
require_once ("models/patient.php");
require_once ("models/appointment.php");
require_once ('models/appointmentDataService.php');
$appointments = getAllAppointments();
$title = "Liste des Rendez Vous";
$endpointAppointment = "appointment";
$endpointPatient = "patient";
require 'navbar.php';
?>

<body>
    <div class="container">
    <h1>Tous les rendez-vous de la base de donnée</h1>
        <div class="row mt-3">
            <div class="col-12">
                <table class="table border" id="liste-patients">
                    <thead>
                        <tr>
                            <th>Date et heure</th>
                            <th>Patient</th>
                            <th>Page du Rendez Vous (id)</th>
                            <th>Supprimer ce rdv</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($appointments as $appointment): ?>
                            <tr>
                                <td><?=$appointment->getDateHour()?></td>
                                <td>
                                    <a href="index.php?action=<?php echo $endpointPatient?>&amp;id=<?php echo $appointment->idPatients?>"
                                    ><?=$appointment->getPatientFirstName();?> <?=$appointment->getPatientLastName()?></a>
                                </td>
                                <td>
                                    <a href="index.php?action=<?php echo $endpointAppointment?>&amp;id=<?php echo $appointment->id?>">Page du rdv (<?php echo $appointment->id; ?>)</a>
                                </td>
                                <td>
                                <form action="index.php" method="GET">
                                        <input type="hidden" name="action" value="remove_rdv">
                                        <a class="btn btn-warning float-right" href="index.php?action=remove_rdv&amp;id=<?php echo $appointment->id;?>"
                                >Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <a href="ajout-rdv.php" class="btn btn-primary float-right">Ajouter un RDV</a>

            </div>
        </div>
    </div>
    <?php
require "footer.php";
?>


