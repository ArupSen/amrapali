<?php
// -- contact.php general --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
// recaptcha stuff
require_once INCPATH.'recaptchalib.php';
$publickey = "6Ld-Ve8SAAAAAL7NLJn6R46awyZB_mNZ3SydMXV8";
$privatekey = "6Ld-Ve8SAAAAAFSpkJwpozC-7_XWtWSGL90eG1d5";
navbar();

// the unique contents will go here up to the footer
?>
<!-- <div class="logo"></div> -->
<?php img_tag('Contact-Us.jpg','','collections-logo'); ?>
<div class="contact_form">
<h3>CONTACT US</h3>
<hr />
<p class="contact_info">
	AMRAPALI CORPORATE OFFICE<br />
	K-14, ASHOK MARG, C-SCHEME,<br />
	JAIPUR 302001<br />
	+91 141 5191100 <br /><br />
	<a href="mailto:info@amrapalijewels.com">info@amrapalijewels.com</a>
</p>
<h3>WRITE TO US</h3>
<hr />
<?php
// reCaptcha stuff
$resp = recaptcha_check_answer ($privatekey,
  $_SERVER["REMOTE_ADDR"],
  $_POST["recaptcha_challenge_field"],
  $_POST["recaptcha_response_field"]);

// OPTIONS - PLEASE CONFIGURE THESE BEFORE USE!

$yourEmail = "info@amrapalijewels.com"; // the email address you wish to receive these mails through
$yourWebsite = "Amrapali Jewels"; // the name of your website
$thanksPage = ''; // URL to 'thanks for sending mail' page; leave empty to keep message on the same page 
$maxPoints = 4; // max points a person can hit before it refuses to submit - recommend 4
$requiredFields = "name,surname,email"; // names of the fields you'd like to be required as a minimum, separate each field with a comma


// DO NOT EDIT BELOW HERE
$error_msg = array();
$result = null;

$requiredFields = explode(",", $requiredFields);

