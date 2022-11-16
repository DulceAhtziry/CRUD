$(document).ready(function() {
    var table = $('#tablaVistas').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );