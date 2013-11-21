<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Video->getId() ?></td>
    </tr>
    <tr>
      <th>Author:</th>
      <td><?php echo $Video->getAuthorId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $Video->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $Video->getTitle() ?></td>
    </tr>
    <tr>
      <th>Desc:</th>
      <td><?php echo $Video->getDesc() ?></td>
    </tr>
    <tr>
      <th>Upload date:</th>
      <td><?php echo $Video->getUploadDate() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $Video->getUrl() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php echo $Video->getSlug() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('video/edit?id='.$Video->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('video/index') ?>">List</a>
