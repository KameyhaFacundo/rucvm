<?php namespace Views1;

	$template = new Template();

	class Template{

		public function __construct(){
			?>



<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?php echo URL; ?>Views1/template/colorlib/images/punio_icon_3.png" />
    <title>RUCVM v2.0</title>
    

    <!-- Bootstrap core CSS-->

   
    <!-- Page level plugin CSS-->
    <link href="<?php echo URL; ?>Views1/template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Bootstrap core CSS-->
    <link href="<?php echo URL; ?>Views1/template/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="<?php echo URL; ?>Views1/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo URL; ?>Views1/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL; ?>Views1/template/vendor/fontawesome-free-5.10.1-web/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" rel="stylesheet" type="text/css"> -->

    <!-- Custom styles for this template-->
    <link href="<?php echo URL; ?>Views1/template/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">




    <style type="text/css">
    	nav.navbar {
    		background-color: #755771;
		}
    </style>
    <style>
      input[type=number]::-webkit-inner-spin-button, 
      input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
      margin: 0; 
}

#loader {
        height: 100%;
        width: 100%;
        background-color: #FFFFFF;
        position: fixed;
        top: 50%;
        left: 50%;
        transform:
        translate(-50%,-50%);
        z-index: 999;
    }
    
    #loader img{
        position: absolute;
        top: 50%;
        left: 50%;
        transform:
        translate(-50%,-50%);
    }

