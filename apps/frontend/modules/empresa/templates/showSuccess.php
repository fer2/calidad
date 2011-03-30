<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $company->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $company->getName() ?></td>
    </tr>
    <tr>
      <th>Activa:</th>
      <td><?php echo $company->getIsActive() ? 'si' : 'no' ;  ?></td>
    </tr>
    <tr>
      <th>Pa&iacute;s:</th>
      <td><?php echo $company->getCountryId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('empresa/edit?id='.$company->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('empresa/index') ?>">Lista</a>
