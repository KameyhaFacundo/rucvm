<?php	
//session_start();
//$_SESSION['f2_cantidad'] = $_POST['cantidad'];
//print_r($_SESSION['f2_cantidad']);
//return $cantidad;
	/*$datos = json_decode($_POST['data']);
       if(isset($datos)){
       	session_start();
       	 for ($i=0; $i < count($datos); $i++){
                     echo'<tr class="selected" id="fila'.$i.'" onclick="seleccionar(this.id);">
                               <td id="td_id">'.$i.'</td>';
       		 		$_SESSION['f2_f2_apellido'.$i] = $datos[$i]->f2_apellido;
                                   echo'<td id="td_id"><input id="f2_apellido'.$i.'" size="30%" style="color: black" type="text" name="f2_apellido" value="'.$_SESSION['f2_f2_apellido'.$i].'"/></td>';
                                   $_SESSION['f2_f2_nombre'.$i] = $datos[$i]->f2_nombre;
                                   echo '<td id="td_id"><input id="f2_nombre'.$i.'" size="30%" style="color: black" type="text" name="f2_nombre" value="'.$_SESSION['f2_f2_nombre'.$i].'"/></td>';
                                   $_SESSION['f2_idsexo'.$i] = $datos[$i]->idsexo;
                                   echo '<td id="td_id"><input id="idsexo'.$i.'" min="1" max="3" style="color: black" type="number" name="idsexo" value="'.$_SESSION['f2_idsexo'.$i].'"/></td>';
                                   $_SESSION['f2_f2_edad'.$i] = $datos[$i]->f2_edad;
                                   echo '<td id="td_id"><input id="f2_edad'.$i.'" min="1" max="125" style="color: black" type="number" name="f2_edad" value="'.$_SESSION['f2_f2_edad'.$i].'"/></td>';
                                   $_SESSION['f2_f2_mes'.$i] = $datos[$i]->f2_mes;  
                                   echo '<td id="td_id"><input id="f2_mes'.$i.'" min="1" max="11" style="color: black" type="number" name="f2_mes" value="'.$_SESSION['f2_f2_mes'.$i].'"/></td>';
                                   $_SESSION['f2_idpariente'.$i] = $datos[$i]->idpariente;
                                   echo '<td id="td_id"><input id="idpariente'.$i.'" min="1" max="14" style="color: black" type="number" name="idpariente" value="'.$_SESSION['f2_idpariente'.$i].'"/></td>';
                                   $_SESSION['f2_discapacitado'.$i] = $datos[$i]->discapacitado;
                                   echo '<td id="td_id"><input id="discapacitado'.$i.'" min="1" max="2"  style="color: black" type="number" name="discapacitado" value="'.$_SESSION['f2_discapacitado'.$i].'"/></td>';
                                   $_SESSION['f2_victimavio'] = $datos[$i]->victimavio;
                                   echo '<td id="td_id"><input id="victimavio'.$i.'" min="1" max="2" style="color: black" type="number" name="victimavio" value="'.$_SESSION['f2_victimavio'].'"/></td>';
                                   echo '</tr>';
                                   /*$grupofamiliar[$i] = array("f2_apellido" => $_SESSION['f2_f2_apellido'.$i], "f2_nombre" => $_SESSION['f2_f2_nombre'.$i], "f2_edad" => $_SESSION['f2_f2_edad'.$i], "idpariente" => $_SESSION['f2_idpariente'.$i], "discapacitado" => $_SESSION['f2_discapacitado'.$i], "victimavio" => $_SESSION['f2_victimavio'], "idsexo" => $_SESSION['f2_idsexo'.$i], "f2_mes" => $_SESSION['f2_f2_mes'.$i]);*/
                                   //var_dump($grupofamiliar);
                                   //print_r(json_encode($grupofamiliar));*/
       	//echo 'AQUI ESTAN LOS DATOS '.$datos;for ($i=0; $i < count($datos); $i++)
       	//}
       //}
       /*while($row = pg_fetch_array($grupofamiliar))
       {      
                 echo'<tbody>
                      <tr class="selected" id="fila'+cont+'" onclick="seleccionar(this.id);">
                        <td id="td_id">'+cont+'</td>
                        <td id="td_id"><input id="f2_apellido'+cont+'" size="30%" style="color: black" type="text" name="f2_apellido" value="'.$_SESSION['f2_f2_apellido'.$i].'"/></td>
                        <td id="td_id"><input id="f2_nombre'+cont+'" size="30%" style="color: black" type="text" name="f2_nombre" value="'.$_SESSION['f2_f2_nombre'.$i].'"/></td>
                        <td id="td_id"><input id="idsexo'+cont+'" min="1" max="3" style="color: black" type="number" name="idsexo" value="''.$_SESSION['f2_idsexo'.$i]."/></td>
                        <td id="td_id"><input id="f2_edad'+cont+'" min="1" max="125" style="color: black" type="number" name="f2_edad" value="'.$_SESSION['f2_f2_edad'.$i].'"/></td>
                        <td id="td_id"><input id="f2_mes'+cont+'" min="1" max="11" style="color: black" type="number" name="f2_mes" value="'.$_SESSION['f2_f2_mes'.$i].'"/></td>
                        <td id="td_id"><input id="idpariente'+cont+'" min="1" max="14" style="color: black" type="number" name="idpariente" value="'.$_SESSION['f2_idpariente'.$i].'"/></td>
                        <td id="td_id"><input id="discapacitado'+cont+'" min="1" max="2"  style="color: black" type="number" name="discapacitado" value="'.$_SESSION['f2_discapacitado'.$i].'"/></td>
                        <td id="td_id"><input id="victimavio'+cont+'" min="1" max="2" style="color: black" type="number" name="victimavio" value="'.$_SESSION['f2_victimavio'].'"/></td>
                      </tr>
                    </tbody>'
       }*/

?>