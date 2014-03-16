<?php
// get the filename
$filename = basename($_SERVER['SCRIPT_FILENAME'],".php");

// is the file nested
$nested = array(
	
	'',
	''
);
function is_nested($nested, $filename) {
	$array_count = count($nested);
	$match_count = 0;
	for ($i=0; $i < $array_count; $i++) { 
		if ($filename == $nested[$i]) {
			$match_count++;
		}
	}
	return $match_count > 0;
}

// included header file which also inserts meta tags
// the functions and constants files are also required
if (is_nested($nested, $filename)) {
	require_once INCPATH.'sub-page-constants.php';
} else {
	require_once INCPATH.'constants.php';
}
require_once INCPATH.'functions.php';
include_once DATAPATH.'meta_tags.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<?php // leave in during development and remove once live ?>
	<meta name="robots" content="noindex, nofollow">
	
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta name="description" content="<?php echo ${$filename}['description']; ?>" />
	<meta name="keywords" content="<?php echo ${$filename}['keywords']; ?>" />

	<title>Amrapali Jewels<?php echo ${$filename}['title']; ?></title>
	<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo CSSPATH.'style.css'; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSSPATH.'press.css'; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSSPATH.'colorbox.css'; ?>" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php echo IMGPATH.'favicon.ico'; ?>" type="image/x-icon" />
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="<?php echo CSSPATH.'style_ie.css'; ?>" type="text/css" media="screen" />	
	<![endif]-->	
	<!--[if IE 8]>
	<link rel="stylesheet" href="<?php echo CSSPATH.'style_ie8.css'; ?>" type="text/css" media="screen" />	
	<![endif]-->

</head>
<body id="<?php echo $filename; ?>">
	<div id="wrap">
		<div id="heading">
			<h1 id="mainheading">Amrapali</h1>
			<h2 id="subheading">JAIPUR</h2>			
		</div>
