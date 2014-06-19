<?php
 
require 'shared/client_setup.php'; 
$request = $client->create_request('country/list');

// ----- Send Request -----

var_dump($request->send());

?>