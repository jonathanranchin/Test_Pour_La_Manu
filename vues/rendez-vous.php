<?php
$appId = $_GET['id'];

require_once ("models/patient.php");
require_once ("models/appointment.php");
require_once ('controllers/appointmentController.php');
$title = "Rendez Vous";
require 'navbar.php';

?>
<body>
    <div class="container">
    <h1>Le rendez-vous que vous avez selectionné</h1>
        <div class="row mt-3">
            <div class="col-12">
                <table class="table border">
                    <thead>
                        <tr>
                            <th>Date et heure</th>
                            <th>RDV ID</th>
                            <th>Patient ID</th>
                            <th>Supprimer ce rendez vous</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php ?>
                            <tr>
                                <td><?=$appointment['dateHour']?></td>
                                <td> <?=$appointment['id']?></a>
                                </td>
                                <td><?=$appointment['idPatients']?>
                                </td>
                                <td>
                                <form action="index.php" method="GET">
                                        <input type="hidden" name="action" value="remove_rdv">
                                        <a class="btn btn-warning float-right" href="index.php?action=remove_rdv&amp;id=<?php echo $appointment['id'];?>"
                                >Supprimer</a>
                                <td>
                            </tr>
                        <?php ?>
                    </tbody>
                </table>
                <form action="index.php" method="GET">
                                        <input type="hidden" name="action" value="go_modify_rdv">
                                        <input type="hidden" name="id" value="<?= $appId?>">
                                        <button class="btn btn-primary float-right">Modifier ce Rendez-vous</button>
                                
                            </form>
            </div>
        </div>
    </div>
<?php
require "footer.php"
?>
