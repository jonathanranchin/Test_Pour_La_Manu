<?php
$bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');

$request = "SELECT
ap.id as apId,
ap.datehour,
ap.idPatients,
p.id as pId,
p.lastname,
p.firstname,
p.birthdate,
p.phone,
p.mail
from appointments as ap
inner join patients as
p on ap.idPatients = p.id";
$response = $bdd->query($request);

$appointments = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
$title = "Liste des Rendez Vous";
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
                                <td><?=$appointment['datehour']?></td>
                                <td>
                                    <a href="profil-patient.php?id=<?=$appointment['idPatients']?>"><?=$appointment['firstname']?> <?=$appointment['lastname']?></a>
                                </td>
                                <td>
                                    <a href="rendez-vous.php?rdvId=<?php print $appointment['apId']?>"?>Page du rdv (<?php echo $appointment['apId']; ?>)</a>
                                </td>
                                <td>
                                <form action="liste-rdv.php" method="post">
                                    <input type='submit' name='delete-rdv'>
                                </form>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        <?php
if (isset($_POST['delete-rdv'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
    $variable = $appointment['apId'];
    $stmt = $bdd->prepare("DELETE FROM appointments WHERE id=:id");
    $stmt->bindParam(':id', $variable);
    $stmt->execute();
    echo "<meta http-equiv='refresh' content='0'>";
}?>
                    </tbody>
                </table>
                <a href="ajout-rdv.php" class="btn btn-primary float-right">Ajouter un RDV</a>

            </div>
        </div>
    </div>
    <?php
require "footer.php"
?>
</body>

</html>