input[type=number] { -moz-appearance:textfield; }
    </style>
    <script type="text/javascript">
      $(function () {
      $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  </head>
<?php if(!isset($_POST['per_dni']) && !isset($_POST['fecha1']) && !isset($_POST['fecha2']) && !isset($_POST['idriesgo'])){?>
  <body id="page-top">

   <nav class="navbar navbar-expand navbar-dark static-top">
       
    <img  width="50" height="25" style="color:white" src="<?php echo URL; ?>Views1/template/colorlib/images/fist-raised-solid.svg"><a class="navbar-brand mr-1" href="<?php if($_SESSION['idinstitucion'] == 16) echo URL.'home/inicio/'; else echo URL.'principal/buscar/'; ?>">RUCVM</a>
    <!--<button class="d-none d-sm-none d-md-block btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>-->
    <?php 
    $ruta1 = $_SERVER['REQUEST_URI'];
    //echo $ruta1;
    if($ruta1 == "/rucvm/principal/buscar/" || $ruta1 == "/rucvm/home/inicio/"){ ?>
      <form id="enviar" role="form" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" method="POST">
        <?php if($_SESSION['idinstitucion'] == 13){ ?>
        <div class="input-group">
          <input id="ca_expediente1" type="text" class="form-control" name="ca_expediente1" placeholder="Nº de expediente" aria-label="Search" aria-describedby="basic-addon2" required="required" value= "<?php echo $_POST['ca_expediente1']; ?>" autocomplete="off">
          <div class="input-group-append">
            <button id="buscar" class="btn btn-primary" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      <?php }elseif($_SESSION['idinstitucion'] != 16){ ?>
        <div class="input-group">
          <input id="per_dni1" type="number" class="form-control" name="per_dni1" placeholder="Ingrese DNI" aria-label="Search" aria-describedby="basic-addon2" required="required" min="1000000" max="100000000" value= "<?php echo $_POST['per_dni1']; ?>">
          <div class="input-group-append">
            <button id="buscar" class="btn btn-primary" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      <?php }else{ ?>
        <div class="input-group">
          <input id="sum_numero1" type="text" class="form-control" name="sum_numero1" placeholder="Nº Sumario" aria-label="Search" aria-describedby="basic-addon2" required="required" value= "<?php echo $_POST['sum_numero1']; ?>" autocomplete="off">
          <div class="input-group-append">
            <button id="buscar" class="btn btn-primary" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      <?php } ?>
      </form>
      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php if($_SESSION['idinstitucion'] == 13){ ?><img  width="50" height="25" style="color:white" src="<?php echo URL; ?>Views1/template/colorlib/images/policia-blanco.svg"><?php }else{ ?><i class="fas fa-user-circle fa-fw"></i> <?php } ?>
            <?php echo $_SESSION['username']; ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">Cerrar Sesión</a>
          </div>
        </li>
      </ul>
</nav>
<?php 
        }else{ ?>
        <div class="input-group">
          <div class="input-group-append">
          </div>
        </div>
      </nav>
      <?php }
     }
		}
    
		public function __destruct(){
      ?>
    
    
    
     <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="eliminarModalCenterTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eliminarModalLongTitle">Salir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>Está a punto de cerrar sesión ¿Desea continuar?</p>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href=../../log/logout class="btn btn-primary">Aceptar</a>
        
        
      </div>
    </div>
  </div>

  </div>
    
         <div class="modal fade" id="logoutModal1" tabindex="-1" role="dialog" aria-labelledby="eliminarModalCenterTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eliminarModalLongTitle">Salir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>Está a punto de cerrar sesión ¿Desea continuar?</p>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="<?php echo URL.'log/logout/'; ?>" class="btn btn-primary">Aceptar</a>
        
        
      </div>
    </div>
  </div>


<!-- The Modal -->
<div class="modal" id="my1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
  </div>

  <!--<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3>Cabecera de la ventana</h3>
           </div>
           <div class="modal-body">
              <h4>Texto de la ventana</h4>
              Mas texto en la ventana.    
       </div>
           <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
           </div>
      </div>
   </div>
</div>-->
  <!--<div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLongTitle">RUCVM v2.0</h5>
      </div>
      <div class="modal-body">
          <p>Bienvenido <b> <?php //echo $_SESSION['u_nombre'];?> </b>!</p>         
      </div>
    </div>
  </div>
  </div>-->
      <script type="text/javascript">
      $('#buscar').on('click', function(event) {
        event.preventDefault();
        var per_dni1 = $('#per_dni1').val();
        var validacion=0;

        if (validacion!=0) {
          $.ajax({
            url: '<?php echo URL; ?>Controllers1/principalController',
            type: 'POST',
            dataType: 'html',
            data: {per_dni1: per_dni1},
          })
          .done(function(data) {
            $('#enviar').empty();
            $('#enviar').html(data);
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });          
        }
        
        
      });
      
      
    </script>




    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>  
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>

    <script src="<?php echo URL; ?>Views1/template/vendor/jquery/jquery.min.js"></script>  <!-- Bootstrap core JavaScript-->
    <script src="<?php echo URL; ?>Views1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo URL; ?>Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>  <!-- Core plugin JavaScript-->
    <script src="<?php echo URL; ?>Views1/vendor/chart.js/Chart.min.js"></script> <!-- Page level plugin JavaScript-->
    <script src="<?php echo URL; ?>Views1/template/js/sb-admin.min.js"></script>  <!-- Custom scripts for all pages-->   
    <script src="<?php echo URL; ?>Views1/js/demo/chart-area-demo.js"></script>          
    <script src="<?php echo URL; ?>Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>Views1/template/vendor/chart.js/Chart.min.js"></script>  
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="<?php echo URL; ?>Views1/template/js/demo/chart-area-demo.js"></script>   
<script type="text/javascript" src="<?php echo URL; ?>Views1/template/vendor/funciones.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/css/bootstrap-datepicker.min.css" />


 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>




    <script>$(document).ready(function() {
    $('#dataTableBuscar').DataTable( {
        dom: 'Bfrtip',
        "bFilter": false,
        language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                          "sFirst":    " Primero ",
                          "sLast":     " Último ",
                          "sNext":     " Siguiente ",
                          "sPrevious": " Anterior "
                        },
            "oAria":    {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
            "decimal": ",",
            "thousands": "."
          },
         buttons: [
    {
      extend: 'excelHtml5',
      title: 'Fichas por DNI',
      className: 'btn',
      text: "Excel"
  },
  {
    extend: 'csvHtml5',
    title: 'Fichas por DNI',
    className: 'btn',
    text: "CSV"
},
    {
      extend: 'pdfHtml5',
      title: 'Fichas por DNI',
      className: 'btn',
      text: "PDF"
  },
{
  extend: 'print',
  title: 'Fichas por DNI',
  className: 'btn',
  text: "Imprimir"
},
 {
   extend: 'copy',
   title: 'Fichas por DNI',
   className: 'btn',
   text: "Copiar"
 }
   ],
        "aoColumns": [
            null,
            null,
            { "sType": "date-uk" },
            { "sType": "date-uk" },
            null,
            null,
            null,
            null,
            null,
            null
          
          
        ]
    } );
} );</script>




    <script>$(document).ready(function() {
    $('#dataTableCautelar').DataTable( {
        "aaSorting": [[8,'asc']],
        dom: 'Bfrtip',
        "bFilter": true,
        language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                          "sFirst":    " Primero ",
                          "sLast":     " Último ",
                          "sNext":     " Siguiente ",
                          "sPrevious": " Anterior "
                        },
            "oAria":    {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
            "decimal": ",",
            "thousands": "."
          },
         buttons: [
    {
      extend: 'excelHtml5',
      title: 'Medidas cautelares vigentes',
      className: 'btn',
      text: "Excel",
      exportOptions: {
        columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22 ]
    }
  },
  {
    extend: 'csvHtml5',
    title: 'Medidas cautelares vigentes',
    className: 'btn',
    text: "CSV",
    exportOptions: {
                  columns: [  ':visible' ]
    }
},
    {
      extend: 'pdfHtml5',
      title: 'Medidas cautelares vigentes',
      className: 'btn',
      text: "PDF",
    exportOptions: {
        columns: [ 0,  1, 2, 3, 4, 5, 6, 7, 8 ]
    }
  },
{
  extend: 'print',
  title: 'Medidas cautelares vigentes',
  className: 'btn',
  text: "Imprimir"
},
 {
   extend: 'copy',
   title: 'Medidas cautelares vigentes',
   className: 'btn',
   text: "Copiar"
 }
   ],

   "columnDefs": [
            {
                "targets": [ 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 23,24 ],
                "searchable": false,
                "orderable": false
            }
        ],
        "aoColumns": [
            null,                   /* 0 Regional */
            { "sType": "date-uk" }, /* 1 Expediente */
            null,                   /* 2 Fecha de Ingreso */
            null,                   /* 3 Victina */
            null,                   /* 4 TipoMedida */
            null,                   /* 5 DomicilioPatrullaje */
            null,                   /* 6 Plazos */
            { "sType": "date-uk" }, /* 7 Días restantes */
            null,                   /* 8 Fecha de vencimiento */
            null,                   /* 9 DNI de la Victima */
            null,                   /* 10 Fecha del Hecho */
            null,                   /* 11 Fecha de Ingreso */
            null,                   /* 12 DNI del agresor */
            null,                   /* 13 Agresor */
            null,                   /* 14 Fiscalia */
            null,                   /* 15 Causas */
            null,                   /* 16 Domicilio patrullaje 2 */
            null,                   /* 17 Domicilio patrullaje 3 */
            null,                   /* 18 Comisaria */
            null,                   /* 19 Nº Expediente de Fiscalia */
            null,                   /* 20 N° de Oficio */
            null,                   /* 21 Dependencia Origen */
            null,                   /* 22 Observaciones */
            null,                   /* 23 Ver */
            null                    /* 24 Eliminar */
        ]
    } );
} );</script>


