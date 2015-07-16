<?php
	$verb = array('1' => 'become','2' => 'buy','3' => 'bring','4' => 'come','5' => 'cut','6' => 'do','7' => 'drink','8' => 'find','9' => 'make','10' => 'run');
	$noun = array('1' => 'egg','2' => 'rose','3' => 'chair','4' => 'piano','5' => 'orange','6' => 'apple','7' => 'cake','8' => 'racket','9' => 'glass','10' => 'book');
	$adjective = array('1' => 'tall','2' => 'short','3' => 'fat','4' => 'thin','5' => 'small','6' => 'big','7' => 'pretty','8' => 'elegant','9' => 'kind','10' => 'wise');
	$animal = array('1' => 'dog','2' => 'cat','3' => 'pig','4' => 'boar','5' => 'cow','6' => 'horse','7' => 'wolf','8' => 'kangaroo','9' => 'bear','10' => 'chimpanzee');
	$name = array('1' => 'Anna','2' => 'Annie','3' => 'Ariel','4' => 'Becky','5' => 'Carlie','6' => 'Lola','7' => 'Daffy','8' => 'Minnie','9' => 'Michele','10' => 'Jasmin');
	$adverb = array('1' => 'usually','2' => 'early','3' => 'always','4' => 'likely','5' => 'sometimes','6' => 'instead','7' => 'again','8' => 'quickly','9' => 'ever','10' => 'hardly');
	$exclaimation = array('1' => 'Wow!','2' => 'Oh!','3' => 'No way!','4' => 'Oh dear!','5' => 'Oh boy!','6' => 'Good!','7' => 'Shoot!','8' => 'Gee!','9' => 'Oops!','10' => 'Yack');

if(isset($_GET['pos'])){
	$inputw = $_GET['pos'];	
	if($inputw=='verb'){
	$rand_keys = mt_rand(1,count($verb));
	echo $verb[$rand_keys]."<br>";
	}else if($inputw=='noun'){
	$rand_keys = mt_rand(1,count($noun));
	echo $noun[$rand_keys]."<br>";
	}else if($inputw=='adjective'){
	$rand_keys = mt_rand(1,count($adjective));
	echo $adjective[$rand_keys]."<br>";
	}else if($inputw=='animal'){
	$rand_keys = mt_rand(1,count($animal));
	echo $animal[$rand_keys]."<br>";
	}else if($inputw=='name'){
	$rand_keys = mt_rand(1,count($name));
	echo $name[$rand_keys]."<br>";
	}else if($inputw=='adverb'){
	$rand_keys = mt_rand(1,count($adverb));
	echo $adverb[$rand_keys]."<br>";
	}else if($inputw=='exclaimation'){
	$rand_keys = mt_rand(1,count($exclaimation));
	echo $exclaimation[$rand_keys]."<br>";
	}else{
	echo 'Hello!'."<br>";
	}
}else{
	echo 'Hello'."<br>";
}
	
?>