<?php

function tes()
{
    $env = (CI_ENVIRONMENT == 'production') ? 'none' : 'block';
	$args = func_get_args();
	if(is_for($args)){ foreach($args as $x){
		$echo = "<div style='display:$env'><pre>";
		if(is_array($x) || is_object($x)){
			$echo .= print_r($x, true);
		}else{
			$echo .= var_export($x, true);
		}
		$echo .= "</pre><hr /></div>";
		echo $echo;
	}}
}

function tesx()
{
	$env = (CI_ENVIRONMENT == 'production') ? 'none' : 'block';
	$args = func_get_args();
	if(is_for($args)){ foreach($args as $x){
		$echo = "<div style='display:$env'><pre>";
		if(is_array($x) || is_object($x)){
			$echo .= print_r($x, true);
		}else{
			$echo .= var_export($x, true);
		}
		$echo .= "</pre><hr /></div>";
		echo $echo;
	}}
    die();
}