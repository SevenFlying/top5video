<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php use_javascript('script.js') ?>
    <?php use_javascript('jquery.qtip-1.0.0-rc3.min.js') ?>
    <?php include_javascripts() ?>
</head>
<body>

<div class="main">

    <div class="main_right">
		<div class="link_versions">
			<div class="lbl"><?php echo __("Language") ?></div>
			<span class="left">
				<a href="<?php echo url_for('@homepage').'en' ?>" class="g1" accesskey="n"><span>EN</span></a>
			</span>
			<span class="right">
				<a href="<?php echo url_for('@homepage').'es' ?>" class="g2" accesskey="s"><span>ES</span></a>
			</span>
		</div>
		<?php include_partial('category/list', array('categories' => CategoryPeer::doSelect(new Criteria()))) ?>
    </div>

    <div class="main_left">
		<a href="<?php echo url_for('@homepage') ?>" accesskey="1" id="a_home"><img src="/images/home.png" alt="" id="img_home" /></a>
        <a href="<?php echo url_for('video/new') ?>" accesskey="2" id="a_upload"><img src="/images/upload.png" alt="" id="img_upload" /></a>		
	</div>

    <a class="twitter-timeline"  href="https://twitter.com/Seven_Flying"  data-widget-id="410120016281882624">Tweets por @Seven_Flying</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        
    <div class="main_content"> 
        <div class="header">
			<h1><a href="<?php echo url_for('@homepage') ?>">TOP 5 Video</a></h1>
		</div>
        <div class="content">
			<?php echo $sf_content ?>
		</div>
    </div>  
    
	<div class="footer">
		<div class="left">&copy; <a href="<?php echo url_for('@homepage') ?>">TOP 5 Video</a> 2009. <?php echo __("Template design by") ?> <a href="http://templates.arcsin.se">Arcsin (<?php echo __("modified") ?>)</a></div>
		<div class="right"><a href="http://jigsaw.w3.org/css-validator/check/referer">valid CSS</a> <a href="http://validator.w3.org/check?uri=referer">valid XHTML</a></div>
	</div>
</div>
</body>
</html>
