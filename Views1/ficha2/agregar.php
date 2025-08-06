<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">

    <script src="<?php echo URL; ?>Views1/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URL; ?>Views1/template/vendor/bootstrap/js/bootstrap.js"></script>

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
        var fila='<tbody><tr class="selected" bgcolor="#DAD2D9" id="'+cont+'" onclick="seleccionar(this.id);"><td id="td_id">'+cont+'</td><td id="td_id"><input id="f2_apellido'+cont+'" size="30%" style="color: black" type="text" name="f2_apellido'+cont+'"  value="" required="required"/></td><td id="td_id"><input id="f2_nombre'+cont+'" size="30%" style="color: black" type="text" name="f2_nombre'+cont+'" value="" required="required"/></td><td id="td_id"><input id="idsexo'+cont+'" style="color: black" type="number" name="idsexo'+cont+'" value="" min="0" max="2" onkeyup="this.value=Numeros(this.value)"/></td><td id="td_id"><input id="f2_edad'+cont+'" min="0" max="125" style="color: black" type="number" name="f2_edad'+cont+'" onfocusout="habilitar(this.id);" value=""/></td><td id="td_id"><input id="f2_mes'+cont+'" min="1" max="11" style="color: black" type="number" name="f2_mes'+cont+'" value="" onkeyup="this.value=Numeros2(this.value)"/></td><td id="td_id"><input id="idpariente'+cont+'" min="1" max="14" style="color: black" type="number" name="idpariente'+cont+'" value="" onkeyup="this.value=Numeros1(this.value)"/></td><td id="td_id"><input id="discapacitado'+cont+'" min="1" max="2"  style="color: black" type="number" name="discapacitado'+cont+'" value="" onkeyup="this.value=Numeros3(this.value)"/></td><td id="td_id"><input id="victimavio'+cont+'" min="1" max="2" style="color: black" type="number" name="victimavio'+cont+'" value="" onkeyup="this.value=Numeros3(this.value)"/></td><td id="td_id"><input id="cantidad1'+cont+'" type="hidden" name="cantidad1'+cont+'" size="30%" style="color: black" type="hidden" value= "'+cont+'"/></td></tr></tbody>';
        //alert(cont);
        document.grupofam.filas_creadas.value = cont;
        $('#tabla').append(fila);
        reordenar();
        count_click_add();
      }

      var count_click = 0;

      function count_click_add() {
        var varsesion = document.getElementById('count_click').value;
        //count_click = Number(varsesion) + 1;
        //document.grupofam.count_click.value = count_click
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
            url: '<?php echo URL; ?>Views1/ficha2/session_braker.php',
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
        document.grupofam.count_click.value = contador;
      }


      function eliminarTodasFilas(){
        $('#tabla tbody tr').each(function(){
          $(this).remove();
        });
      }

      function habilitar(id)
        { 
          var edad = document.getElementById(id).value;
          var long = id.length;
          var cont = id.substr(long - 1);
          if(edad=="0")
          {
            // habilitamos
            document.getElementById("f2_mes"+cont).disabled=false;
          }else{
            // deshabilitamos
            document.getElementById("f2_mes"+cont).value='';
            document.getElementById("f2_mes"+cont).disabled=true;
          }
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
          document.getElementById("op22").style.color = 'white';
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
    <div id="content-wrapper" style="background-color: #e9e2e8">
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
                  <?php echo $_SESSION['f2_f2_apellido1'];?>
                   <?php echo $_SESSION['f2_f2_apellido2'];?>


              <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-2 col-sm-3 col-md-5 col-lg-1">
                        <button id="bt_add" name="count_click" class="btn btn-success btn-block">
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
                      <tr style="background-color: #b3434375">
                        <td>Nº</td>
                        <td><b>Apellido(*)</b></td>
                        <td><b>Nombre(*)</b></td>
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
                    if($_SESSION['filas_creadas']){
                      $cantfilas = $_SESSION['filas_creadas'];
                      $i = 1;
                      do{
                        if(isset($_SESSION['f2_f2_apellido'.$i])){
                            //echo 'Paso el if'.$_SESSION['f2_f2_apellido'.$i];
                                    ?>
                                    <tbody id="grupofam" name="grupofam">
                                      <tr class="selected" id="<?php echo ''.$i; ?>" onclick="seleccionar(this.id);" bgcolor="#DAD2D9">
                                        <td id="td_id"><?php echo $i; ?></td>
                                   
                                       <td id="td_id"><input id="<?php echo 'f2_apellido'.$i; ?>" size="30%" style="color: black" type="text" name="<?php echo 'f2_apellido'.$i; ?>" value= "<?php if (isset($_SESSION['f2_f2_apellido'.$i])) echo $_SESSION['f2_f2_apellido'.$i]; ?>" autocomplete="off" required="required"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'f2_nombre'.$i; ?>" size="30%" style="color: black" type="text" name="<?php echo 'f2_nombre'.$i; ?>" value= "<?php if (isset($_SESSION['f2_f2_nombre'.$i])) echo $_SESSION['f2_f2_nombre'.$i];?>" autocomplete="off" required="required"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'idsexo'.$i; ?>" style="color: black" type="number" name="<?php echo 'idsexo'.$i; ?>" value= "<?php if (isset($_SESSION['f2_idsexo'.$i])) echo $_SESSION['f2_idsexo'.$i];?>" autocomplete="off" min="0" max="2" onkeyup="this.value=Numeros(this.value)"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'f2_edad'.$i; ?>" min="0" max="125" style="color: black" type="number" name="<?php echo 'f2_edad'.$i; ?>" onfocusout="habilitar(this.id);" value= "<?php if (isset($_SESSION['f2_f2_edad'.$i])) echo $_SESSION['f2_f2_edad'.$i];?>" autocomplete="off"/></td>
                                       
                                       <td id="td_id"><input id="<?php echo 'f2_mes'.$i; ?>" min="1" max="11" style="color: black" type="number" name="<?php echo 'f2_mes'.$i; ?>" value= "<?php if (isset($_SESSION['f2_f2_mes'.$i])) echo $_SESSION['f2_f2_mes'.$i];?>" autocomplete="off" onkeyup="this.value=Numeros2(this.value)" <?php if(isset($_SESSION['f2_f2_edad'.$i]) && $_SESSION['f2_f2_edad'.$i] > 0) echo 'readonly'; ?>/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'idpariente'.$i; ?>" min="1" max="14" style="color: black" type="number" name="<?php echo 'idpariente'.$i; ?>" value= "<?php if (isset($_SESSION['f2_idpariente'.$i])) echo $_SESSION['f2_idpariente'.$i];?>" autocomplete="off" onkeyup="this.value=Numeros(this.value)"/></td>
                                       
                                       <td id="td_id"><input id="<?php echo 'discapacitado'.$i; ?>" min="1" max="2"  style="color: black" type="number" name="<?php echo 'discapacitado'.$i; ?>" value= "<?php if (isset($_SESSION['f2_discapacitado'.$i])) echo $_SESSION['f2_discapacitado'.$i];?>" autocomplete="off" onkeyup="this.value=Numeros3(this.value)"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'victimavio'.$i; ?>" min="1" max="2" style="color: black" type="number" name="<?php echo 'victimavio'.$i; ?>" value= "<?php if (isset($_SESSION['f2_victimavio'.$i])) echo $_SESSION['f2_victimavio'.$i];?>" autocomplete="off" min="1" max="2" onkeyup="this.value=Numeros3(this.value)"/></td>
                                       </tr>
                                   </tbody>
                      <?php
                      }
                      $i++;
                    }while($i<=$cantfilas);
                    }
                    ?>
                  </table>
                  <input type="hidden" id="count_click" name="count_click" value="<?php if (isset($_SESSION['count_click'])) echo $_SESSION['count_click'];?>" />
                  <input type="hidden" id="filas_creadas" name="filas_creadas" value="<?php if (isset($_SESSION['filas_creadas'])) echo $_SESSION['filas_creadas'];?>" />
                  </div>
                  
                  <br/>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha1/agregar">Volver</a>
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
    <script src="<?php echo URL; ?>Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo URL; ?>Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script type="text/javascript">
      //sexo
      function Numeros(string){//Solo numeros
        var out = '';
        var filtro = '012';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==0 || string==1 || string==2){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //vinculo
      function Numeros1(string){//Solo numeros
        var out = '';
        var filtro = '1234567891011121314';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3 || string==4 || string==5 || string==6 || string==7 || string==8 || string==9 || string==10 || string==11 || string==12 || string==13 || string==14){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //mes
      function Numeros2(string){//Solo numeros
        var out = '';
        var filtro = '123456789101112';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3 || string==4 || string==5 || string==6 || string==7 || string==8 || string==9 || string==10 || string==11 || string==12){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //Discapacidad
    function Numeros3(string){//Solo numeros
        var out = '';
        var filtro = '12';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }
    </script>
  </body>
</html>