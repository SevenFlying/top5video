<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
</head>
<body>
<div class="main">
	<div class="main_left">
		<div class="header">
			<h1><a href="<?php echo url_for('@homepage') ?>">TOP 5 Video</a></h1>
		</div>
		<div class="link_menu">
			<a href="<?php echo url_for('video/index') ?>" accesskey="1">Homepage</a>
			<a href="<?php echo url_for('video/new') ?>" accesskey="2">Upload a VIDEO!</a>
		</div>
		<div class="content">
			<?php echo $sf_content ?>
		</div>
	</div>
	<div class="main_right">
		<div class="link_versions">
			<div class="lbl">Language<span class="lbl2"> (no implementado)</span></div>
			<span class="left">
				<a href="#" class="g1" accesskey="n"><span>EN</span><br/>English</a>
			</span>
			<span class="right">
				<a href="#" class="g2" accesskey="s"><span>ES</span><br/>Spanish</a>
			</span>
		</div>
		<?php include_partial('category/list', array('categories' => CategoryPeer::doSelect(new Criteria()))) ?>
	</div>
	<div class="footer">
		<div class="left">&copy; <a href="<?php echo url_for('@homepage') ?>">TOP 5 Video</a> 2009. Template design by <a href="http://templates.arcsin.se">Arcsin</a></div>
		<div class="right"><a href="http://jigsaw.w3.org/css-validator/check/referer">valid CSS</a> <a href="http://validator.w3.org/check?uri=referer">valid XHTML</a></div>
	</div>
</div>
</body>
</html>
