<!DOCTYPE html>
<html lang="en">

  <body class="bg-dark">
      <?php //error_reporting(0);?>
          <!-- Bootstrap core CSS-->

      <?php include 'r_menuizq.php';?>
<!-- DataTables Example -->
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">   
                        <div class="card-header">
              <i class="fas fa-table"></i>
              Bases OVD</div>
              
              
                          <!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->


 
 



            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTableOvdF" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Archivo</th>
                      <th>Fecha de subida</th>
                      <th>Observacion</th>

                      <th></th>
                      
                      
                    </tr>
                  </thead>

                  <tbody><?php while($row = pg_fetch_assoc($datos)){ ?>
                      <tr>
                        <td><?php 
                         echo $row['imagen'];
                        ?></td>
                        <td><?php 
                         echo date('d/m/Y H:i', strtotime($row['fecha']));
                        ?></td>
                        <td><?php 
                         echo $row['observacion'];
                        ?></td>
                        
                        <td>
                            
                            
                            
                            <a href="<?php echo URL; ?>baseovd/editar/<?php echo $row['idbaseovd']; ?>" class="btn btn-warning btn-md" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
                            <a data-toggle="modal" href="#eliminar" data-target="#eliminarModalOvd<?php echo $row['idbaseovd']; ?>" id="<?php echo $row['idbaseovd']; ?>" class="btn btn-danger btn-md"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Eliminar"></i></a>
                            
                           
                        
                                                                 <!-- el id del modal debe ser el mismo que el data target del boton-->
 <div class="modal fade" id="eliminarModalOvd<?php echo $row['idbaseovd'];?>" tabindex="-1" role="dialog" aria-labelledby="eliminarModalCenterTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eliminarModalLongTitle">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>¿Desea eliminar el archivo <b> <?php echo $row['imagen'];?> </b> subido 
              en la fecha <b> <?php echo $row['fecha']; ?> </b> ?</p>         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="<?php echo URL; ?>baseovd/eliminar/<?php echo $row['idbaseovd'] ; ?>" class="btn btn-primary">Eliminar</a>
      </div>
    </div>
  </div>
  </div>
                      
                       <?php } ?>
                        
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
          </div>

</div>
</body>
</html>