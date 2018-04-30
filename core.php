<?php

session_start();

require "utils.php";

?>

<style>


.high_score{
	background-color:lightblue;
}

.low_score{
	background-color:lightcoral;
}

.high_score, .low_score{
	display : inline-block;
	font-size : 0.8em;
}
.repo{
	border: solid 0.1px black;
	padding: 5px;
	border-bottom : none;
	border-right : none;
	margin-bottom : 5px;
}
.description, .high_score, .low_score {
	margin : 0;
}
.repo a:first-child{
	text-decoration : none !important;
}
.color-number{
	color:blue;
}

</style>


<?php

require('init.php');

if (!eisset($_POST['language'])){		//*** language is required
	exit("Sorry! This page cannot be accessed directly<br>".
		"You to use this <a href='index.php'>page</a> first."  );
}

// Defaults

define('LANGUAGE', eisset($_POST['language']) ?trim(strip_tags($_POST['language'])):'php');
$language_urlencoded = (defined('LANGUAGE')) ? escapeshellcmd(urlencode(LANGUAGE)) : "php";
$language = LANGUAGE ;
$language_lowercase = strtolower (LANGUAGE);
if(!is_language($language_lowercase)){
	exit("Nice try! please, select a language from the list");
}

$size_cmp = eisset($_POST['size_cmp'])? urlencode(trim(strip_tags($_POST['size_cmp']))):"size_inf";
if(!in_array($size_cmp,["size_inf","size_sup"]))
	exit("$size_cmp? Nice try! please, select a comparaison operator from the radio boxes");
$size_cmp = $size_cmp == "size_sup"? "%3E" : "%3C" ;
$size = eisset($_POST['size'])? escapeshellcmd(strip_tags($_POST['size'])):"500";

$req_pages = eisset($_POST['req_pages'])? escapeshellcmd(strip_tags($_POST['req_pages'])):"10";
$per_page = eisset($_POST['per_page'])? escapeshellcmd(strip_tags($_POST['per_page'])):"100";
if ( !( is_numeric($req_pages) && is_numeric($per_page) && is_numeric($size)) )
	exit( "Nice try! please, select numeric values from their input" );

$cmd = isset($_SESSION['cash']['cmd'])? escapeshellcmd(strip_tags($_SESSION['cash']['cmd'])) : 'wget';

switch($cmd){
	case 'wget':
/************************/
	$component = "$language_urlencoded+size%3A$size_cmp$size+page=";

	if( !file_exists ( "github_search.sh" ))
		exit("you need to have the shell script githubsearch.sh in the current working directory");

	$command = "./github_search.sh $component $req_pages $per_page";

		 echo( $command ) . PHP_EOL;		//***Is the command syntax correct? 

		cashing($command);

		if( REQUEST ){
			exec ( $command , $output , $ret_value );
		// exit( $command . "<br>" . print_r($output,true) ."<br>". $ret_value); //***Debugging the executed cmd...

			if ( $ret_value > 0 ){
				$_SESSION['cash']['cmd_str'] = '';
				exit ("Problem with wget :<br>" . translate_wget_error_code( $ret_value ) . "<br>" );
			}
		}
/************************/
	break;
	case 'curl':
/************************/
		$component = "\"https://api.github.com/search/repositories?q=+language%3A$language_urlencoded+size%3A$size_cmp$size+page=";
		$command = ">results2.json && curl";
		for ( $i=1; $i<=$req_pages; $i++){
			$command .= " $component{$i}&per_page=$per_page\"";
		}

		$command = $command . " >> results2.json";

		echo ( $command ."<pre><br>" );			//***The command syntax is correct? 

		cashing($command);

		if ( REQUEST )
			exec($command,$output,$ret);

//		exit(print_r($output,true) ."<br>$ret");	//***Has the command executed successfully?
	
/************************/
	break;
	default:
/************************/

	//***file_get_contents code see you there
/************************/
	break;
       	
}

	


$json_str = file_get_contents( 'results2.json' );	/*** Could be optimised here in case of a new command (not cashed)
							*  by captured the ouput before writing it to the file and 
							*/

$increment = 0 ;
$corrected_json = preg_replace_callback('/}\n{/',
		function($matches) use(&$increment) {		// & is important to use $increment real time value, not 0 everytime
			$increment++;
			return "},\n\"p$increment\":{";
		},
		$json_str);

if ( is_null( $corrected_json )) {
	exit(" preg_replace error : preg_replace_callback returned null at line " . __LINE__);
} else {
	$corrected_json = "{\n\"p0\":" . $corrected_json . "\n}";	
}

$json_arr = json_decode( $corrected_json );
$json_error_code = json_last_error();

exit_json_error($json_error_code);


/**
 *  Strings in the repositories descriptions to be eliminated
 *
 **/

require( "framework_filter.php" );

$framework_tokens = what_frameworks( $language_lowercase );


if ( isset($_POST['include']) && eisset($_POST['include'])){
	
	$include_framework = strip_tags( $_POST['include'] );
	$include_framework = explode ( "," , $include_framework );
	forEach ( $include_framework as $inc_frm ){
		$inc_frm = strtolower ( trim ( $inc_frm ) );
		$i = array_search ( $inc_frm , $framework_tokens );
			// echo $i?"<h1>found $inc_frm</h1>":"<h1>NOPE $inc_frm</h1>"; // finding all included plugins?
		if(in_array( $inc_frm , $framework_tokens )) 
			unset( $framework_tokens[$i] );
	}

}else
	array_push ( $framework_tokens, 'framework', 'plugin', 'library', 'cms' );

# exit('<pre>' . print_r($framework_tokens,true));    //***Is filtering token successfull?

$count = 0 ; 	   // counter the number of results
$page_count = 0 ;  // counts the number of returned pages
$total_score = 0 ; // counts the total score of the displayed repositories
$res_arr = filter( $json_arr ) ;

// Calculating the average score of the displayed repos
$average_score = $count>0?round( $total_score / $count , 2 ):0 ;

usort($res_arr, 'cmp');

display_results($res_arr);




