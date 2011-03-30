<?php echo stylesheet_tag('main_index') ?>
<div id="logout"><?php echo link_to('Desconectar', 'sfGuardAuth/signout') ?></div>
<div id="menu">
  <div id="navi">
    <ul>
      <li>
        <?php echo link_to('Empresas', 'empresa/index') ?>
      </li>
      <li>
        <?php echo link_to('Usuarios', 'sfGuardUser/index') ?>
      </li>
      <li>
        <?php echo link_to('Herramientas', 'herramienta/index') ?>
      </li>
      <li>
        <?php echo link_to('Gu&iacute;as', 'guia/index') ?>
      </li>
      <li>
        <?php echo link_to('Solicitudes', 'solicitud/index') ?>
      </li> 
    </ul>
  </div>
</div>
