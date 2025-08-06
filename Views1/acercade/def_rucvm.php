<!DOCTYPE html>
<html lang="en">
  <body class="bg-dark">     
  <div id="enviar" name="enviar"> 
      <?php include 'r_menuizq.php';?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Acerca de</div>
            <div class="card-body">
              <form role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>¿Qué es RUCVM?</b>
                        </div>
                      </div>
                    </div>
                  </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p>Es un software de carga y consulta de datos, referidos a casos de violencia contra las mujeres, desarrollado por la Dirección de Estadística de la Provincia de Tucumán.
                            RUCVM surge en 2017 como herramienta para unificar criterios y la carga de datos referidos a las consultas recibidas por violencia contra las mujeres. Este sistema cuenta con cuatro grupos de usuarios: la Oficina de Violencia Familiar, el Observatorio de la Mujer, la Oficina de Violencia Doméstica y el Centro de Monitoreo del 911 de la Policía de Tucumán. <br />
                            Todos los organismos tienen sus datos albergados en la base de datos de RUCVM, donde están correctamente almacenados, resguardados y consultados. <br />
                            Cuenta con tres módulos: carga, consulta, e informes. <br />
                            Su funcionamiento se basa en la carga de los datos pertinentes a la persona que efectúa la consulta y la información relacionada al caso que está denunciando. Información que luego podrá ser consultada, rápida y ordenadamente, por los usuarios del sistema. <br />
                            Esta herramienta informática además les permite saber el contexto que atraviesa una consultante, por cual oficina pasó previamente, si es que lo hizo. De esta manera los organismos se benefician mutuamente, compartiendo, entre ellos, únicamente aquellos datos que son útiles para ambos, el resto de los datos son restringidos para el uso, consulta y edición exclusivo del organismo que los cargó. <br />
                            RUCVM surge además con el fin de generar, a partir de los datos cargados, estadísticas que sean útiles y de alta calidad para poder ponerlas a servicio de las autoridades competentes para una mejor de toma de decisiones a la hora de elaborar políticas públicas, y para la sociedad, a modo de generar concientización sobre el tema.
                            </p>
                          </div>
                        </div>
                      </div>
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

    <script src="<?php echo URL; ?>Views1/template/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
<script src="/rucvm1/Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
<script src="/rucvm1/Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>

<script type="text/javascript" src="http://localhost/rucvm1/Views1/template/vendor/funciones.js"></script>

</body>
</html>