function clean($data) {
	$data = trim(stripslashes(strip_tags($data)));
	return $data;
}
function isBot() {
	$bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");

	foreach ($bots as $bot)
		if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
			return true;

	if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
		return true;
	
	return false;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isBot() !== false)
		$error_msg[] = "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];
		
	// lets check a few things - not enough to trigger an error on their own, but worth assigning a spam score.. 
	// score quickly adds up therefore allowing genuine users with 'accidental' score through but cutting out real spam :)
	$points = (int)0;
	
	$badwords = array("adult", "beastial", "bestial", "blowjob", "clit", "cum", "cunilingus", "cunillingus", "cunnilingus", "cunt", "ejaculate", "fag", "felatio", "fellatio", "fuck", "fuk", "fuks", "gangbang", "gangbanged", "gangbangs", "hotsex", "hardcode", "jism", "jiz", "orgasim", "orgasims", "orgasm", "orgasms", "phonesex", "phuk", "phuq", "pussies", "pussy", "spunk", "xxx", "viagra", "phentermine", "tramadol", "adipex", "advai", "alprazolam", "ambien", "ambian", "amoxicillin", "antivert", "blackjack", "backgammon", "texas", "holdem", "poker", "carisoprodol", "ciara", "ciprofloxacin", "debt", "dating", "porn", "link=", "voyeur", "content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");

	foreach ($badwords as $word)
		if (
			strpos(strtolower($_POST['comments']), $word) !== false || 
			strpos(strtolower($_POST['name']), $word) !== false
		)
			$points += 2;
	
	if (strpos($_POST['comments'], "http://") !== false || strpos($_POST['comments'], "www.") !== false)
		$points += 2;
	if (isset($_POST['nojs']))
		$points += 1;
	if (preg_match("/(<.*>)/i", $_POST['comments']))
		$points += 2;
	if (strlen($_POST['name']) < 3)
		$points += 1;
	if (strlen($_POST['comments']) < 15 || strlen($_POST['comments'] > 1500))
		$points += 2;
	if (preg_match("/[bcdfghjklmnpqrstvwxyz]{7,}/i", $_POST['comments']))
		$points += 1;
	// end score assignments

	foreach($requiredFields as $field) {
		trim($_POST[$field]);
		
		if (!isset($_POST[$field]) || empty($_POST[$field]) && array_pop($error_msg) != "Please fill in all the required fields and submit again.\r\n")
			$error_msg[] = "Please fill in all the required fields and submit again.";
	}

	if (!empty($_POST['name']) && !preg_match("/^[a-zA-Z-'\s]*$/", stripslashes($_POST['name'])))
		$error_msg[] = "The name field must not contain special characters.\r\n";
	if (!empty($_POST['email']) && !preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', strtolower($_POST['email'])))
		$error_msg[] = "That is not a valid e-mail address.\r\n";
	if (!empty($_POST['url']) && !preg_match('/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?\/?/i', $_POST['url']))
		$error_msg[] = "Invalid website url.\r\n";
  if (!$resp->is_valid) { 
    $error_msg[] = 'The captcha coed was not entered correctly. Please try again.';
  }
	if ($error_msg == NULL && $points <= $maxPoints) {
		$subject = "Email from website";
		
		$message = "You received this e-mail message through your website: \n\n";
		
		
		foreach ($_POST as $key => $val) {
        if (is_array($val)) {
          foreach ($val as $subval) {
            if ($key == 'recaptcha_challenge_field' || $key == 'recaptcha_response_field') {
              $message .= '';
            } else {
        //      $message .= ucwords($key) . ": " . clean($subval) . "\r\n";
          }
        }
			} else {
				if ($key != 'submit' && $key != 'recaptcha_challenge_field' && $key != 'recaptcha_response_field') {
					$message .= ucwords($key) . ": " . clean($val) . "\r\n";
				}	
			}
		}
		

		if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
			$headers   = "From: $yourEmail\n";
			$headers  .= "Reply-To: {$_POST['email']}";
		} else {
			$headers   = "From: $yourWebsite <$yourEmail>\n";
			$headers  .= "Reply-To: {$_POST['email']}";
		}

		if (mail($yourEmail,$subject,$message,$headers)) {
			if (!empty($thanksPage)) {
				header("Location: $thanksPage");
				exit;
			} else {
				$result = 'Your mail was successfully sent.';
				$disable = true;
			}
  } else {
			$error_msg[] = 'Your mail could not be sent this time. ['.$points.']';
		}
	} else {
		if (empty($error_msg))
			$error_msg[] = 'Your mail looks too much like spam, and could not be sent this time. ['.$points.']';
	}
}
function get_data($var) {
	if (isset($_POST[$var]))
		echo htmlspecialchars($_POST[$var]);
}

if (!empty($error_msg)) {
	echo '<p class="error">ERROR: '. implode("<br />", $error_msg) . "</p>";
}
if ($result != NULL) {
	echo '<p class="success">'. $result . "</p>";
}
?><script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'clean'
 };
 </script>
<form action="<?php echo basename(__FILE__); ?>" method="post">
<noscript>
		<p><input type="hidden" name="nojs" id="nojs" /></p>
</noscript>

	<p><label for="name">Name *</label> 
		<input type="text" name="name" id="name" value="<?php get_data("name"); ?>" /><br /></p>

	<p><label for="surname">Surname *</label> 
		<input type="text" name="surname" id="surname" value="<?php get_data("surname"); ?>" /><br /></p>		
	
	<p><label for="email">Email *</label> 
		<input type="text" name="email" id="email" value="<?php get_data("email"); ?>" /><br /></p>
	<span>fields marked with a (*) are required</span>	
	
	<p><label for="message"></label>
		<textarea name="message" id="comments" rows="5" cols="20"><?php get_data("message"); ?></textarea><br /></p>

	<?php echo recaptcha_get_html($publickey); ?>
<p>
	<input type="submit" name="submit" id="submit" value="Send >" <?php if (isset($disable) && $disable === true) echo ' disabled="disabled"'; ?> />
</p>
</form>
</div>
<?php footer(); ?>
