<?php use_helper('I18N', 'Date') ?>
<?php include_partial('score/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editing %%name%%', array('%%name%%' => $Score->getName()), 'messages') ?></h1>

  <?php include_partial('score/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('score/form_header', array('Score' => $Score, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('score/form', array('Score' => $Score, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('score/form_footer', array('Score' => $Score, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
