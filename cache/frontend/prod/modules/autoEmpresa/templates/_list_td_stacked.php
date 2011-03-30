<td colspan="4">
  <?php echo __('%%id%% - %%name%% - %%is_active%% - %%country_id%%', array('%%id%%' => link_to($Company->getId(), 'company_empresa_edit', $Company), '%%name%%' => $Company->getName(), '%%is_active%%' => get_partial('empresa/list_field_boolean', array('value' => $Company->getIsActive())), '%%country_id%%' => $Company->getCountryId()), 'messages') ?>
</td>