<script>$(document).ready(function() {
    $('#dataTableCautelarVencidas').DataTable( {
      "aaSorting": [[8,'desc']],
        dom: 'Bfrtip',
        "bFilter": true,
        language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                          "sFirst":    " Primero ",
                          "sLast":     " Último ",
                          "sNext":     " Siguiente ",
                          "sPrevious": " Anterior "
                        },
            "oAria":    {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
            "decimal": ",",
            "thousands": "."
          },
         buttons: [
    {
      extend: 'excelHtml5',
      title: 'Medidas cautelares vencidas',
      className: 'btn',
      text: "Excel",
      exportOptions: {
        columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22 ]
    }
  },
  {
    extend: 'csvHtml5',
    title: 'Medidas cautelares vencidas',
    className: 'btn',
    text: "CSV"
},
    {
      extend: 'pdfHtml5',
      title: 'Medidas cautelares vencidas',
      className: 'btn',
      text: "PDF",
    exportOptions: {
        columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
    }
  },
{
  extend: 'print',
  title: 'Medidas cautelares vencidas',
  className: 'btn',
  text: "Imprimir"
},
 {
   extend: 'copy',
   title: 'Medidas cautelares vencidas',
   className: 'btn',
   text: "Copiar"
 }
   ],
        "aoColumns": [
            null,                   /* 0 Regional */
            { "sType": "date-uk" }, /* 1 Expediente */
            null,                   /* 2 Fecha de Ingreso */
            null,                   /* 3 Victina */
            null,                   /* 4 TipoMedida */
            null,                   /* 5 DomicilioPatrullaje */
            null,                   /* 6 Plazos */
            { "sType": "date-uk" }, /* 7 Días restantes */
            null,                   /* 8 Fecha de vencimiento */

            null,                   /* 9 DNI de la Victima */
            null,                   /* 10 Fecha del Hecho */
            null,                   /* 11 Fecha de Ingreso */
            null,                   /* 12 DNI del agresor */
            null,                   /* 13 Agresor */
            null,                   /* 14 Fiscalia */
            null,                   /* 15 Causas */
            null,                   /* 16 Domicilio patrullaje 2 */
            null,                   /* 17 Domicilio patrullaje 3 */
            null,                   /* 18 Comisaria */
            null,                   /* 19 Nº Expediente de Fiscalia */
            null,                   /* 20 N° de Oficio */
            null,                   /* 21 Dependencia Origen */
            null,                   /* 22 Observaciones */
            null,                   /* 23 Ver */
            null                    /* 24 Eliminar */
        ]
    } );
} );</script>

    <script>$(document).ready(function(){
    $('#tablaPorDniConsultante').DataTable( {
        dom: 'Bfrtip',
        "bFilter": false,
        language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                          "sFirst":    " Primero ",
                          "sLast":     " Último ",
                          "sNext":     " Siguiente ",
                          "sPrevious": " Anterior "
                        },
            "oAria":    {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
            "decimal": ",",
            "thousands": "."
          },
         buttons: [
    {
      extend: 'excelHtml5',
      title: 'Fichas por DNI Consultante',
      className: 'btn',
      text: "Excel"
  },
  {
    extend: 'csvHtml5',
    title: 'Fichas por DNI Consultante',
    className: 'btn',
    text: "CSV"
},
    {
      extend: 'pdfHtml5',
      title: 'Fichas por DNI Consultante',
      className: 'btn',
      text: "PDF"
  },
{
  extend: 'print',
  title: '<H2>Fichas por DNI Consultante</H2><H5>Registro Único de Casos de Violencia contra las Mujeres (RUCVM)</H5><br/>',
  className: 'btn',
  text: "Imprimir"
},
 {
   extend: 'copy',
   title: 'Fichas por DNI Consultante',
   className: 'btn',
   text: "Copiar"
 }
   ],
        "aoColumns": [
            null,
            null,
            null,
            { "sType": "date-uk" },
            null,
            { "sType": "date-uk" },
            null,
            { "sType": "date-uk" },
            null,
            null,
            { "sType": "date-uk" }
        ]
    } );
    $('.dataTables_wrapper .fg-button').live('mouseenter mouseleave', 
         function() { $(this).toggleClass('highlighted'); });
} );</script>


 <script>$(document).ready(function() {
    $('#tablaSeguimiento').DataTable( {
        dom: 'Bfrtip',
        "bFilter": false,
        language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                          "sFirst":    " Primero ",
                          "sLast":     " Último ",
                          "sNext":     " Siguiente ",
                          "sPrevious": " Anterior "
                        },
            "oAria":    {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
            "decimal": ",",
            "thousands": "."
          },
         buttons: [
    {
      extend: 'excelHtml5',
      title: 'Fichas de seguimiento',
      className: 'btn',
      text: "Excel"
  },
  {
    extend: 'csvHtml5',
    title: 'Fichas de seguimiento',
    className: 'btn',
    text: "CSV"
},
    {
      extend: 'pdfHtml5',
      title: 'Fichas de seguimiento',
      className: 'btn',
      text: "PDF"
  },
{
  extend: 'print',
  title: 'Fichas de seguimiento',
  className: 'btn',
  text: "Imprimir"
},
 {
   extend: 'copy',
   title: 'Fichas de seguimiento',
   className: 'btn',
   text: "Copiar"
 }
   ],
        "aoColumns": [
            null,
            { "sType": "date-uk" },
            null,
            null,
            null 
        ]
    } );
} );</script>

