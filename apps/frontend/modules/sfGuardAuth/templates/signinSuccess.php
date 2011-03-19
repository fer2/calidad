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
      <p>
        Aenean et risus eu purus porta aliquam. Proin rhoncus ornare elit. Donec leo dolor, posuere quis, mattis sit amet, pharetra id, pede. Proin nonummy vulputate augue. Cras mollis pretium pede. Sed consectetuer eros feugiat velit. Pellentesque elit. Curabitur nec dolor mattis sapien imperdiet mattis. Nam interdum ipsum. Sed tortor lacus, feugiat non, sollicitudin quis, interdum vel, purus. Proin ultrices ligula vel augue. Proin augue arcu, accumsan porta, fermentum sed, aliquam vitae, magna. Donec mauris metus, blandit a, egestas vitae, feugiat quis, risus.
      </p>
    </div>
    <div id="box_login">
      <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
    </div>
    <div class="corr"></div>
  </div>
