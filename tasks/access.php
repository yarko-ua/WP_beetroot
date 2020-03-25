<?php
$name = $_GET['username'];
$age = (int) $_GET['birth-year'];
$check = date('Y') - $age;
$result = '';

if ($check >= 21) {
$result = 'Hello, ' .$name. ', access accepted';
} else {
$result = 'Sorry,' .$name. ', no entrance until 21';
}
// $response = array('response' => $result, );

echo json_encode($result);
?>


