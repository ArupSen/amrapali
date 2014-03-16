<?php // mainly html shortcuts using echo statements
// -- function.php --

// takes three arguments of src, title and id
// .jpg extension can be omitted
function img_tag($src='',$title='',$id='')
{
	echo '<img src="'.IMGPATH.$src.'" title="'.$title.'" alt="" id="'.$id.'" />';
}

// include the footer
function footer()
{
	require_once INCPATH.'footer.php';
}

// include the navbar
function navbar()
{
	require_once INCPATH.'navbar.php';
}

// preload swap images
// takes array of images as arg
// loads them to the document.images array via js
function img_preloader($file_names)
{
	$length = count($file_names);
	global $tile_image_path;
	echo " if(document.images) { ";
		for ($i=0; $i < $length; $i++) { 
			echo 'img'.$i.' = new Image();';
			echo 'img'.$i.'.src = "'.$tile_image_path.'.popups/'.$file_names[$i][0].'.jpg";';
		}
	echo "}";
		
}

// create image swap file path and hover text as data attributes
// helper function for list_images()
function add_data($file)
{
	global $tile_image_path;
	$no_dash = str_replace('-', ' ', $file);
	return 'data-swap="'.$tile_image_path.$file[0].'.jpg" data-text="'.$file[1].'" alt="'.$file[1].'"';
}
// add the a tag href and title info
// helper function for list_images()
function popup_info($file)
{
	global $tile_image_path;
	return 'href="'.$tile_image_path.'popups/'.$file[0].'.jpg" data-text="'.$file[1].'" ';
}
// helper function adds the alt tag text
function add_alt($file)
{
  return 'alt="'.$file[1].'"';
}

// creates image tags wraps in list tags for collection pages
// @param $start - where in the array does the list begin, type number
// @param $end - where in the array does the list end, type number
// @param $tiles - array of file names
function list_images($start, $end, $tiles)
{
	global $tile_image_path, $ext;
	for ($i=$start; $i < $end; $i++) { 
		echo '<li><a class="popup" '.popup_info($tiles[$i]).'><img src="'.$tile_image_path.$tiles[$i][0].'"'.add_alt($tiles[$i]).'width="277" height="277" /></a></li>'."\n";
	}
}

// create thumbnail images on the spotlight pages
function create_thumblist($photos)
{
	global $array_length, $main_image_path, $thumbnail_path;
	
	for ($i=0; $i < $array_length; $i++) { 
		if ($photos[$i][2] == '') {
			$photos[$i][2] = 'August 2012';
		}
		if ($photos[$i][3] == '') {
			$photos[$i][3] = '&nbsp;';
		}
		print"
		<li class=\"pressItem\" data-img-src=\"".$main_image_path.$photos[$i][0].".jpg\">
			<span class='title'>".$photos[$i][1]."</span>
			<span class='subscript'>".$photos[$i][2]."</span> 
			<span class='description'>".$photos[$i][3]."</span>
			<span class='thumbnail'><img src=\"".$thumbnail_path.$photos[$i][0].".jpg\" alt=\"\" /></span>
		</li>";
	}
}

?>
