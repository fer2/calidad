<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($application->getId(), 'application_edit', $application) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $application->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_state">
  <?php echo $application->getState() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $application->getDescription() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_company_id">
  <?php echo $application->getCompanyId() ?>
</td>
