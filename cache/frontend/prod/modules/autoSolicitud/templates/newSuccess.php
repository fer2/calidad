<?php use_helper('I18N', 'Date') ?>
<?php include_partial('solicitud/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Solicitud', array(), 'messages') ?></h1>

  <?php include_partial('solicitud/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('solicitud/form_header', array('application' => $application, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('solicitud/form', array('application' => $application, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('solicitud/form_footer', array('application' => $application, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
