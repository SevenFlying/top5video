<td colspan="4">
  <?php echo __('%%id%% - %%name%% - %%desc%% - %%slug%%', array('%%id%%' => link_to($Author->getId(), 'author_edit', $Author), '%%name%%' => $Author->getName(), '%%desc%%' => $Author->getDesc(), '%%slug%%' => $Author->getSlug()), 'messages') ?>
</td>
