<?php
require_once ("models/patient.php");
require_once ("models/appointment.php");
$title = "Ajoutez un patient";
$endpointAddPatient = "add_patient";
require 'navbar.php';
?>
<body>
    <div class="container">
    <h1>Ajoutez un patient!</h1>
        <div class="row mt-3">
            <div class="col-12">
            <a href="index.php?action=<?php echo $endpoint1 ?>" class="btn btn-primary btn-sm mb-2">
                    < Retour</a>
                <form action="index.php" method="GET" class="form" >
                    <div class="form-group">
                        <label for="">Firstname</label>
                        <input name="firstname" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Lastname</label>
                        <input name="lastname" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Birthdate</label>
                        <input name="birthdate" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input name="phone" type="tel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mail</label>
                        <input name="mail" type="email" class="form-control">
                    </div>
                    <input type="hidden" name="action" value="new_patient">
                    <button class="btn btn-success float-right">Ajoutez un Patient</button>
                </form>
            </div>
        </div>
    </div>
    <?php
require "footer.php"
?>
