<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<?php if ($meta_description != "") { ?><meta name="description" content="<?php echo $meta_description ?>" /><?php } ?>
	<title><?php echo $page_title ?></title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>

<div id="stage" class="<?php echo $page_type ?>">
	<div id="header" itemscope itemtype="http://schema.org/WPHeader">
		<header>
			<h1 id="masthead"><a href="index.php">Skin Care by Susie Byleckie</a></h1>
			<ul id="primary_nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<li><a href="facials.php"<?php if ($page_type == 'facials') { echo ' class="on"';} ?>><span>Facials &amp; Peels</span></a></li>
				<li><a href="sugaring.php"<?php if ($page_type == 'sugaring') { echo ' class="on"';} ?>><span>Sugaring</span></a></li>
				<li><a href="reflexology.php"<?php if ($page_type == 'reflexology') { echo ' class="on"';} ?>><span>Reflexology</span></a></li>
				<li><a href="biography.php"<?php if ($page_type == 'biography') { echo ' class="on"';} ?>><span>Biography</span></a></li>
				<li class="last"><a href="contact.php"<?php if ($page_type == 'contact') { echo ' class="on"';} ?>><span>Contact</span></a></li>
			</ul>
		</header>
	</div>

	<div id="main" role="main">