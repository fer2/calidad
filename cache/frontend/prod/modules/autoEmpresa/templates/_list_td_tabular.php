<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Company->getId(), 'company_empresa_edit', $Company) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $Company->getName() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_active">
  <?php echo get_partial('empresa/list_field_boolean', array('value' => $Company->getIsActive())) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_country_id">
  <?php echo $Company->getCountryId() ?>
</td>
