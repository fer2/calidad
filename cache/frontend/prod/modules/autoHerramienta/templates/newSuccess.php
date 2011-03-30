<?php use_helper('I18N', 'Date') ?>
<?php include_partial('herramienta/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Herramienta', array(), 'messages') ?></h1>

  <?php include_partial('herramienta/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('herramienta/form_header', array('tool' => $tool, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('herramienta/form', array('tool' => $tool, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('herramienta/form_footer', array('tool' => $tool, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
