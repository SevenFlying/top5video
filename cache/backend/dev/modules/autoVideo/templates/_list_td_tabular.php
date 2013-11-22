<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Video->getId(), 'video_edit', $Video) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_category_id">
  <?php echo link_to($Video->getCategoryId(), 'video_edit', $Video) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_author_id">
  <?php echo link_to($Video->getAuthorId(), 'video_edit', $Video) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo link_to($Video->getTitle(), 'video_edit', $Video) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_url">
  <?php echo link_to($Video->getUrl(), 'video_edit', $Video) ?>
</td>
