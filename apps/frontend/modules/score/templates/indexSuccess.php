<h1>Scores List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Video</th>
      <th>Stars</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Scores as $Score): ?>
    <tr>
      <td><a href="<?php echo url_for('score/show?id='.$Score->getId()) ?>"><?php echo $Score->getId() ?></a></td>
      <td><?php echo $Score->getVideoId() ?></td>
      <td><?php echo $Score->getStars() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('score/new') ?>">New</a>
