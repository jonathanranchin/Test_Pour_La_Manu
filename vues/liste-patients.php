<?php 
require_once ("models/patient.php");
require_once ('models/patientDataService.php');
$patients =  getAllPatients();
$title = "Liste des patients";
require 'navbar.php';
$endpointPatient = 'patient';
?>
<body>
    <div class="container" style="height: 100%; max-height: 100%">
    <h1>Tous les patients de la base de donnée</h1>
        <div class="row mt-3">
            <div class="col-12">

                <table class="table border" id="liste-patients">
                    <thead>
                        <tr>
                            <th>Identifiant</th>
                            <th>Nom de Famille</th>
                            <th>Prénom</th>
                            <th>Supprimer ce patient</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($patients as $p): ?>
                            <tr>
                                <td><?=$p->id?></td>
                                <td>
                                <a href="index.php?action=<?php echo $endpointPatient?>&amp;id=<?php echo $p->id?>"
                                ><?=$p->lastname?></a>
                                </td>
                                <td><?=$p->firstname?></td>
                                <td>
                                    <form action="index.php" method="GET">
                                        <input type="hidden" name="action" value="remove_patient">
                                        <a class="btn btn-warning float-right" href="index.php?action=remove_patient&amp;id=<?php echo $p->id?>"
                                >Supprimer</a>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <a href="ajout-patient.php" class="btn btn-primary float-right">Ajouter un patient</a>

            </div>
        </div>
    </div>
    <?php
require "footer.php"
?>
