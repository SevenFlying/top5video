<?php use_helper('I18N', 'Date') ?>
<?php include_partial('author/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editing %%name%%', array('%%name%%' => $Author->getName()), 'messages') ?></h1>

  <?php include_partial('author/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('author/form_header', array('Author' => $Author, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('author/form', array('Author' => $Author, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('author/form_footer', array('Author' => $Author, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