<script>

jQuery.extend( jQuery.fn.dataTableExt.oSort, {
"date-uk-pre": function ( a ) {
    var ukDatea = a.split('/');
    return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
},

"date-uk-asc": function ( a, b ) {
    return ((a < b) ? -1 : ((a > b) ? 1 : 0));
},

"date-uk-desc": function ( a, b ) {
    return ((a < b) ? 1 : ((a > b) ? -1 : 0));
}
} );
</script>
<script type="text/javascript">
  jQuery.fn.extend({
    live: function (event, callback) {
       if (this.selector) {
            jQuery(document).on(event, this.selector, callback);
        }
        return this;
    }
});
</script>


<script>$(document).ready(function() {
    $('#dataTableOvd').DataTable( {
      "ordering": false, // false to disable sorting (or any other option)
        dom: 'Bfrtip',
        "bFilter": false,
        language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                          "sFirst":    " Primero ",
                          "sLast":     " Último ",
                          "sNext":     " Siguiente ",
                          "sPrevious": " Anterior "
                        },
            "oAria":    {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
            "decimal": ",",
            "thousands": "."
          },
         buttons: [
             {
  extend: 'print',
  title: 'Bases OVD',
  className: 'btn',
  text: "Imprimir",
    exportOptions: {
                    columns: [ 0, 1, 2]
                }
},
   ],
        "aoColumns": [
            null,
            null,
            { "orderable": false },
             { "orderable": false } 
        ]
    } );
} );</script>

<script>$(document).ready(function() {
    $('#dataTableOvdF').DataTable( {
       "ordering": false, // false to disable sorting (or any other option)
        dom: 'Bfrtip',
        "bFilter": false,
        language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                          "sFirst":    " Primero ",
                          "sLast":     " Último ",
                          "sNext":     " Siguiente ",
                          "sPrevious": " Anterior "
                        },
            "oAria":    {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
            "decimal": ",",
            "thousands": "."
          },
         buttons: [
             {
  extend: 'print',
  title: 'Bases OVD Finalizadas',
  className: 'btn',
  text: "Imprimir",
  exportOptions: {
                    columns: [ 0, 1, 2]
                }
},
   ],
   
        "aoColumns": [
            null,
            null,
             { "orderable": false },
             { "orderable": false } 
        ]
    } );
} );</script>


			</body>
			</html>
      <?php
    }
  }
    ?>