<?php
$context1 = [
  	'http' => [
    	'method' => 'GET',
    	'header' => "custom-header: custom-value\r\n" .
        "custom-header-two: custom-value-2\r\n",
  	]
];
$context1 = stream_context_create($context1);
$result = file_get_contents('http://step15-krispop.appspot.com/peers', false, $context1);


$url = preg_split("/\R/", $result);

$data = ['message' => 'hello'];
$data = http_build_query($data);
$context = [
  	'http' => [
    	'method' => 'GET',
    	'header' => "custom-header: custom-value\r\n" .
        "custom-header-two: custom-value-2\r\n",
	'content' => $data
  	]
];

$context = stream_context_create($context);
for($i=0;$i<count($url,1);$i++){
$result = file_get_contents($url[$i].'/convert?message='.$data, false, $context);
echo $url[$i] . "->" . $result;
echo "<br>";
}
?>