<?php
// -- navbar.php --
// this is the main horizontal navigation bar
// $url_prefix = "http://yogarup.com/amrapali-dev/";
// $url_prefix = "http://martnerandmowat.com";
$url_prefix = "http://yogarup.com/amrapali/";
?>
<div id="navbar-bg">
<ul id="navbar">
	<li id="nav-philosophy"><a href="<?php echo $url_prefix; ?>index.php" title="philosophy"><span class="tab">home</span></a></li>	
	<li id="nav-collections"><a href="<?php echo $url_prefix; ?>collections.php" title="collections"  onclick="return false;"><span class="tab">collections</span></a>
		<div class="sub-nav">			
			<a href="" onclick="return false;">FINE</a>
			<a href="<?php echo $url_prefix; ?>fine_Holi.php" class="sub-sub">Holi</a>
			<a href="<?php echo $url_prefix; ?>fine_Masterpieces.php" class="sub-sub">Masterpieces</a>
			<a href="<?php echo $url_prefix; ?>fine_panna.php" class="sub-sub">Panna</a>
			<a href="<?php echo $url_prefix; ?>fine_Polki.php" class="sub-sub">Polki</a>
			<a href="<?php echo $url_prefix; ?>fine_Soul_Bazaar.php" class="sub-sub">Soul Bazaar</a>
			<a href="<?php echo $url_prefix; ?>silver.php">SILVER</a>
			<a href="" onclick="return false;">MANISH ARORA</a>
			<a href="<?php echo $url_prefix; ?>Manish_Arora_SS13.php" class="sub-sub">Spring / Summer '13</a>
			<a href="<?php echo $url_prefix; ?>Manish_Arora_AW13.php" class="sub-sub">Autumn / Winter '13</a>
			<a href="<?php echo $url_prefix; ?>Manish_Arora_SS14.php" class="sub-sub">Spring / Summer '14</a>
			<a href="<?php echo $url_prefix; ?>limited_edition.php">LIMITED EDITION</a>
		</div>
		</li>
	<li id="nav-spotlight"><a href="<?php echo $url_prefix; ?>spotlight.php" title="spotlight"><span class="tab">limelight</span></a>
		<div class="sub-nav">
			<a href="<?php echo $url_prefix; ?>bollywood.php">BOLLYWOOD</a>
			<a href="<?php echo $url_prefix; ?>hollywood.php">HOLLYWOOD</a>			
			<a href="<?php echo $url_prefix; ?>spotlight.php">PUBLICATIONS</a>
			<a href="<?php echo $url_prefix; ?>news.php">NEWS</a>
			<a href="<?php echo $url_prefix; ?>awards.php">AWARDS</a>
			<a href="<?php echo $url_prefix; ?>exhibitions.php">EXHIBITIONS</a>
		</div>
		</li>
	<li id="nav-eshop"><a href="eshop.php" title="eshop" onclick="return false;"><span class="tab">e-shop</span></a></li>
	<li id="nav-stores"><a href="<?php echo $url_prefix; ?>stores.php" title="stores"><span class="tab">stores</span></a>
		<div class="sub-nav">
			<a href="<?php echo $url_prefix; ?>stores.php">INDIA</a>
			<a href="<?php echo $url_prefix; ?>international.php">INTERNATIONAL</a>			
		</div>
		</li>
	<li id="nav-contact"><a href="<?php echo $url_prefix; ?>contact.php" title="contact"><span class="tab">Contact</span></a>
		<div class="sub-nav">			
			<a href="<?php echo $url_prefix; ?>contact.php">GENERAL</a>
			<a href="<?php echo $url_prefix; ?>careers.php">CAREERS</a>
			<a href="<?php echo $url_prefix; ?>manufacturing.php">MANUFACTURING</a>
		</div>
		</li>
		<li>
			<ul class="social_links">
				<li><a href="https://www.facebook.com/amrapalijewels" title="follow us on facebook" class="facebook_link" target="_blank"></a></li>
				<li><a href="https://twitter.com/amrapalijewels" title="follow us on twitter" class="twitter_link" target="_blank"></a></li>
				<li><a href="http://instagram.com/amrapalijewels#" title="follow us on instagram" class="instagram_link" target="_blank"></a></li>			
			</ul>
		</li>
</ul>
</div>
<div id="clear"></div>
<div id="contents">
