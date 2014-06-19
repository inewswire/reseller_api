<?php
 
require 'shared/client_setup.php'; 
$request = $client->create_request('company/list');

// ----- Optional Params -----

// page number (from 1)
$request->data->page = 1;

// 1 to fetch archived companies
// 0 otherwise (default)
$request->data->is_archived = 0;

// ----- Send Request -----

var_dump($request->send());

?>