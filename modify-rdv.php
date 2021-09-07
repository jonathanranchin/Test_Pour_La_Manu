<?php
session_start();
$variable = $_SESSION['myid'] ;
$title = "Modify Rendez Vous";
require 'navbar.php';
?>

<body>
    <div class="container">
    <h1>Modifiez un rendez vous!</h1>
        <div class="row mt-3">
            <div class="col-12">
                <a href="liste-rdv.php" class="btn btn-primary btn-sm mb-2">
                    < Retour</a>

                <form action="../controllers/modify-rdv.php" method="POST" class="form">
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
                        <p name="idPatients" id="<?=$variable?>" class="form-control"><?=$variable?></p>
                    </div> 
                    <button class="btn btn-success float-right">Modifier le RDV</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
require "footer.php"
?>
    </body>
    </html>
