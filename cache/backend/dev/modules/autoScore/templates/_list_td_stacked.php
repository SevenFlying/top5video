<td colspan="4">
  <?php echo __('%%id%% - %%video_id%% - %%stars%% - %%slug%%', array('%%id%%' => link_to($Score->getId(), 'score_edit', $Score), '%%video_id%%' => $Score->getVideoId(), '%%stars%%' => $Score->getStars(), '%%slug%%' => $Score->getSlug()), 'messages') ?>
</td>
