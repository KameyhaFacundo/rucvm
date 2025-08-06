<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script src="/rucvm1/Views1/template/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript"></script>
    <script src="/rucvm1/Views1/template/vendor/bootstrap/js/bootstrap.js"></script>
    <style>
      #content{
        position: absolute;
        min-height: 50%;
        width: 80%;
        top: 20%;
        left: 5%;
      }

      .selected{
        cursor: pointer;
      }
      .selected:hover{
        background-color: #0585C0;
        color: white;
      }
      .seleccionada{
        background-color: #0585C0;
        color: black;
      }
    </style>
    <script>
      var cont=0;
      $(document).ready(function(){
        $('#bt_add').click(function(){
          sumarFilas();
        });
        $('#bt_del').click(function(){
          eliminar(id_fila_selected);
        });
        $('#bt_delall').click(function(){
          eliminarTodasFilas();
        });
        /*$('#siguiente').click(function(){
          grabarTabla();
        });*/
      });

      
      var id_fila_selected=[];

      function sumarFilas(){

        var cont = document.getElementById('filas_creadas').value;
        cont++;
        var fila='<tbody><tr class="selected" bgcolor="#ffe6e6" id="'+cont+'" onclick="seleccionar(this.id);"><td id="td_id">'+cont+'</td><td id="td_id"><input id="fE2_apellido'+cont+'" size="30%" style="color: black" type="text" name="fE2_apellido'+cont+'" required="required" value=""/></td><td id="td_id"><input id="fE2_nombre'+cont+'" size="30%" style="color: black" type="text" name="fE2_nombre'+cont+'" value=""/></td><td id="td_id"><input id="idEsexo'+cont+'" min="1" max="3" style="color: black" type="number" name="idEsexo'+cont+'" value=""/></td><td id="td_id"><input id="fE2_edad'+cont+'" min="1" max="125" style="color: black" type="number" name="fE2_edad'+cont+'" value=""/></td><td id="td_id"><input id="fE2_mes'+cont+'" min="1" max="11" style="color: black" type="number" name="fE2_mes'+cont+'" value=""/></td><td id="td_id"><input id="idEpariente'+cont+'" min="1" max="14" style="color: black" type="number" name="idEpariente'+cont+'" value=""/></td><td id="td_id"><input id="Ediscapacitado'+cont+'" min="1" max="2"  style="color: black" type="number" name="Ediscapacitado'+cont+'" value=""/></td><td id="td_id"><input id="Evictimavio'+cont+'" min="1" max="2" style="color: black" type="number" name="Evictimavio'+cont+'" value=""/></td><td id="td_id"><input id="Ecantidad1'+cont+'" type="hidden" name="Ecantidad1'+cont+'" size="30%" style="color: black" type="hidden" value= "'+cont+'"/></td></tr></tbody>';
        //alert(cont);
        document.grupofam.filas_creadas.value = cont;
        $('#tabla').append(fila);
        reordenar();
        count_clickE_add();
      }

      var count_clickE = 0;

      function count_clickE_add() {
        var varsesion = document.getElementById('count_clickE').value;
        //count_clickE = Number(varsesion) + 1;
        //document.grupofam.count_clickE.value = count_clickE
      }      

      function seleccionar(id_fila){
        if($('#'+id_fila).hasClass('seleccionada')){
          $('#'+id_fila).removeClass('seleccionada');
        }
        else{
          $('#'+id_fila).addClass('seleccionada');
        }
        //2702id_fila_selected=id_fila;
        id_fila_selected.push(id_fila);
      }

      function eliminar(id_fila){
        /*$('#'+id_fila).remove();
        reordenar();*/
        //alert(id_fila);
        var idfila = id_fila;
          $.ajax({
            url: '<?php echo URL; ?>Views1/ficha2/session_brakerE.php',
            type: 'POST',
            dataType: 'html',
            data: {idfila: idfila},
          })
          .done(function(data) {
            //console.log(JSON.stringify(data));
            //var p_dni = data.per_dni,
            //var p_apellido = data.per_apellido;
            //$('#enviar').empty();
            //$('#enviar').html(data);
            //$('.enviarap').html(JSON.stringify(data.per_apellido, null, 2));
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });          
        for(var i=0; i<id_fila.length; i++){
          $('#'+id_fila[i]).remove();
        }
        reordenar();
      }
      
      function reordenar(){
        var num=1;
        $('#tabla tbody tr').each(function(){
          $(this).find('td').eq(0).text(num);
          num++;
        });
        contador = Number(num) - Number(1);
        document.grupofam.count_clickE.value = contador;
      }
      function eliminarTodasFilas(){
        $('#tabla tbody tr').each(function(){
          $(this).remove();
        });
      }  
    </script>
    <title>Nueva ficha</title>

    <!-- Bootstrap core CSS-->
    <link href="/rucvm1/Views1/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/rucvm1/Views1/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="/rucvm1/Views1/template/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
      
                    <script type="text/javascript">
        window.onload=function(){
          document.getElementById("op23").style.cursor = 'default';
          document.getElementById("op23").style.color = '#585858';
          document.getElementById("op23").style.pointerEvents = "none";
          document.getElementById("op24").style.cursor = 'default';
          document.getElementById("op24").style.color = '#585858';
          document.getElementById("op24").style.pointerEvents = "none";
          document.getElementById("op25").style.cursor = 'default';
          document.getElementById("op25").style.color = '#585858';
          document.getElementById("op25").style.pointerEvents = "none";
          document.getElementById("op26").style.cursor = 'default';
          document.getElementById("op26").style.color = '#585858';
          document.getElementById("op26").style.pointerEvents = "none";
          document.getElementById("op27").style.cursor = 'default';
          document.getElementById("op27").style.color = '#585858';
          document.getElementById("op27").style.pointerEvents = "none";
          document.getElementById("op28").style.cursor = 'default';
          document.getElementById("op28").style.color = '#585858';
          document.getElementById("op28").style.pointerEvents = "none";
          document.getElementById("op29").style.cursor = 'default';
          document.getElementById("op29").style.color = '#585858';
          document.getElementById("op29").style.pointerEvents = "none";
          document.getElementById("op30").style.cursor = 'default';
          document.getElementById("op30").style.color = '#585858';
          document.getElementById("op30").style.pointerEvents = "none";
          document.getElementById("op31").style.cursor = 'default';
          document.getElementById("op31").style.color = '#585858';
          document.getElementById("op31").style.pointerEvents = "none";
          document.getElementById("op32").style.cursor = 'default';
          document.getElementById("op32").style.color = '#585858';
          document.getElementById("op32").style.pointerEvents = "none";
        }
    </script>
      
      

  <?php include 'r_menuizq1.php'; ?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">Nueva ficha</div>
            <div class="card-body">
              <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Grupo familiar conviviente</b>
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-2 col-sm-3 col-md-5 col-lg-1">
                        <button id="bt_add" name="count_clickE" class="btn btn-success btn-block">
                          <i class="fas fa-user-plus" aria-hidden="true"></i>
                        </button>
                      </div>
                      <div class="col-xs-2 col-sm-3 col-md-5 col-lg-1">
                        <button id="bt_del" class="btn btn-danger btn-block">
                          <i class="fas fa-user-minus" aria-hidden="true"></i>
                        </button>
                      </div>
                      <div class="col-xs-3 col-sm-2 col-md-6 col-lg-5"></div>
                      <div class="col-xs-2 col-sm-2 col-md-5 col-lg-5"></div>
                    </div>
              </div>
              <form name="grupofam" id="grupofam" role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="table-responsive">
                  <table id="tabla" name="tabla" class="table table-bordered col-mb-12">
                    <thead>
                      <tr bgcolor="#ffb3b3">
                        <td>Nº</td>
                        <td>Apellido</td>
                        <td>Nombre</td>
                        <td>Sexo</td>
                        <td>Edad</td>
                        <td>Meses</td>
                        <td>Vínculo</td>
                        <td>Discapacitado</td>
                        <td>Violencia</td>
                      </tr>
                    </thead>
                    <?php 
                    error_reporting(0);
                    if($_SESSION['filas_creadasE']||$_SESSION['filas_creadasEE']){
                        if($_SESSION['filas_creadasE']){
                            $cantfilas = $_SESSION['filas_creadasE'];
                        }else{
                            $cantfilas = $_SESSION['filas_creadasEE'];
                            $_SESSION['filas_creadasE'] = $_SESSION['filas_creadasEE'];
                        }
                      $i = 1;
                      
                      while($i<=$cantfilas){
                          $row = pg_fetch_assoc($datos);
                        //if(isset($_SESSION['fE2_f2_apellido'.$i])){
                            //echo 'Paso el if';
                                    ?>
                                    <tbody id="grupofam" name="grupofam">
                                      <tr class="selected" id="<?php echo ''.$i; ?>" onclick="seleccionar(this.id);">
                                        <td id="td_id"><?php echo $i; ?></td>
                                   
                                       <td id="td_id"><input id="<?php echo 'fE2_apellido'.$i; ?>" size="30%" style="color: black" type="text" name="<?php echo 'fE2_apellido'.$i; ?>" value= "<?php if (isset($_SESSION['fE2_f2_apellido'.$i])) echo $_SESSION['fE2_f2_apellido'.$i]; else echo $row['f2_apellido']; ?>"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'fE2_nombre'.$i; ?>" size="30%" style="color: black" type="text" name="<?php echo 'fE2_nombre'.$i; ?>" value= "<?php if (isset($_SESSION['fE2_f2_nombre'.$i])) echo $_SESSION['fE2_f2_nombre'.$i]; else echo $row['f2_nombre'];?>"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'idEsexo'.$i; ?>" min="1" max="3" style="color: black" type="number" name="<?php echo 'idEsexo'.$i; ?>" value= "<?php if (isset($_SESSION['fE2_idsexo'.$i])) echo $_SESSION['fE2_idsexo'.$i]; else echo $row['idsexo'];?>"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'fE2_edad'.$i; ?>" min="1" max="125" style="color: black" type="number" name="<?php echo 'fE2_edad'.$i; ?>" value= "<?php if (isset($_SESSION['fE2_f2_edad'.$i])) echo $_SESSION['fE2_f2_edad'.$i]; else echo $row['f2_edad'];?>"/></td>
                                       
                                       <td id="td_id"><input id="<?php echo 'fE2_mes'.$i; ?>" min="1" max="11" style="color: black" type="number" name="<?php echo 'fE2_mes'.$i; ?>" value= "<?php if (isset($_SESSION['fE2_f2_mes'.$i])) echo $_SESSION['fE2_f2_mes'.$i]; else echo $row['f2_mes'];?>"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'idEpariente'.$i; ?>" min="1" max="14" style="color: black" type="number" name="<?php echo 'idEpariente'.$i; ?>" value= "<?php if (isset($_SESSION['fE2_idpariente'.$i])) echo $_SESSION['fE2_idpariente'.$i]; else echo $row['idpariente'];?>"/></td>
                                       
                                       <td id="td_id"><input id="<?php echo 'Ediscapacitado'.$i; ?>" min="1" max="2"  style="color: black" type="number" name="<?php echo 'Ediscapacitado'.$i; ?>" value= "<?php if (isset($_SESSION['fE2_discapacitado'.$i])) echo $_SESSION['fE2_discapacitado'.$i]; else echo $row['discapacitado'];?>"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'Evictimavio'.$i; ?>" min="1" max="2" style="color: black" type="number" name="<?php echo 'Evictimavio'.$i; ?>" value= "<?php if (isset($_SESSION['fE2_victimavio'.$i])) echo $_SESSION['fE2_victimavio'.$i]; else echo $row['victimavio'];?>"/></td>
                                       </tr>
                                   </tbody>
                      <?php
                      //}
                      $i++;
                    }
                    }
                    ?>
                  </table>
                  <input type="" id="count_clickE" name="count_clickE" value="<?php if (isset($_SESSION['count_clickE'])) echo $_SESSION['count_clickE'];?>" />
                  <input type="" id="filas_creadas" name="filas_creadasE" value="<?php if (isset($_SESSION['filas_creadasE'])) echo $_SESSION['filas_creadasE'];?>" />
                  </div>
                  
                  <br/>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha1/editar">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          <input class="btn btn-primary btn-block " type="submit" value="Siguiente" />
                          <!--<a name="siguiente" id="siguiente" class="btn btn-primary btn-block" href="<?php //echo URL; ?>ficha3/agregar">Siguiente</a>-->
                      </div>
                      <div class="col-xs-3 col-sm-4 col-md-6 col-lg-3"></div>                    
                    </div>
                  </div>
                </form>
            <br />
          </div>
          </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/rucvm1/Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/rucvm1/Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript" src="http://localhost/rucvm1/Views1/template/vendor/funciones.js"></script>
  </body>
</html>