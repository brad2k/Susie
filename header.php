<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="description" content="<? echo $meta_description ?>" />
<meta name="keywords" content="<? echo $meta_keywords ?>" />
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title><? echo $page_title ?></title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>

<div id="stage" class="<? echo $page_type ?>">
	<div id="header">
		<h1 id="masthead"><a href="index.php">Skin Care by Susie Byleckie</a></h1>
		<ul id="primary_nav">
			<li><a href="facials.php"<? if ($page_type == 'facials') { echo ' class="on"';} ?>><span>Facials</span></a></li>
			<li><a href="sugaring.php"<? if ($page_type == 'sugaring') { echo ' class="on"';} ?>><span>Sugaring</span></a></li>
			<li><a href="skin-care.php"<? if ($page_type == 'skin-care') { echo ' class="on"';} ?>><span>Skin Care</span></a></li>
			<li><a href="biography.php"<? if ($page_type == 'biography') { echo ' class="on"';} ?>><span>Biography</span></a></li>
			<li class="last"><a href="contact.php"<? if ($page_type == 'contact') { echo ' class="on"';} ?>><span>Contact</span></a></li>
		</ul>
	</div>

	<div id="main">