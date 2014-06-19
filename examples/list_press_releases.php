<?php
 
require 'shared/client_setup.php'; 
$request = $client->create_request('pr/list');

// ----- Optional Params -----

// page number (from 1)
$request->data->page = 1;

// ----- Send Request -----

var_dump($request->send());

?>