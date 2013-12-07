<h1><?php echo $category->getName() ?> videos</h1> <hr/>
<?php if($category->countVideos() > 0): ?>
<?php 
$criteria= new Criteria();
$criteria->addDescendingOrderByColumn(VideoPeer::UPLOAD_DATE);
?>
 <?php foreach ($category->getVideos($criteria, null) as $Video): ?>
 <h1><a href="<?php echo url_for('video/show?id='.$Video->getId()) ?>"><?php echo $Video->getTitle() ?></a></h1>
  <div class="descr"><strong><?php echo $Video->getDesc() ?></strong> || Category: <?php echo $Video->getCategory() ?> || Upload date: <span class="descr2"><?php echo $Video->getUploadDate() ?></span></div>
 
 <p><a href="<?php echo url_for('video/show?id='.$Video->getId()) ?>"><span class="content2">View it...</span></a></p>
 <?php endforeach; ?>
 <?php else: ?> <br/>
 <p>There are <strong>no</strong> videos in this category. Sorry for that! ;-)</p>
 <?php endif; ?> 



<!-- Lo que habia antes:
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php //echo $Category->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php //echo $Category->getName() ?></td>
    </tr>
    <tr>
      <th>Desc:</th>
      <td><?php //echo $Category->getDesc() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php //echo $Category->getSlug() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php //echo url_for('category/edit?id='.$Category->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php //echo url_for('category/index') ?>">List</a>
-->