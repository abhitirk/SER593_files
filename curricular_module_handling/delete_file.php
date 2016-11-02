<?php

$response = $api->get($path);

$my_file = $api->decode($response);

$sha = $my_file->sha;
$message = 'Deleted the file named: '.$my_file->name;

$parameters = [
    'message' => $message,
	'sha' => $sha,
];

$response = $api->delete($path, $parameters);
?>
