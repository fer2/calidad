<td colspan="5">
  <?php echo __('%%id%% - %%code%% - %%name%% - %%url%% - %%description%%', array('%%id%%' => link_to($tool->getId(), 'tool_edit', $tool), '%%code%%' => $tool->getCode(), '%%name%%' => $tool->getName(), '%%url%%' => $tool->getUrl(), '%%description%%' => $tool->getDescription()), 'messages') ?>
</td>
