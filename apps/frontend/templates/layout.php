<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="principal">
      <div id="encabezado">
        <div id="imagen">
          Logo con Im&aacute;gen
        </div>
        <div id="info_sistema">
          Fecha: <?php echo date ( "d/m/o" ); ?>
        </div>
        <div class="corr"></div>
      </div>
      <?php if ($sf_user->isAuthenticated()): ?>
        <?php include_partial('global/menu_interno') ?>
      <?php endif ?>
      <div id="contenido">
        <?php echo $sf_content ?>
      </div>
      <div id="footer">
        <p>footer</p>
      </div>
    </div>
  </body>
</html>
