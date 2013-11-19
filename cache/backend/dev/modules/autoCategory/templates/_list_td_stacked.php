<td colspan="4">
  <?php echo __('%%id%% - %%name%% - %%desc%% - %%slug%%', array('%%id%%' => link_to($Category->getId(), 'category_edit', $Category), '%%name%%' => $Category->getName(), '%%desc%%' => $Category->getDesc(), '%%slug%%' => $Category->getSlug()), 'messages') ?>
</td>
