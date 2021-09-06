<?php
session_start();
$variable = $_SESSION['id']; 
$title = "Modifier le profil d'un patient";
require 'navbar.php';
if (!empty($_POST)) {

    $bdd = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8;port=3306', 'root', '');
    $request = "UPDATE patients SET lastname = :lastname, firstname = :firstname, birthdate = :birthdate, phone= :phone, mail = :mail WHERE id = '$variable'";

    $response = $bdd->prepare($request);

    $response->execute([
        'lastname' => $_POST['lastname'],
        'firstname' => $_POST['firstname'],
        'birthdate' => $_POST['birthdate'],
        'phone' => $_POST['phone'],
        'mail' => $_POST['mail'],
    ]);
    Header("Location: liste-patients.php");
}
?>
<body>
    <div class="container">
    <h1>Modifier votre patient</h1>
        <div class="row mt-3">
            <div class="col-12">
                <form action="modify-patient.php" method="POST" class="form">
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
                    <div class="form-group">
                        <label for="">Id du patient</label>
                        <p name="id" id="<?=$variable?>" class="form-control"><?=$variable?></p>
                    </div> 

                    <button class="btn btn-success float-right">Modifier le patient</button>
                </form>
            </div>
        </div>
    </div>

<?php
require "footer.php"
?>