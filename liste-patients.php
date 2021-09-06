<?php
$bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
$request = "SELECT * FROM patients;";
$response = $bdd->query($request);

$patients = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
$title = "Liste des patients";
require 'navbar.php';
?>

<body>
    <div class="container">
    <h1>Tous les patients de la base de donnée</h1>
        <div class="row mt-3">
            <div class="col-12">

                <table class="table" id="liste-patients">
                    <thead>
                        <tr>
                            <th>Identifiant</th>
                            <th>Nom de Famille</th>
                            <th>Prénom</th>
                            <th>Anniversaire</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Supprimer ce patient</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($patients as $p): ?>
                            <tr>
                                <td><?=$p['id']?></td>
                                <td>
                                    <a href="profil-patient.php?id=<?=$p['id']?>"><?=$p['lastname']?></a>
                                </td>
                                <td><?=$p['firstname']?></td>
                                <td><?=$p['birthdate']?></td>
                                <td><?=$p['phone']?></td>
                                <td><?=$p['mail']?></td>
                                <td>
                                    <form action="liste-patients.php" method="post">
                                        <input type='submit' name='delete-rdv'>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        <?php
if (isset($_POST['delete-rdv'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
    $variable = $p['id'];
    $stmt = $bdd->prepare("DELETE FROM appointments WHERE idPatients=:id");
    $stmt1 = $bdd->prepare("DELETE FROM patients WHERE id=:id");
    $stmt->bindParam(':id', $variable);
    $stmt1->bindParam(':id', $variable);
    $stmt->execute();
    $stmt1->execute();
    echo "<meta http-equiv='refresh' content='0'>";
}?>
                    </tbody>
                </table>

                <a href="ajout-patient.php" class="btn btn-primary float-right">Ajouter un patient</a>

            </div>
        </div>
    </div>
    <?php
require "footer.php"
?>
</body>

</html>
