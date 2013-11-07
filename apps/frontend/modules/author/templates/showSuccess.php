<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Author->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $Author->getName() ?></td>
    </tr>
    <tr>
      <th>Desc:</th>
      <td><?php echo $Author->getDesc() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php echo $Author->getSlug() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('author/edit?id='.$Author->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('author/index') ?>">List</a>
