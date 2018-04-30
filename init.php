<?php


function endsWith($haystack, $needle)
{
    $length = strlen($needle);

    return $length === 0 || 
    (substr($haystack, -$length) === $needle);
}

/**
 * using wget || curl || file_get_content	
 */


function init()
{

	// Prefere wget as it is faster than curl then file_get_content
	
	$command = "command -v wget 2>&1 || { echo \"I require foo but it's not installed.  Aborting.\"; exit 1; }";

	exec( $command , $output , $ret_value );

	if ( endsWith(trim($output[0]),'/wget') && ( $ret_value == 0 )){
		$_SESSION['cash']['cmd'] = 'wget'; 
		return 0;
	}

	$command = "command -v curl 2>&1 || { echo \"I require foo but it's not installed.  Aborting.\"; exit 1; }";
	
	exec( $command , $output , $ret_value );

	if ( endsWith(trim($output[0]),'/curl') && ( $ret_value == 0 ) && function_exists('curl_version')){

                $_SESSION['cash']['cmd'] = 'curl'; 
                return 0;
	}

	$_SESSION['cash']['cmd'] = 'file_get_contents';
}

	init();




