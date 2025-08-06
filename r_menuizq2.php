<div id="wrapper">
  <style type="text/css">
      ul.sidebar{
        background-color: #b34343c2;
      }
    </style>
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" id="op33" href="<?php echo URL; ?>pordni/por_dni_consultante">
            <i></i>
            <span>Por DNI consultante</span></a>
        </li>
        <?php if($_SESSION['idinstitucion'] == 4 || $_SESSION['idinstitucion'] == 12 || $_SESSION['idinstitucion'] == 8){ ?>
        <li class="nav-item">
          <a class="nav-link" id="op36" href="<?php echo URL; ?>pornombre/por_nombre_consultante">
            <i></i>
            <span>Por nombre consultante</span></a>
        </li>
        <?php } ?>
        <?php if($_SESSION['idinstitucion'] != 13){ ?>
        <li class="nav-item">
          <a class="nav-link" id="op34" href="<?php echo URL; ?>porriesgo/por_riesgo">
            <i></i>
            <span>Por riesgo</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op35" href="<?php echo URL; ?>profesional/profesional">
            <i></i>
            <span>Fichas por profesional</span></a>
        </li>
        <?php } ?>
        </ul>