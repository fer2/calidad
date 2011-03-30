<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($guide->getId(), 'guide_edit', $guide) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_code">
  <?php echo $guide->getCode() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $guide->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_url">
  <?php echo $guide->getUrl() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $guide->getDescription() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_tool_id">
  <?php echo $guide->getToolId() ?>
</td>
