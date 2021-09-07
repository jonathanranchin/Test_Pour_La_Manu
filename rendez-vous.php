<?php
$title = "Rendez Vous";
session_start();
  $_SESSION['myid'] = $_GET['rdvId'];
$var_value = $_GET['rdvId'];
require 'navbar.php';
?>
<?php

$bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
$request = "SELECT *
FROM appointments
WHERE  id = $var_value";

$response = $bdd->query($request);

$appointment = $response->fetch(PDO::FETCH_ASSOC);
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
                                    <form action="liste-rdv.php" method="post">
                                        <input type='submit' name='delete-patient'>
                                    </form>
                                <td>
                            </tr>
                        <?php ?>
                    </tbody>
                </table>

                <a href="modify-rdv.php?rdvId=<?php echo $var_value ?>"class="btn btn-primary float-right">Modifier ce RDV</a>

            </div>
        </div>
    </div>
<?php
require "footer.php"
?>
</body>