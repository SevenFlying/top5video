<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Category->getId(), 'category_edit', $Category) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $Category->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_desc">
  <?php echo $Category->getDesc() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $Category->getSlug() ?>
</td>
