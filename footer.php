<p></p>
<section class="relative-bottom">
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <div class="container p-4 pb-0">
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <p class="me-3">Rejoignez Nous !!</p>
          <button type="button" class="btn btn-outline-light btn-rounded">
            S'enregistrer
          </button>
        </p>
      </section>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="https://medlink.fr/">MEDLINK.fr</a>
    </div>
  </footer>
</section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js" ></script>
<script>
$(document).ready(function() {
    $('#liste-patients').DataTable( {
        "language": {
            "lengthMenu": "_MENU_ Patients par page",
            "zeroRecords": "Résultat vide",
            "info": "Page _PAGE_ de _PAGES_",
            "search" : "Rechercher",
            "oPaginate": {
                    "sFirst":    "Premier",
                    "sLast":     "Dernier",
                    "sNext":     "Suivant",
                    "sPrevious": "Précédent"
                },
            "infoEmpty": "Rien de disponible",
            "infoFiltered": "(Trié de _MAX_ résultats totaux)"
        }
    } );
} );
</script>