<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <?php include_http_metas() ?>
 <?php include_metas() ?>
 <?php include_title() ?>
 <link rel="shortcut icon" href="/favicon.ico" />
 <?php include_stylesheets() ?>
</head>
<body>
 <div id="container">
 <div id="header">
 <h1> <a href="<?php echo url_for('@homepage') ?>"> <img src="/images/logo.jpg" alt="Backend" /> </a> </h1>
 </div>
 <div id="menu">
 <ul>
 <li> <?php echo link_to('Videos', '@video') ?> </li>
 <li> <?php echo link_to('Categories', '@category') ?> </li>
 <li> <?php echo link_to('Authors', '@author') ?> </li>
 <li> <?php echo link_to('Scores', '@score') ?> </li>
 <li><?php echo link_to('Users', '@sf_guard_user') ?></li> 
 <li><?php echo link_to('Logout', '@sf_guard_signout') ?></li>
 </ul>
 </div>
 <div id="content">
 <?php echo $sf_content ?>
 </div>
 <div id="footer">
 powered by <a href="http://www.symfony-project.org/"> <img src="/images/symfony.gif" alt="symfony framework" /></a>
 </div>
 </div>
</body>
</html> 