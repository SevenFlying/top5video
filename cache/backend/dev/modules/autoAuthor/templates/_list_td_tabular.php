<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Author->getId(), 'author_edit', $Author) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $Author->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_desc">
  <?php echo $Author->getDesc() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $Author->getSlug() ?>
</td>
