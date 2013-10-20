<?php
// -- index.php called philosophy --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<!-- Section #1 / Intro -->
<section id="first" class="story first" data-speed="8" data-type="background">    	
	<!-- <div class="smashinglogo" data-type="sprite" data-offsetY="100" data-Xposition="50%" data-speed="-2"></div> -->		
	<article>

		<img src="images/eternal_txt.png" alt="tutorial-title" width="711" height="242" />
		
    </article>
</section>

<!-- Section #2 / Background Only -->
<section id="second" class="story first" data-speed="8" data-type="background">
	<article>
		<img src="images/muse_txt.png" alt="tutorial-title" width="782" height="364" />
		
	</article>
</section>

<!-- Section #3 / Photos -->
<section id="third" class="story first" data-speed="8" data-type="background">    	
	<!-- <div class="photograph" data-type="sprite" data-offsetY="1250" data-Xposition="25%" data-speed="2"></div> -->
	<article>
		<img src="images/heritage_txt.png" alt="tutorial-title" width="887" height="316" />
	    
	</article>
</section>	


<!-- Section #4 / HTML5 Video -->
<section id="fourth" class="story first" data-speed="8" data-type="background">
	<article>
		<img src="images/passion_txt.png" alt="tutorial-title" width="467" height="369" />
    
	</article>

</section>	
<!-- Section #1 / Intro -->
<section id="fifth" class="story first .byebye" data-speed="8" data-type="background">    	
	<!-- <div class="smashinglogo" data-type="sprite" data-offsetY="100" data-Xposition="50%" data-speed="-2"></div> -->		
	<article>

		<!-- <img src="images/eternal_txt.png" alt="tutorial-title" width="711" height="242" /> -->
		
    </article>
</section>

<?php 
// filename, title, id
// img_tag('','',''); ?>

<?php footer(); ?>