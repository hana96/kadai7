<?php
$context1 = [
  	'http' => [
    	'method' => 'GET',
    	'header' => "custom-header: custom-value\r\n" .
        "custom-header-two: custom-value-2\r\n",
  	]
];
$context1 = stream_context_create($context1);
$result = file_get_contents('http://step15-krispop.appspot.com/peers?endpoint=getword', false, $context1);


$url = preg_split("/\R/", $result);
$word1 = array('0' => 'name','1' => 'name','2' => 'animal','3' => 'name','4' => 'adverb','5' => 'verb','6'=>'noun');
for($i = 0;$i < count($word1);$i++){
$data = ['pos' => $word1[$i]];
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
$rand_keys = rand(1,count($url));
$result = file_get_contents($url[$rand_keys].'/getword?'.$data, false, $context);
ini_set('display_errors', 'Off');
$resultr[$i] = $result;
}
echo $resultr[0] . ' ' . ' said' .' ' . $resultr[1] . ' imitates' . ' ' . $resultr[2] . ' .Because ' . $resultr[3] . ' ' . $resultr[4] . ' ' . $resultr[5] . ' ' . $resultr[6].'.';
?>