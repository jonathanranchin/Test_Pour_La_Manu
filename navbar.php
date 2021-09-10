<?php
$endpoint1 = "list_patients";
$endpoint2 = "list_appointments";
$endpoint3 = "add_patient_and_appointment";
$endpoint4 = "add_patient";
$endpoint5 = "add_appointment";
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <script src="https://use.fontawesome.com/4cf2843ab9.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap');
      html,
      body { 
        font-family: 'Quicksand', sans-serif;
      }
    </style>
</head>
<nav class="navbar navbar-expand-md navbar-dark bg-dark top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=<?php echo $endpoint1; ?>">Patients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=<?php echo $endpoint2; ?>">Rendez Vous</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ajouter des patients et des rendez vous!</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="../index.php?action=<?php echo $endpoint4; ?>">Ajoutez un patient</a>
              <a class="dropdown-item" href="../index.php?action=<?php echo $endpoint5; ?>">Ajoutez un rendez vous</a>
              <a class="dropdown-item" href="../index.php?action=<?php echo $endpoint3; ?>">Ajoutez un patient et un rendez vous</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
