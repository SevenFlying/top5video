<h1>Categorys List</h1>

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
    <?php foreach ($Categorys as $Category): ?>
    <tr>
      <td><a href="<?php echo url_for('category/show?id='.$Category->getId()) ?>"><?php echo $Category->getId() ?></a></td>
      <td><?php echo $Category->getName() ?></td>
      <td><?php echo $Category->getDesc() ?></td>
      <td><?php echo $Category->getSlug() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('category/new') ?>">New</a>
