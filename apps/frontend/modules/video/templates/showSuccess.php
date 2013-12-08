<?php use_helper('Text') ?>
 <h1><?php echo $Video->getTitle() ?></h1>
 <div class="descr"><?php echo $Video->getUploadDate() ?> <?php echo __("by") ?> <?php echo $Video->getAuthor() ?> <?php echo __("on") ?> <?php echo $Video->getCategory() ?></div>
 
 <!-- Lo de poner foto (nos interesa?):
 <?php // if ($Video->getPhoto()): ?>
 <div class="photo">
 <a href="<?php // echo $News->getUrl() ?>">
 <img src="/uploads/news/<?php // echo $News->getPhoto() ?>"
 alt="<?php // echo $News->getTitle() ?>" />
 </a>
 </div>
 
 <?php // endif; ?>
 -->
<p><strong class="descr"><?php echo simple_format_text($Video->getDesc()) ?></strong></p>

<iframe width="655" height="315" src="//www.youtube.com/embed/<?php echo substr($Video->getUrl(), 31);?>?rel=0" frameborder="0" allowfullscreen></iframe>
 
<p class="descr"><?php echo __("Source") ?>: <a href="<?php echo $Video->getUrl() ?>"><?php echo $Video->getUrl() ?></a></p>
<br />
<br />
<a href="<?php echo url_for('video/edit?id='.$Video->getId()) ?>"><?php echo __("Edit") ?></a>&nbsp; <a href="<?php echo url_for('video/index') ?>"><?php echo __("Back to") ?> TOP 5</a>
<!-- //www.youtube.com/embed/ceU4ANZKdOM?rel=0 -->
<!--  Lo que había antes:
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php // echo $Video->getId() ?></td>
    </tr>
    <tr>
      <th>Author:</th>
      <td><?php // echo $Video->getAuthorId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php // echo $Video->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php // echo $Video->getTitle() ?></td>
    </tr>
    <tr>
      <th>Desc:</th>
      <td><?php // echo $Video->getDesc() ?></td>
    </tr>
    <tr>
      <th>Upload date:</th>
      <td><?php // echo $Video->getUploadDate() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php // echo $Video->getUrl() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php // echo $Video->getSlug() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php // echo url_for('video/edit?id='.$Video->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php // echo url_for('video/index') ?>">List</a>
-->