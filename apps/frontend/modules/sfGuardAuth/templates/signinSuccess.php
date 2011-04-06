<?php use_helper('I18N') ?>

  <div id="titulo_ppal">
    <p><?php echo sfConfig::get('app_nombre_sistema'); ?></p>    
  </div>

  <div id="body">
    <div id="descripcion">
      <p>
        &iquest; De que se trata este sitio &#63;
        Sitio para la gestion de calidad en blabla...
      </p>
        <?php include_partial('global/texto_relleno') ?>
    </div>
    <div id="box_login">
      <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
    </div>
    <div class="corr"></div>
  </div>
