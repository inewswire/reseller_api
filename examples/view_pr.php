<?php
 
require 'shared/client_setup.php'; 
$request = $client->create_request('pr/view');

// ----- Required Params -----

$request->data->pr_id = 969;

// ----- Send Request -----

var_dump($request->send());

?>