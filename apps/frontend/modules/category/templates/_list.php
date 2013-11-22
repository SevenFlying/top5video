<div class="link_categories">
 <div class="lbl">Categories</div>
 <?php foreach ($categories as $category): ?>
 <a href="/category/<?php echo $category->getSlug() ?>"><span><?php echo $category->getName() ?></span></a>
 <?php endforeach; ?>
 <div class="clearer"><span></span></div>
</div>