
/* SIDE BAR MENU */
$('.sidebar-menu').tree()

/*  
    * DATA TABLES
*/
$(".tablas").DataTable({
    responsive: true,
    "language": {
        "url": "",
        "decimal": ",",
        "thousands": ".",
        "emptyTable": "No hay datos disponibles",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
        "infoEmpty": "Mostrando 0 a 0 de 0 registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "infoPostFix": "",
        "sSearch": "Buscar",
        "thousandsSeparator": ",",
        "lengthMenu": "Mostrar _MENU_ registros",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "zeroRecords": "No se encontraron resultados",
        "paginate": {
          "first": "Primero",
          "previous": "Anterior",
          "next": "Siguiente",
          "last": "Último"
        },
        "aria": {
          "sortAscending": ": Activar para ordenar la columna de manera ascendente",
          "sortDescending": ": Activar para ordenar la columna de manera descendente"
        }     
    },
});


