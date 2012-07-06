<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php if ($meta_description != "") { ?><meta name="description" content="<?php echo $meta_description ?>" /><?php } ?>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title><?php echo $page_title ?></title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>

<div id="stage" class="<?php echo $page_type ?>">
	<div id="header" itemscope itemtype="http://schema.org/WPHeader">
		<h1 id="masthead"><a href="index.php">Skin Care by Susie Byleckie</a></h1>
		<ul id="primary_nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<li><a href="facials.php"<?php if ($page_type == 'facials') { echo ' class="on"';} ?>><span>Facials &amp; Peels</span></a></li>
			<li><a href="sugaring.php"<?php if ($page_type == 'sugaring') { echo ' class="on"';} ?>><span>Sugaring</span></a></li>
			<li><a href="reflexology.php"<?php if ($page_type == 'reflexology') { echo ' class="on"';} ?>><span>Reflexology</span></a></li>
			<li><a href="biography.php"<?php if ($page_type == 'biography') { echo ' class="on"';} ?>><span>Biography</span></a></li>
			<li class="last"><a href="contact.php"<?php if ($page_type == 'contact') { echo ' class="on"';} ?>><span>Contact</span></a></li>
		</ul>
	</div>

	<div id="main">