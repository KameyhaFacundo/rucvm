<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">



    

  
  <body class="bg-dark">
      
      
      <script type="text/javascript">
        window.onload=function(){
          //document.getElementById("op20").style.background='#BEB089';
          //document.getElementById("op19").style.background='#BEB089';
          document.getElementById("op21").style.cursor = 'default';
          document.getElementById("op21").style.color = '#585858';
          document.getElementById("op21").style.pointerEvents = "none";
          document.getElementById("op22").style.cursor = 'default';
          document.getElementById("op22").style.color = '#585858';
          document.getElementById("op22").style.pointerEvents = "none";
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
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Nueva ficha</div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Datos consultante</b></br>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="date" id="fec_consulta" name="fec_consulta" class="form-control" placeholder="Fecha consulta" value= "<?php if (isset($_SESSION['f_fec_consulta'])) echo $_SESSION['f_fec_consulta']; ?>" required="required" min="1850-01-01" max="<?php echo date("Y-m-d");?>" autofocus="autofocus">
                        <label for="fec_consulta"><b>Fecha consulta(*)</b></label>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="time" id="horaconsulta" name="horaconsulta" class="form-control" placeholder="Hora consulta" value= "<?php if (isset($_SESSION['f_horaconsulta'])) echo $_SESSION['f_horaconsulta']; ?>">
                        <label for="horaconsulta">Hora consulta</label>
                      </div>
                    </div>
                  </div>
                </div>
               <script>
                   document.getElementById("fec_consulta").onchange = function ()
                    {
                    var input = document.getElementById("fec_agresion");
                    input.max = this.value;
                    }
               </script>
                  
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="date" id="fec_agresion" name="fec_agresion" class="form-control" placeholder="Fecha agresión" value= "<?php if (isset($_SESSION['f_fec_agresion'])) echo $_SESSION['f_fec_agresion']; ?>" required="required">
                        <label for="fec_agresion"><b>Fecha agresión(*)</b></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="time" id="mo_agresion" name="hora_agresion" class="form-control" placeholder="Hora agresión" value= "<?php if (isset($_SESSION['f_hora_agresion'])) echo $_SESSION['f_hora_agresion']; ?>" >
                        <label for="hora_agresion"><small>Hora agresión</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="mo_agresion" name="idmomento" class="form-control" placeholder="Momento del día" min="1" max="5" onkeyup="this.value=Numeros1(this.value)" value= "<?php if (isset($_SESSION['f_idmomento'])) echo $_SESSION['f_idmomento']; ?>" required="required">
                        <label for="idmomento"><small><b>Momento de agresión(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="p_menores" name="p_menores" class="form-control" placeholder="Presencia de menores" onkeyup="this.value=Numeros(this.value)" value= "<?php if (isset($_SESSION['f_p_menores'])) echo $_SESSION['f_p_menores']; ?>" required="required" autofocus="autofocus">
                        <label for="p_menores"><small><b>Presencia de menores(*)</b></small></label>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" id="agresor" name="agresor" class="form-control" placeholder="Apellido y nombre del agresor" value= "<?php if (isset($_SESSION['f_agresor'])) echo $_SESSION['f_agresor']; ?>" autofocus="autofocus" autocomplete="off">
                          <label for="agresor"><small>Nombre del agresor</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="disponelugar" name="disponelugar" class="form-control" placeholder="Dispone de lugar" onkeyup="this.value=Numeros2(this.value)" value= "<?php if (isset($_SESSION['f_disponelugar'])) echo $_SESSION['f_disponelugar']; ?>" autofocus="autofocus" min="1" max="2">
                          <label for="disponelugar"><small>Dispone de lugar</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="salud" name="idsalud" class="form-control" placeholder="Cobertura de salud" onkeyup="this.value=Numeros3(this.value)" value= "<?php if (isset($_SESSION['f_idsalud'])) echo $_SESSION['f_idsalud']; ?>" autofocus="autofocus" min="1" max="3">
                          <label for="salud"><small>Cobertura de salud</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="idvivienda" name="idvivienda" class="form-control" onkeyup="this.value=Numeros4(this.value)" value= "<?php if (isset($_SESSION['f_idvivienda'])) echo $_SESSION['f_idvivienda']; ?>" placeholder="Tenencia de vivienda" autofocus="autofocus" min="1" max="7">
                          <label for="idvivienda"><small>Tenencia de vivienda</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                   
                    <label for="profesional"><small>Profesional(*)</small></label>
                    <select name="profesional" class="form-control" required="required">
                        <?php while($row = pg_fetch_assoc($datos)){?>
                        <option value="<?php echo $row['idprofesional'];?>"><?php echo ucwords(strtolower($row['pro_apellido'])).", ".ucwords(strtolower($row['pro_nombre']));?></option>
                        <?php }?>
                        </select>
                    
                </div>                 
              </div>
            </div>
               
               
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>persona/agregar">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          <input class="btn btn-primary btn-block " type="submit" value="Siguiente" /> 
                          <!-- <a class="btn btn-primary btn-block" type="submit" href="<?php// echo URL; ?>ficha1/agregar">Siguiente</a> -->
                      </div>
                      <div class="col-xs-3 col-sm-4 col-md-6 col-lg-3"></div>                    
                    </div>
                  </div>                
              </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <script type="text/javascript">

    	//Presencia de menores
    	function Numeros(string){//Solo numeros
		    var out = '';
		    var filtro = '0129';//Caracteres validos
			
		    //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
		    if(string==0 || string==1 || string==2 || string==9){
		       if (filtro.indexOf(string.charAt(i)) != -1) 
		             //Se añaden a la salida los caracteres validos
			     out += string.charAt(i);
		    }
			
		    //Retornar valor filtrado
		    return out;
		}

		//Momento de la agresion
		function Numeros1(string){//Solo numeros
		    var out = '';
		    var filtro = '12345';//Caracteres validos
			
		    //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
		    if(string==1 || string==2 || string==3 || string==4 || string==5){
		       if (filtro.indexOf(string.charAt(i)) != -1) 
		             //Se añaden a la salida los caracteres validos
			     out += string.charAt(i);
		    }
			
		    //Retornar valor filtrado
		    return out;
		}

		//Dispone lugar
		function Numeros2(string){//Solo numeros
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

		//Cobertura de salud
		function Numeros3(string){//Solo numeros
		    var out = '';
		    var filtro = '123';//Caracteres validos
			
		    //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
		    if(string==1 || string==2 || string==3){
		       if (filtro.indexOf(string.charAt(i)) != -1) 
		             //Se añaden a la salida los caracteres validos
			     out += string.charAt(i);
		    }
			
		    //Retornar valor filtrado
		    return out;
		}

		//Tenencia de vivienda
		function Numeros4(string){//Solo numeros
		    var out = '';
		    var filtro = '1234567';//Caracteres validos
			
		    //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
		    if(string==1 || string==2 || string==3 || string==4 || string==5 || string==6 || string==7){
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