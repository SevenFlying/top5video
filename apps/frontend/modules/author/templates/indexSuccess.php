<h1>Authors List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Desc</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Authors as $Author): ?>
    <tr>
      <td><a href="<?php echo url_for('author/show?id='.$Author->getId()) ?>"><?php echo $Author->getId() ?></a></td>
      <td><?php echo $Author->getName() ?></td>
      <td><?php echo $Author->getDesc() ?></td>
      <td><?php echo $Author->getSlug() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('author/new') ?>">New</a>
