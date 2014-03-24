<?php
// -- 404.php --

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="error">
<h1>Error 404</h1>
<p>That page doesn't exist or isn't working. Sorry for any inconvenience. Please try one of the links above.</p>
</div>



<?php footer(); ?>
