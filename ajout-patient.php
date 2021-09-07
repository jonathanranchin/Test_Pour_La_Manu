<?php
$title = "Liste des Rendez Vous";
require 'navbar.php';
?>
<body>
    <div class="container bg-secondary">
    <h1>Ajoutez un patient!</h1>
        <div class="row mt-3">
            <div class="col-12">
                <form action="../controllers/ajout-patient.php" method="POST" class="form" >
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
                    <button class="btn btn-success float-right">Créer le patient</button>
                </form>
            </div>
        </div>
    </div>
    <?php
require "footer.php"
?>
</body>

</html>
