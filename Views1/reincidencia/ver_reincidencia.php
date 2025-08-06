<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    
    <title>Reincidencia</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo URL; ?>Views1/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo URL; ?>Views1/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo URL; ?>Views1/template/css/sb-admin.css" rel="stylesheet">
  </head>

  <body class="bg-dark">
  <div id="enviar" name="enviar"> 
      <?php include 'r_menuizq.php';?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Reincidencia</div>
            <div class="card-body">
              <form role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <?php  
                  if(isset($datos)) {
                    $row = pg_fetch_array($datos);
                    $filas = pg_num_rows($datos);
                    if ($filas == 0) { ?> 
                     <div class="container-fluid"> 
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="alert alert-danger" align="center">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <strong>La ficha no posee reincidencia</strong>
                          <br>
                          <a href="<?php echo URL; ?>reincidencia/agregar?idficha=<?php echo $_GET['idficha']; ?>"><button type="button" class="btn btn-primary">Agregar reincidencia</button></a>
                        </div>
                      </div>
                    </div>
                    <?php 
                      }else{
                  ?>
                  <div class="table-responsive">
                          <table id="tabla" name="tabla" class="table table-bordered col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <thead>
                              <tr style="background-color: #b3434375">  
                                <td><center><strong>Fecha</strong></center></td>
                                <td><center><strong>Consultante</strong></center></td>
                                <td><center><strong>Agresor</strong></center></td>
                                <td><center><strong></strong></center></td>
                                <td><center><strong></strong></center></td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr bgcolor="#DAD2D9">
                                <td><center><?php echo date("d/m/Y", strtotime($row['re_fecha'])); ?></center></td>
                                <td><center><?php echo $row['consultante']; ?></center></td>
                                <td><center><?php echo $row['agresor']; ?></center></td>
                                <td align=center>
                                <a href="<?php echo URL; ?>reincidencia/editar/<?php echo $row['idreincidencia']; ?>" class="btn btn-primary btn-md"><i class="fas fa-pencil-alt"></i></a></td>
                                <td align=center>
                                      <a data-toggle="modal" href="#myModal" data-target="#eliminarModalCenter<?php echo $row['idreincidencia']; ?>" id="<?php echo $row['idreincidencia']; ?>" class="btn btn-primary btn-md"><i class="fas fa-trash-alt"></i></a></td>

                                       <div class="modal fade" id="eliminarModalCenter<?php echo $row['idreincidencia']; ?>" tabindex="-1" role="dialog" aria-labelledby="eliminarModalCenterTitle" aria-hidden="true"> 
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="eliminarModalLongTitle">Eliminar</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>¿Desea eliminar la ficha de reincidencia de la consultante<b></b> elaborada 
                                                    en la fecha <b> <?php echo date("d/m/Y", strtotime($row['re_fecha'])); ?>?</p>         
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                              <a href="<?php echo URL; ?>reincidencia/eliminar/<?php echo $row['idreincidencia'] ; ?>" class="btn btn-primary">Eliminar</a>
                                            </div>
                                          </div>
                                        </div>
                                        </div>
                              </tr>
                            </div>
                            <?php $i++;}}?>
                            </tbody>
                          </table>
                    <br />
                    <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-4 col-sm-4 col-md-5 col-lg-5"></div>
                          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <br /><a class="btn btn-primary btn-block" href="<?php echo URL;?>principal/buscar/">Volver</a>
                          </div>  
                          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>                                      
                          <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3"></div>                   
                        </div>
                      </div>            
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>