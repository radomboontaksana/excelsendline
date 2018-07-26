<?php

function t1($tt1)
{
	$messages = [
		'type' => 'text',
		'text' => $tt1
		];
	return $messages;
}
// Function Return data
function data1($replyToken,$messages)
{
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$messages]
		];
	return $data;
}
?>
