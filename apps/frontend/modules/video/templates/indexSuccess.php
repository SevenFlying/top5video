<h1>Videos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Author</th>
      <th>Category</th>
      <th>Title</th>
      <th>Desc</th>
      <th>Upload date</th>
      <th>Url</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Videos as $Video): ?>
    <tr>
      <td><a href="<?php echo url_for('video/show?id='.$Video->getId()) ?>"><?php echo $Video->getId() ?></a></td>
      <td><?php echo $Video->getAuthorId() ?></td>
      <td><?php echo $Video->getCategoryId() ?></td>
      <td><?php echo $Video->getTitle() ?></td>
      <td><?php echo $Video->getDesc() ?></td>
      <td><?php echo $Video->getUploadDate() ?></td>
      <td><?php echo $Video->getUrl() ?></td>
      <td><?php echo $Video->getSlug() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('video/new') ?>">New</a>
