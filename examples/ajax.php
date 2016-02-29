<?php
$id = (int)$_POST['id'];
$query = "SELECT * FROM messages WHERE message_id = {$id} LIMIT 1"; //expecting one row
$result = mysql_query( $query );
$message = mysql_fetch_assoc( $result ); //expecting just on row

$json = array();
$json['html'] = '<p>' . $message . '</p>';

header('Content-Type: application/json');
echo json_encode( $json );
?>