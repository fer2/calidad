<?php echo stylesheet_tag('main_index') ?>
<div id="logout"><?php echo link_to('Desconectar', 'sfGuardAuth/signout') ?></div>
<div id="menu">
  <div id="navi">
    <ul>
      <li>
        <?php echo link_to('Empresas', 'empresas/index') ?>
      </li>
      <li>
        <?php echo link_to('Usuarios', 'usuarios/index') ?>
      </li>
      <li>
        <?php echo link_to('Herramientas', 'herramientas/index') ?>
      </li>
      <li>
        <?php echo link_to('Gu&iacute;as', 'guias/index') ?>
      </li>
      <li>
        <?php echo link_to('Solicitudes', 'solicitudes/index') ?>
      </li>
    </ul>
  </div>
</div>
