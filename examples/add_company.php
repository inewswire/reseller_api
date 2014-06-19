<?php
 
require 'shared/client_setup.php'; 
$request = $client->create_request('company/add');

// ----- Required Params -----

$request->data->company_name               = "ABC & Co. 111";
$request->data->company_website            = "http://www.abc.com";
$request->data->company_email              = "info@abc.com";
$request->data->company_summary            = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$request->data->company_address_country_id = 248;
$request->data->company_contact_email      = "abc@yahoo.com";

// ----- Optional Params -----

$request->data->company_address_street      = "ABC Street";
$request->data->company_address_apt_suite   = "APT 1";
$request->data->company_address_city        = "Sydney";
$request->data->company_address_state       = "NY";
$request->data->company_address_zip         = "12345";
$request->data->company_phone               = "112343472384";

$request->data->company_description = <<< EOF

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
		labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
		ut aliquip ex ea commodo consequat. <a href='http://abc.com'>consectetur</a></p>
	
	<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
		sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		
EOF;
	
$request->data->company_logo                = "http://www.clipartbest.com/cliparts/jix/EkM/jixEkMBAT.gif";
$request->data->company_twitter             = "abc_tw";
$request->data->company_facebook            = "abc_fb";
$request->data->company_gplus               = "9287349274927349";
$request->data->company_youtube             = "abc_channel";

$request->data->company_contact_name        = "John Doe";
$request->data->company_contact_title       = "Media Manager";
$request->data->company_contact_description = "John Doe has been our manager for past 6 months.";
$request->data->company_contact_website     = "http://johndoe.com";
$request->data->company_contact_skype       = "skype_john_doe";
$request->data->company_contact_phone       = "29342934792";
$request->data->company_contact_linkedin    = "linkedin_john_doe";
$request->data->company_contact_facebook    = "fb_john_doe";
$request->data->company_contact_twitter     = "tw_john_doe";

// ----- Send Request -----

var_dump($request->send());

?>