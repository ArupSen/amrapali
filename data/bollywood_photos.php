<?php
// each photo has a thumbnail and full sized version
// thumbnail and full size have the same filename
// they also have a title, date and description
$bollywood_photos = array(
	// array('filename', 'title' , 'date', 'description'),
	array('Abhay-Deol-for-Amrapali-at-IIJW-2012','Abhay Deol','August 2012',''),
	array('Aishwarya-Rai_2','Aishwarya Rai','January 2011',''),
	array('Aishwarya-Rai','Aishwarya Rai','January 2011',''),
	array('Amitabh-Bachchan-2','Amitabh Bachchan','November 2012',''),
	array('Amrita-Puri','Amrita Puri','March 2013',''),
	array('Anushka-Sharma-at-IIFA-awards-2011','Anushka Sharma','June 2011',''),
	array('Anushka-Sharma','Anushka Sharma','February 2013',''),
	array('Asin','Asin','February 2012',''),
	array('Bipasha-Basu-in-silver-gold-plated--traditional-Jhumki-earrings','Bipasha Basu','August 2013',''),
	array('Bipasha-Basu','Bipasha Basu','February 2013',''),	
	array('Chitrangada-Singh-1','Chitrangada Singh','February 2013',''),
	array('Chitrangada-Singh-in-silver-gold-plated-traditional-earrings','Chitrangada Singh','August 2013',''),
	array('Chitrangada-Singh','Chitrangada Singh','January 2013',''),
	array('Deepika-Padukone-1','Deepika Padukone','June 2013',''),
	array('Deepika-Padukone-2','Deepika Padukone','June 2013',''),
	array('Deepika-Padukone-3','Deepika Padukone','September 2012',''),
	array('Deepika-Padukone-in-silver-duo-tone-earrings-in-Ram-Leela','Deepika Padukone','November 2013',''),
	array('Deepika-Padukone-in-silver-gold-plated,-rose-quartz-and-pearl-earrings','Deepika Padukone','July 2013',''),
	array('Deepika-Padukone-in-yellow-gold-and-diamond-earrings','Deepika Padukone','July 2013',''),
	array('Deepika-Padukone-in-yellow-gold-and-pearl-jhumki-earrings','Deepika Padukone','July 2013',''),
	array('Deepika-Padukone','Deepika Padukone','May 2013',''),
	array('Dia-Mirza-1','Dia Mizra','January 2013',''),
	array('Dia-Mirza-wearing-jewellery-at-IIFA-2010','Dia Mizra','June 2010',''),
	array('Dia-Mirza','Dia Mizra','January 2013',''),
	array('Dimple-Kapadia','Dimple Kapadia','March 2009',''),
	array('Freida-Pinto','Frieda Pinto','June 2013',''),
	array('Huma-Qureshi-at-iifa-awards-2013','Huma Qureshi','May 2013',''),
	array('Jacqueline-Fernandez-At-IIFA-Rocks-2013','Jacqueline Fernandez','May 2013',''),
	array('Jacqueline-Fernandez-in-Celeste-necklace-from-Manish-Arora--Amrapali-AW-\'13-collection','Jacqueline Fernandez','October 2013',''),
	array('Jacqueline-Fernandez-in-silver-gold-plated,-crystal-Lotus-earrings','Jacqueline Fernandez','August 2013',''),
	array('Jaya-Bachchan','Jaya Bachchan','November 2012',''),
	array('Kabir-Bedi-&-Dimple-Kapadia','Kabir Bedi & Dimple Kapadia','March 2009',''),
	array('Kajol-1','Kajol','November 2012',''),
	array('Kajol-2','Kajol','October 2012',''),
	array('Kajol-in-a-yellow-gold-Dholki-bead-necklace','Kajol','October 2012',''),
	array('Kajol-in-a-yellow-gold,-emerald-and-diamond-necklace','Kajol','October 2013',''),
	array('Kajol-in-Gold-and-Emerald-necklace','Kajol','December 2012',''),
	array('Kajol-in-gold-earrings-and-bangles','Kajol','December 2012',''),
	array('Kajol-in-yellow-gold-traditional-Jhumki-earrings','Kajol','October 2013',''),
	array('Kajol','Kajol','August 2012',''),
	array('Kangana-Ranaut','Kangana Ranaut','August 2012',''),
	array('Kareena-Kapoor-at-India-today-conclave-011','Kareena Kapoor','April 2012',''),
	array('Kareena-Kapoor-in-silver-gold-plated-earrings','Kareena Kapoor','October 2013',''),
	array('Kareena-Kapoor','Kareena Kapoor','April 2013',''),
	array('kareena','Kareena Kapoor','March 2013',''),
	array('Karishma-Kapoor','Karishma Kapoor','June 2013',''),
	array('Kirron-Kher-2','Kirron Kher','May 2013',''),
	array('Kirron-Kher-in-silver-tribal-jewellery','Kirron Kher','August 2013',''),
	array('Kirron-Kher-in-tribal-silver-jewellery','Kirron Kher','November 2012',''),
	array('Kirron-Kher','Kirron Kher','November 2012',''),
	array('Konkona-Sen-Sharma-at-IIJW-2010','Konkona Sen Sharma','August 2010',''),
	array('Konkona-Sen-Sharma-at-Midnights-Children-Premiere---1','Konkona Sen Sharma','February 2013',''),
	array('Konkona-Sen-Sharma-IIJW-2010','Konkona Sen Sharma','August 2010',''),
	array('Lisa-Ray','Lisa Ray','November 2012',''),
	array('Madhuri-Dixit-1','Madhuri Dixit','June 2013',''),
	array('Madhuri-Dixit-in-a-yellow-Gold-and-Polki-necklace','Madhuri Dixit','September 2013',''),
	array('Madhuri-Dixit-in-a-yellow-gold-Polki-neckalce','Madhuri Dixit','September 2013',''),
	array('Madhuri-Dixit','Madhuri Dixit','June 2013',''),
	array('Mahduri-Dixit-in-a-yellow-gold-polki-necklace','Madhuri Dixit','September 2013',''),
	array('Malaika-Arora','Malaika Arora','April 2013',''),
	array('Nargis-Fakhri-&-Abhay-Deol--for-Amrapali-at-IIJW-2012','Nargis Fakhri','August 2012',''),
	array('Nargis-Fakhri-for-Amrapali-at-IIJW-2012','Nargis Fakhri','August 2012',''),
	array('Nargis-Fakhri','Nargis Fakhri','May 2012',''),
	array('Parineeti-Chopra','Parineeti Chopra','January 2013',''),
	array('Rani-Mukherjee','Rani Mukherjee','September 2012',''),
	array('Sameera-reddy','Sameera Reddy','June 2012',''),
	array('Shraddha-Kapoor-in-yellow-gold-and-pearl-jhumki-earrings','Shraddha Kapoor','August 2013',''),
	array('Sonakshi-Sinha','Sonakshi Sinha','January 2014',''),
	array('Sonam-Kapoor---Rohit-Bal','Sonam Kapoor','',''),
	array('Sonam-Kapoor--wearing-Amrapali-Jewellery-at-the-JCK-show,-Las-Vegas-june','Sonam Kapoor','',''),
	array('Sonam-Kapoor-1','Sonam Kapoor','July 2012',''),
	array('Sonam-Kapoor-2','Sonam Kapoor','',''),
	array('Sonam-Kapoor-at-Cannes','Sonam Kapoor','May 2011',''),
	array('Sonam-Kapoor-at-IIJW-2011-(1)','Sonam Kapoor','July 2011',''),
	array('Sonam-Kapoor-at-IIJW-2011','Sonam Kapoor','July 2011',''),
	array('Sonam-Kapoor-in-Merak-necklace-from-Manish-Arora---Amrapali-AW-\'13-collection','Sonam Kapoor','October 2013',''),
	array('Sonam-kapoor-in-peepul-leaf--Tribe-by-amrapali','Sonam Kapoor','',''),
	array('Sonam-Kapoor-in-traditional-silver-gold-plated-flower-studs','Sonam Kapoor','',''),
	array('Sonam-Kapoor-in-vintage-jewllery','Sonam Kapoor','August 2013',''),
	array('Sonam-Kapoor','Sonam Kapoor','August 2012',''),
	array('Sonam-Kapoor1','Sonam Kapoor','July 2012',''),
	array('sonam-kapoor2','Sonam Kapoor','August 2012',''),
	array('Sri-dEVI','Sridevi','May 2013',''),
	array('Sridevi-1','Sridevi','October 2012',''),
	array('Sridevi','Sridevi','May 2013',''),
	array('Vidya-Balan-1','Vidya Balan','April 2013',''),
	array('Vidya-Balan-2','Vidya Balan','February 2013',''),
	array('Vidya-Balan-3','Vidya Balan','February 2013',''),
	array('Vidya-Balan-4','Vidya Balan','February 2013',''),
	array('Vidya-Balan-5','Vidya Balan','May 2013',''),
	array('Vidya-Balan-6','Vidya Balan','May 2013',''),
	array('Vidya-Balan-in-Gold-Earcuffs-from-the-Manish-Arora---Amrapali-AW13-collection-1','Vidya Balan','January 2014',''),
	array('Vidya-Balan-in-Gold-Earcuffs-from-the-Manish-Arora---Amrapali-AW13-collection','Vidya Balan','January 2014',''),
	array('Vidya-Balan-on-her-wedding-day-in-customzied-yellow-gold-Amrapali-jewllery','Vidya Balan','December 2012',''),
	array('Vidya-Balan.','Vidya Balan','','')
);
?>
