<?php
$page_type = "contact";
$page_title = "Contact Susie Byleckie";
$meta_description = "Desc";
$meta_keywords = "Keywords";
include("header.php");
?>

<div itemscope itemtype="http://schema.org/ContactPage">
	<h2>Contact Susie</h2>

	<div itemscope itemtype="http://schema.org/Person">

		<meta itemprop="image" content="http://www.skincarebysusiebyleckie.com/Images/SusieByleckie.jpg" />
		<meta itemprop="gender" content="female" />
		<meta itemprop="name" content="Susie Byleckie" />

		<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">5120 J Street, Suite G</span><br />(inside <a href="http://www.angelaburleson.com/" target="_blank">Wellness of Life</a>)<br /><span itemprop="addressLocality">Sacramento</span>, <span itemprop="addressRegion">CA</span> <span itemprop="postalCode">95819</span></div><br />

		<dl>
			<dt>E-mail:</dt>
			<dd><a href="mailto:raysusieb@softcom.net?subject=Web%20Inquiry" itemprop="email">raysusieb@softcom.net</a></dd>

			<dt>Phone:</dt>
			<dd itemprop="telephone">(916) 455-7887</dd>
		</dl>
	</div>
</div>
<?php include("footer.php"); ?>