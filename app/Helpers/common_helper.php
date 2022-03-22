<?php

function tes()
{
    $env = (getenv('CI_ENVIRONMENT') == 'production') ? 'none' : 'block';
	$args = func_get_args();
	if(is_array($args) && count($args)){ foreach($args as $x){
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
	$env = (getenv('CI_ENVIRONMENT') == 'production') ? 'none' : 'block';
	$args = func_get_args();
	if(is_array($args) && count($args)){ foreach($args as $x){
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