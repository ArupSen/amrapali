<?php
// each photo has a thumbnail and full sized version
// thumbnail and full size have the same filename
// they also have a title, date and description
$press_photos = array(
	// array('filename', 'title' , 'date', 'description'),
	// elle august
	array('15-284','elle','august 2013',''),
	array('img-807161828-0001','elle','august 2013',''),
	array('img-807161828-0002','elle','august 2013',''),
	array('img-807161828-0003','elle','august 2013',''),
	array('img-807161828-0004','elle','august 2013',''),
	// CR Magazine
	array('486767_10151051230921080_37502951_n', 'CR Magazine', '', ''),
	array('527427_10151051230776080_224413029_n', 'CR Magazine', '', ''),
	array('534227_10151051231231080_1743564581_n', 'CR Magazine', '', ''),
	array('561999_10151051231071080_170817921_n', 'CR Magazine', '', ''),
	array('580247_10151051231411080_1354574303_n', 'CR Magazine', '', ''),
	// grazia
	array('15-292', 'Grazia', 'August 2013', ''),
	array('dome-ring--MA', 'Grazia', 'august 2013', ''),
	array('Grazia---August-2013', 'Grazia', 'august 2013', ''),
	array('MA', 'Grazia', 'august 2013', ''),
	array('manish-arora--dome-ring', 'Grazia', 'august 2013', ''),
	array('Manish-Arora-Hoop-earrings', 'Grazia', 'august 2013', ''),
	// grazia 2
	array('Grazia-1', 'Grazia', 'september 2013', ''),
	array('Grazia-2', 'Grazia', 'september 2013', ''),
	array('Grazia-3', 'Grazia', 'september 2013', ''),
	array('Grazia', 'Grazia', 'september 2013', ''),
	// harper magazine
	array('harper-may-2013-issue_2','harpers bazaar','may 2013',''),
	array('harper-may-2013-issue_3','harpers bazaar','may 2013',''),
	// other press
	array('Amrapali---1','hello','june 2012',''),
	array('Amrapali---2','hello','june 2012',''),
	array('Amrapali---3','hello','june 2012',''),
	array('AMRAPALI-EARRINGS-IN-GRAZIA','grazia','',''),
	array('Anushka-Sharma-in-Candy-drop-hoops-and-necklace-by-Manish-Arora-and-Amrapali-collection-featured-in-Maxim-Cover---Feb-2013','maxim','february 2013',''),
	array('Atelier-February-2012-001','Atelier','february 2012',''),
	array('Blackbook-Cover--July','blackbook','july 2013',''),
	array('Blackbook-Feature--July','blackbook','july 2013',''),
	array('Brasil_Amrapali2','brasil relogios','november 2011',''),
	array('Brasil_cover','brasil relogios','november 2011',''),
	array('British-Vogue-featuring-Amrapali-Jewels','Vogue','',''),
	array('Canadian-Jeweller--Feature','Canadian Jeweller','',''),
	array('DNA-After-Hrs,-22nd-October-2013','DNA after hours','October 2013',''),
	array('Filmfare--Front-1','Filmfare','february 2013',''),
	array('Gazelle-Earrings-from-the-Manish-Arora---Amrapali-Jewels-collection-featured-in-Elle-France.','Elle France','',''),
	array('harper-may-2013-issue','Harpers Bazaar','may 2013',''),
	array('Harpers-Bazaar-June-2013','Harpers Bazaar','june 2013',''),
	array('Harrods-magazine-featuring-Amrapali-(1)','Harrods magazine','',''),
	array('Harrods-magazine-featuring-Amrapali','Harrods magazine','',''),
	array('Hello-June-2012---cover','Hello','june 2012',''),
	array('Hi-Blitz----August-2013','H','august 2013',''),
	array('How-to-Spend-It--FT-UK','Financial Times','',''),
	array('Indian-Summer---The-Telegraph,-UK','The Telegraph','',''),
	array('Lisa-Ray-wearing-belt-from-Manish-Arora-for-Amrapali-collection--featured-in-Marie-Claire','Marie Claire','',''),
	array('Manish-Arora-for-Amrapali-SS13-In-Vogue-India-pg.-62','Vogue India','',''),
	array('Mumbai-Mirror,-18th-November-2013','Mumbai Mirror','November 2013',''),
	array('Picture1','','',''),
	array('The-Asian-Age-Aug-18,-2013','the asian age','august 2013',''),
	array('The-Sunday-Standard-Oct-06,-2013','the sunday standard','october 2013',''),
	array('The-Sunday-Standard-Oct-27,-2013','the sunday standard','october 2013',''),
	array('Vogue-Feature-2','vogue','',''),
	array('Vogue-Front-2','vogue','',''),
	array('Vogue-June','vogue','',''),
	// prestige hong kong
	array('Prestige-Hong-Kong-August-2013_Amrapali','prestige hong kong','august 2013',''),
	array('Prestige-Hong-Kong-August-2013_Manish-Arora-for-Amrapali','prestige hong kong','august 2013',''),
	// telegraph
	array('1303100004090001', 'telegraph', '', ''),
	array('1303100004500001', 'telegraph', '', ''),
	array('1303100005300001', 'telegraph', '', ''),
	array('1303100006060001', 'telegraph', '', ''),
	array('1303100006440001', 'telegraph', '', ''),
	array('1303100007180001', 'telegraph', '', ''),
	array('1303100007530001', 'telegraph', '', ''),
	array('1303100008340001', 'telegraph', '', ''),
	array('1303100009120001', 'telegraph', '', ''),
	array('1303100009470001', 'telegraph', '', ''),
	// verve august
	array('15-274','verve','',''),
	array('15-276','verve','',''),
	array('manish-arora---verve1','verve','august',''),
	array('manish-arora-verve-2','verve','august',''),
	array('manish-arora-verve-3','verve','august',''),
	// verve september
	array('Verve-1', 'verve', 'september', ''),
	array('Verve-2', 'verve', 'september', ''),
	array('Verve-3', 'verve', 'september', ''),
	array('Verve-4', 'verve', 'september', ''),
	array('Verve-5', 'verve', 'september', ''),
	array('Verve-6', 'verve', 'september', ''),
	array('Verve-7', 'verve', 'september', ''),
	array('Verve-8', 'verve', 'september', ''),
	array('Verve-9', 'verve', 'september', ''),
	array('Verve-10', 'verve', 'september', ''),
	array('Verve', 'verve', 'september', ''),
	// vogue august
	array('15-248','vogue','',''),
	array('MA-for-amrapali','vogue','',''),
	array('Manish-arora-1','vogue','',''),
	array('Manish-arora-for-amrapali','vogue','',''),
	// vogue india
	array('img-X08110251-0001', 'vogue india', '', ''),
	array('img-X08110251-0002', 'vogue india', '', ''),
	array('img-X08110358-0001', 'vogue india', '', ''),
	array('img-X08110417-0001', 'vogue india', '', ''),
	array('img-X08110433-0001', 'vogue india', '', ''),
	// vogue september
	array('Vogue-1','vogue','',''),
	array('Vogue-2','vogue','',''),
	array('Vogue-3','vogue','',''),
	array('Vogue','vogue','','')	
	
);

?>