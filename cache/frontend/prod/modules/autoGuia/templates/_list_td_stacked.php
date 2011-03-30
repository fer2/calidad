<td colspan="6">
  <?php echo __('%%id%% - %%code%% - %%name%% - %%url%% - %%description%% - %%tool_id%%', array('%%id%%' => link_to($guide->getId(), 'guide_edit', $guide), '%%code%%' => $guide->getCode(), '%%name%%' => $guide->getName(), '%%url%%' => $guide->getUrl(), '%%description%%' => $guide->getDescription(), '%%tool_id%%' => $guide->getToolId()), 'messages') ?>
</td>
