<h1><?php echo $category->getName() ?> videos</h1> <hr/>
<?php if($category->countVideos() > 0): ?>

 <?php foreach ($pager->getResults() as $Video): ?>
 <h1><a href="<?php echo url_for('video/show?id='.$Video->getId()) ?>"><?php echo $Video->getTitle() ?></a></h1>
  <div class="descr"><strong><?php echo $Video->getDesc() ?></strong> || <?php echo __("Category") ?>: <?php echo $Video->getCategory() ?> || <?php echo __("Upload date") ?>: <span class="descr2"><?php echo $Video->getUploadDate() ?></span></div>
 
 <p><a href="<?php echo url_for('video/show?id='.$Video->getId()) ?>"><span class="content2"><?php echo __("View it") ?>...</span></a></p>
 <?php endforeach; ?>
 
 <?php if ($pager->haveToPaginate()): ?>
 <div class="pagination">
 <a href="<?php echo url_for('category', $category) ?>?page=1">
 <img src="/images/first.png" alt="First page" />
 </a>
 <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getPreviousPage() ?>">
 <img src="/images/previous.png" alt="Previous page" title="Previous page" />
 </a>
 <?php foreach ($pager->getLinks() as $page): ?>
 <?php if ($page == $pager->getPage()): ?>
 <?php echo $page ?>
 <?php else: ?>
 <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
 <?php endif; ?>
 <?php endforeach; ?>
 <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getNextPage() ?>">
 <img src="/images/next.png" alt="Next page" title="Next page" />
 </a>
 <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getLastPage() ?>">
 <img src="/images/last.png" alt="Last page" title="Last page" />
 </a>
 </div>
<?php endif; ?>
 <div class="pagination_desc">
 <strong><?php echo $pager->getNbResults() ?></strong> videos <?php echo __("in this category") ?>
 <?php if ($pager->haveToPaginate()): ?>
 - <?php echo __("page") ?> <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
 <?php endif; ?>
</div>
<?php else: ?>
 <br/>
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