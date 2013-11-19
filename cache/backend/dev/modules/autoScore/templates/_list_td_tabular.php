<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Score->getId(), 'score_edit', $Score) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_video_id">
  <?php echo $Score->getVideoId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_stars">
  <?php echo $Score->getStars() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $Score->getSlug() ?>
</td>
