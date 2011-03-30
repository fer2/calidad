<?php use_helper('I18N', 'Date') ?>
<?php include_partial('empresa/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Empresa', array(), 'messages') ?></h1>

  <?php include_partial('empresa/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('empresa/form_header', array('Company' => $Company, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('empresa/form', array('Company' => $Company, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('empresa/form_footer', array('Company' => $Company, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
