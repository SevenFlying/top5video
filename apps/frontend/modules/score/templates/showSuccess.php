<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Score->getId() ?></td>
    </tr>
    <tr>
      <th>Video:</th>
      <td><?php echo $Score->getVideoId() ?></td>
    </tr>
    <tr>
      <th>Stars:</th>
      <td><?php echo $Score->getStars() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('score/edit?id='.$Score->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('score/index') ?>">List</a>
