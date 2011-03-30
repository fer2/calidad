<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($tool->getId(), 'tool_edit', $tool) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_code">
  <?php echo $tool->getCode() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $tool->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_url">
  <?php echo $tool->getUrl() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $tool->getDescription() ?>
</td>
