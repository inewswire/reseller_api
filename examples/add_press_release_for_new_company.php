<?php
 
require 'shared/client_setup.php'; 
$request = $client->create_request('pr/add');

// ----- Required Params -----

$request->data->pr_title                    = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod";
$request->data->pr_summary                  = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$request->data->company_name                = "ABC & Co. 111";
$request->data->company_website             = "http://www.abc.com";
$request->data->company_email               = "info@abc.com";
$request->data->company_summary             = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$request->data->company_contact_email       = "abc@yahoo.com";
$request->data->company_address_country_id  = 248;

$request->data->pr_content = <<< EOF

	<p><a href="http://abc.com">Sed ut</a> perspiciatis unde omnis iste <a href="http://bcd.com">natus 
		error sit</a> voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
		ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
		voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores 
		eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor 
		sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore 
		et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis <a href="ghi">nostrum</a>
		exercitationem ullam orporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis 
		autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, 
		vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>

	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
		totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
		sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
		consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui 
		dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora 
		incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum 
		exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
		vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum 
		qui dolorem eum fugiat quo voluptas nulla pariatur.</p>

	<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut 
		aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
		quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>

EOF;

$request->data->pr_tags = array();
$request->data->pr_tags[] = 'tag1';
$request->data->pr_tags[] = 'tag2';
$request->data->pr_tags[] = 'tag3';

$request->data->pr_category1_id = 3;

// ----- Optional Params -----

$request->data->pr_images = array();
$request->data->pr_images[] = 'http://aae.boisestate.edu/testing/files/2011/10/test.gif';
$request->data->pr_images[] = 'http://upload.wikimedia.org/wikipedia/commons/e/e4/Turing_Test_version_3.png';
$request->data->pr_images[] = 'http://i.huffpost.com/gen/1341952/thumbs/o-STANDARDIZED-TEST-facebook.jpg';
$request->data->pr_images[] = 'http://german.yale.edu/sites/default/files/test3.jpg';
$request->data->pr_images[] = 'http://www.jobboom.com/carriere/wp-content/uploads/2008/04/tests.jpg';

$request->data->pr_category2_id            = 4;
$request->data->pr_category3_id            = 8;
$request->data->pr_supporting_quote        = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.';
$request->data->pr_supporting_quote_name   = 'John Doe';
$request->data->pr_supporting_quote_title  = 'CEO, D & Co.';

$request->data->pr_additional_file_1_name  = 'Introduction to Computer Networking in Schools.doc';
$request->data->pr_additional_file_1_url   = 'http://www.pdsttechnologyineducation.ie/en/Technology/ICT-Equipment/Networks/Introduction%20to%20Computer%20Networking%20in%20Schools.doc';

$request->data->pr_additional_file_2_name  = 'course-outline.doc';
$request->data->pr_additional_file_2_url   = 'http://www.d.umn.edu/~rmaclin/cs1011/course-outline.doc';

$request->data->pr_primary_link_title      = 'ABC';
$request->data->pr_primary_link            = 'http://abc.com';
$request->data->pr_secondary_link_title    = 'DEF';
$request->data->pr_secondary_link          = 'http://def.com';
$request->data->pr_youtube_video           = 'http://www.youtube.com/watch?v=-m3N_BnVdOI';

$request->data->company_address_street     = 'ABC Street';
$request->data->company_address_apt_suite  = 'APT 1';
$request->data->company_address_city       = 'Sydney';
$request->data->company_address_state      = 'NY';
$request->data->company_address_zip        = '12345';
$request->data->company_phone              = '112343472384';

$request->data->company_description = <<< EOF

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
		labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
		ut aliquip ex ea commodo consequat. <a href="http://abc.com">consectetur</a></p>
	
	<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
		sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		
EOF;
	
$request->data->company_logo                 = 'http://www.clipartbest.com/cliparts/jix/EkM/jixEkMBAT.gif';
$request->data->company_twitter              = 'abc_tw';
$request->data->company_facebook             = 'abc_fb';
$request->data->company_gplus                = '9287349274927349';
$request->data->company_youtube              = 'abc_channel';

$request->data->company_contact_name         = 'John Doe';
$request->data->company_contact_title        = 'Media Manager';
$request->data->company_contact_description  = 'John Doe has been our manager for past 6 months.';
$request->data->company_contact_website      = 'http://johndoe.com';
$request->data->company_contact_skype        = 'skype_john_doe';
$request->data->company_contact_phone        = '29342934792';
$request->data->company_contact_linkedin     = '242561429';
$request->data->company_contact_facebook     = 'fb_john_doe';
$request->data->company_contact_twitter      = 'tw_john_doe';

$request->data->pdf_branding_logo = 'http://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Check.svg/600px-Check.svg.png';

// ----- Send Request -----

var_dump($request->send());

?>