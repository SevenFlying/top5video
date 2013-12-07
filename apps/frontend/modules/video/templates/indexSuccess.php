<?php 

    $c= new Criteria();
    $c->setLimit(sfConfig::get('app_max_videos_on_homepage'));
    $c->addJoin(VideoPeer::ID, ScorePeer::VIDEO_ID);
    $c->addDescendingOrderByColumn(ScorePeer::STARS);
    $c->addDescendingOrderByColumn(VideoPeer::UPLOAD_DATE);
    $Videos= VideoPeer::doSelect($c)
    
    /*
        select * from video where id in(
        SELECT video_id,
        FROM Score
        GROUP BY video_id
        ORDER BY AVG( stars ) DESC )
    */
?>

<?php foreach ($Videos as $Video): ?>
 <h1><a href="<?php echo url_for('video/show?id='.$Video->getId()) ?>"><?php echo $Video->getTitle() ?></a></h1>
 <div class="descr"><strong><?php echo $Video->getDesc() ?></strong> || Category: <?php echo $Video->getCategory() ?> || Upload date: <span class="descr2"><?php echo $Video->getUploadDate() ?></span></div>
 
 <p><a href="<?php echo url_for('video/show?id='.$Video->getId()) ?>"><span class="content2">View it...</span></a></p>
 <?php endforeach; ?>
 <br />





<!--  Lo que habia en un inicio: 
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
    <?php // foreach ($Videos as $Video): ?>
    <tr>
      <td><a href="<?php // echo url_for('video/show?id='.$Video->getId()) ?>"><?php // echo $Video->getId() ?></a></td>
      <td><?php // echo $Video->getAuthorId() ?></td>
      <td><?php // echo $Video->getCategoryId() ?></td>
      <td><?php // echo $Video->getTitle() ?></td>
      <td><?php // echo $Video->getDesc() ?></td>
      <td><?php // echo $Video->getUploadDate() ?></td>
      <td><?php // echo $Video->getUrl() ?></td>
      <td><?php // echo $Video->getSlug() ?></td>
    </tr>
    <?php //endforeach; ?>
  </tbody>
</table>

  <a href="<?php // echo url_for('video/new') ?>">New</a>
  
  -->
