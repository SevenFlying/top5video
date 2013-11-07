<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Category->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $Category->getName() ?></td>
    </tr>
    <tr>
      <th>Desc:</th>
      <td><?php echo $Category->getDesc() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php echo $Category->getSlug() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('category/edit?id='.$Category->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('category/index') ?>">List</a>
