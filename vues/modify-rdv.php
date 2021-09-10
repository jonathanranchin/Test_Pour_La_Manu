<?php
require_once ("models/patient.php");
require_once ("models/appointment.php");
require_once ('models/appointmentDataService.php');
$appId =  $_SESSION['modify-rdv-id'] ;
$title = "Modify Rendez Vous";
require 'navbar.php';
?>

<body>
    <div class="container">
    <h1>Modifiez un rendez vous!</h1>
        <div class="row mt-3">
            <div class="col-12">
            <a href="index.php?action=<?php echo $endpoint2 ?>" class="btn btn-primary btn-sm mb-2">
                    < Retour</a>

                <form action="index.php" method="get" class="form">
                    <div class="form-group">
                        <label for="">Date du rendez-vous</label>
                        <input name="date" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Heure du rendez-vous</label>
                        <input name="hour" type="time" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Id du rendez vous</label>
                        <p name="idPatients" id="<?=$appId ?>" class="form-control"><?=$appId ?></p>
                    </div> 
                    <input type="hidden" name="id" value="<?= $appId ?>">

                    <input type="hidden" name="action" value="modify_rdv">
                    <button class="btn btn-success float-right">Modifier le rendez-vous</button>
                    </form>

                </div>
            </div>
        </div>
        <?php
require "footer.php"
?>
