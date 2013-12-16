<td colspan="5">
  <?php echo __('%%id%% - %%category_id%% - %%author_id%% - %%title%% - %%url%%', array('%%id%%' => link_to($Video->getId(), 'video_edit', $Video), '%%category_id%%' => link_to($Video->getCategoryId(), 'video_edit', $Video), '%%author_id%%' => link_to($Video->getAuthorId(), 'video_edit', $Video), '%%title%%' => link_to($Video->getTitle(), 'video_edit', $Video), '%%url%%' => link_to($Video->getUrl(), 'video_edit', $Video)), 'messages') ?>
</td>
