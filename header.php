<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/w3.css" media="screen"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/w3-custom.css" media="screen"/>
	<!-- <script type="text/javascript" src="<?php $plxShow->template(); ?>/css/w3.js"></script> -->
	<?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>

<body id="top" class="w3-theme-dark">

<!-- Navbar -->
<nav  role="navigation" >

	<!-- Navbar on wide screens -->
	<ul class="menu-large w3-navbar w3-theme-dark w3-left-align w3-large">
		<li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
			<a class="w3-padding-large w3-hover-theme w3-large w3-theme-dark" href="javascript:void(0);" onclick="myMenu()" title="Ouvir le menu"><i class="fa fa-bars"></i></a>
		</li>
		<li>
		<a href="<?php $plxShow->racine() ?>" class="w3-padding-large w3-theme-light w3-hover-theme ">
			<?php $plxShow->lang('HOME') ?>
		</a>
		</li>
	<?php $plxShow->staticList('','<li class="w3-hide-small  #static_status w3-theme-dark  w3-hover-shadow" id="#static_id"><a href="#static_url" title="#static_name" class="w3-padding-large w3-hover-theme ">#static_name</a></li>', '<div class="w3-hide-small w3-padding-large  w3-hover-theme ">#group_name</div>  ' ); ?>
	</ul>

	<!-- Navbar on small screens -->
	<div id="navDemo" class="menu-small w3-hide w3-hide-large w3-hide-medium "  >
		  <ul class="w3-navbar w3-left-align w3-large w3-theme-dark w3-padding-bottom ">
			<?php $plxShow->staticList('','<li class="#static_status " id="#static_id"><a href="#static_url" title="#static_name" class="w3-padding-large w3-hover-theme">#static_name</a></li>', '<div class="w3-padding-large ">#group_name</div>  '); ?>
		  </ul>
	</div>
	
</nav>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myMenu() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

<!-- Header -->
<div class="w3-container w3-theme w3-padding">
  <h1 class="w3-xxlarge"><b><?php $plxShow->mainTitle('link'); ?></b></h1>
  <h2 class="w3-xlarge"><i><?php $plxShow->subTitle(); ?></i></h2>
</div>
