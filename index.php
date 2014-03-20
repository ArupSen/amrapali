<?php
// -- index.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<?php
img_tag('home-page-for-tablet-bigtext.jpg','','tablet');
?>
<!-- Section #1 / Intro -->
<section id="first" class="story first" data-speed="8" data-type="background">    	
	<div class="symbols" data-type="sprite" data-offsetY="600" data-speed="4"></div>		<!-- data-type="background" data-offsetY="650" data-Xposition="50%" data-speed="4" -->
	<article>
		<div class="eternal"></div>
		<!-- <img src="images/eternal_mystery_background.png" alt="tutorial-title" width="1920" height="1400" /> -->
<h3>WELCOME TO A WORLD OF</h3>
<p>Amrapali is a globally renowned, respected and coveted luxury jewellery brand <br /><br />Scroll down the page to explore</p>		
    </article>
	
</section>

<!-- Section #2 / Background Only -->
<section id="second" class="story first" data-speed="8" data-type="background">
	<article>
	<!--	<img src="images/muse_txt.png" alt="tutorial-title" width="782" height="364" /> -->
  <div class="muse-text">
<h3>THE WORLD OF AMRAPALI</h3>
<hr class="topLeft top" />
<hr class="topRight top"/>
<h2>OUR MUSE</h2>
<h3>THE SOUL OF THIS WORLD, IT'S DRIVING INSPIRATION</h3>
<hr class="bottomLeft bottom" />
<hr class="bottomRight bottom" />
<p>Amrapali was a renowned royal courtesan said to have lived around 500BC in ancient India, she is also the timeless symbol of a Muse, one who brings you inspiration, intuition and higher vision through her timeless beauty and grace. Amrapali's extraordinary beauty and charm was also known far and wide. She is mentioned in the old Pali and Buddhist traditions, particularly in conjunction with the Buddha staying at her mango grove. The timelessness of the legend, and its immediate association to feminine beauty, delight and India's heritage make it the ideal association for the brand.</p>
  </div>  
	</article>
</section>

<!-- Section #3 / Photos -->
<section id="third" class="story first" data-speed="8" data-type="background">    	
	<!-- <div class="photograph" data-type="sprite" data-offsetY="1250" data-Xposition="25%" data-speed="2"></div> -->
	<article>
		<!-- <img src="images/heritage_txt.png" alt="tutorial-title" width="887" height="316" /> -->
	    
  <div class="passion-text">
<h3>SIGNATURE STATEMENT JEWELLERY</h3>
<hr class="topLeft top" />
<hr class="topRight top"/>
<h2>HERITAGE CHIC</h2>
<h3>ECLECTIC INDIAN AESTHETIC</h3>
<hr class="bottomLeft bottom" />
<hr class="bottomRight bottom" />
<p>Luxurious Jewels from the house of Amrapali shaped in elegant constituents personify the heritage of India with a modern eclectic twist.</p>
  </div>  
	</article>
</section>	


<!-- Section #4 / HTML5 Video -->
<section id="fourth" class="story first" data-speed="16" data-type="background" data-offsetY="200">
	<div class="lens-flare" data-type="sprite" data-offsetY="1" data-speed="4"></div>
	<article>
		<img src="images/passion_txt.png" alt="tutorial-title" width="467" height="369" />
  <div class="heritage-text">
<h3>TREASURES FROM THE</h3>
<hr class="topLeft top" />
<hr class="topRight top"/>
<h2>ROOTS</h2>
<h3>Ancient Art revival</h3>
<hr class="bottomLeft bottom" />
<hr class="bottomRight bottom" />
<p>Led by the passion of its founders, Rajiv Arora & Rajesh Ajmera, two heritage enthusiasts and history students, Amrapali is the finest reflection of India's unmatched jewellery traditions and workmanship.</p>
  </div>  
	</article>

</section>	
<!-- Section #1 / Intro -->
<section id="fifth" class="story first .byebye" data-speed="8" data-type="background" data-offsetY="200">    	
	<!-- <div class="smashinglogo" data-type="sprite" data-offsetY="100" data-Xposition="50%" data-speed="-2"></div> -->		
	<article>
  <div class="heritage-text">
<h3>Extraordinary</h3>
<h2>CRAFTSMANSHIP</h2>
<h3>Support to craftsmen and the legacy of generations</h3>
<hr />
<p>Renowned for its signature magnificent pieces and rare craftsmanship, Amrapali harmonizes classical tradition, with modern interpretation of ancient aesthetic and techniques.</p>
  </div>  
<!--		<img src="images/craftmanship_txt.png" alt="craftmanship-title" width="939" height="309" /> -->
		
    </article>
</section>

<?php footer(); ?>
