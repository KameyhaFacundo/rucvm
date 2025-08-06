<div id="wrapper">
  <style type="text/css">
      ul.sidebar{
        background-color: #b34343c2;
      }
    </style>
      <!-- Sidebar -->
      
      <ul class="sidebar navbar-nav">
        <?php if($_SESSION['idinstitucion']!=13){ ?>
        <li class="nav-item">
          <a class="nav-link" id="op19" href="<?php echo URL; ?>persona/agregar">
            <i></i>
            <span>Alta consultante</span></a>
        </li>
        <li class="nav-item">
          
              <a class="nav-link" id="op20" href="<?php echo URL; ?>ficha/agregar">
            <i></i>
            <span>Datos consultante</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op21" href="<?php echo URL; ?>ficha1/agregar">
            <i></i>
            <span>Laboral - Educacion</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op22" href="<?php echo URL; ?>ficha2/agregar">
            <i></i>
            <span>Grupo familiar conviviente</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op23" href="<?php echo URL; ?>ficha3/agregar">
            <i></i>
            <span>Evaluación de riesgo</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op24" href="<?php echo URL; ?>ficha31/agregar">
            <i></i>
            <span>Motivo/s de consulta</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op25" href="<?php echo URL; ?>ficha32/agregar">
            <i></i>
            <span>Antecedente violencia consultante</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op26" href="<?php echo URL; ?>ficha33/agregar">
            <i></i>
            <span>Antecedente violencia agresor</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op27" href="<?php echo URL; ?>ficha34/agregar">
            <i></i>
            <span>Hechos asociados E.V</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op28" href="<?php echo URL; ?>ficha35/agregar">
            <i></i>
            <span>Indicadores de riesgo</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op29" href="<?php echo URL; ?>ficha36/agregar">
            <i></i>
            <span>Estado salud</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op30" href="<?php echo URL; ?>ficha37/agregar">
            <i></i>
            <span>Causas de la consulta</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op31" href="<?php echo URL; ?>ficha4/agregar">
            <i></i>
            <span>Estrategias de intervencion</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op32" href="<?php echo URL; ?>ficha41/agregar">
            <i></i>
            <span>Medidas judiciales</span></a>
        </li>
        <?php }else{ echo ' ';} ?>
        </ul>
