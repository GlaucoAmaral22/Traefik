<?php
header('Content-Type: application/json');
echo json_encode([
	'id_container' => getenv('HOSTNAME'),
	'headers' => getallheaders()
]);
