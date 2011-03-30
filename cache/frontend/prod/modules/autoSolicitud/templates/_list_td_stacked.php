<td colspan="5">
  <?php echo __('%%id%% - %%name%% - %%state%% - %%description%% - %%company_id%%', array('%%id%%' => link_to($application->getId(), 'application_edit', $application), '%%name%%' => $application->getName(), '%%state%%' => $application->getState(), '%%description%%' => $application->getDescription(), '%%company_id%%' => $application->getCompanyId()), 'messages') ?>
</td>
