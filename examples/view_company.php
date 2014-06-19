<?php
 
require 'shared/client_setup.php'; 
$request = $client->create_request('company/view');

// ----- Required Params -----

$request->data->company_id = 214;

// ----- Send Request -----

var_dump($request->send());

?>