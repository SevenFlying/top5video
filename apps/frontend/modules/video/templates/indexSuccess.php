<h1>Videos List</h1>

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
  <div class="descr"><strong><?php echo $Video->getDesc() ?></strong> || Category: <?php echo $Video->getCategory() ?> || Upload date: <?php echo $Video->getUploadDate() ?></div>
 <?php endforeach; ?>