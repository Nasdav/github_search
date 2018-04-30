<?php

/***
 * A cashing-mechanism-like to avoid same requests twice
 */

function cashing($command)
{
	if ( !isset($_SESSION['cash']['cmd_str']) || ($_SESSION['cash']['cmd_str'] != $command ) ){ // a first time use or a new url a request should be made
		$_SESSION['cash']['cmd_str'] = $command ;
		define( 'REQUEST' , true );
		//echo "<br><h1>requesting again</h1><br>";	//***Test if fresh request...
	}elseif ( $_SESSION['cash']['cmd_str'] == $command ){        	// using the existing json, no need to request
		define( 'REQUEST' , false );
		//echo "<br><h1>using cash</h1><br>";		//***Test if using cash...
	}
}


/**
 * Wget can have many error codes at once
 * so this is a recursive to translate them all into human readable form
 **/

function translate_wget_error_code($code)
{
        $beyond_decade = floor($code/10);
        $str_from_code = wget_code_to_string($code - $beyond_decade * 10);

        if($beyond_decade>0){   // still having error codes to deal with
                return $str_from_code . "<br>" . translate_wget_error_code($beyond_decade) ;
        }else{
            return $str_from_code ;
        }
}

// Usefull for translate_wget_error_code() function, take codes one by one

function wget_code_to_string($code_numeral)
{
        switch ($code_numeral) {
                case 1:
                        return " - Generic error code";
                break;
                case 2:
                        return " - Parse error---for instance, when parsing command-line options, the .wgetrc or .netrc...";
                break;
                case 3:
                        return " - File I/O error.";
                break;
                case 4:
                        return " - Network failure.";
                break;
                case 5:
                        return " - SSL verification failure.";
                break;
                case 6:
                        return " - Username/password authentication failure.";
                break;
                case 7:
                        return " - Protocol errors.";
                break;
                case 8:
                        return " - Server issued an error response.";
                break;
                default:
                        return ' - Unknown error';
                break;
        }
}

/** 
 * Exit with the appropriate error message in case json gone awry 
 **/ 
 
function exit_json_error($code) 
{ 
        switch ($code) { 
                case JSON_ERROR_NONE: 
                    // No errors, good to go 
                break; 
                case JSON_ERROR_DEPTH: 
                    exit( ' - Maximum stack depth exceeded'); 
                break; 
                case JSON_ERROR_STATE_MISMATCH: 
                    exit(  ' - Underflow or the modes mismatch' ); 
                break; 
                case JSON_ERROR_CTRL_CHAR: 
                    exit(  ' - Unexpected control character found' ); 
                break; 
                case JSON_ERROR_SYNTAX: 
                    exit(  ' - Syntax error, malformed JSON' ); 
                break; 
                case JSON_ERROR_UTF8: 
                    exit(  ' - Malformed UTF-8 characters, possibly incorrectly encoded' ); 
                break; 
                default: 
                    exit(  ' - Unknown error' ); 
                break; 
            } 
}

/**
 * Filtering the results
 **/

function filter($json_arr)
{
        global $page_count, $count, $total_score, $framework_tokens ;
        $res_arr = [] ;

        forEach($json_arr as $page){

                $page_count++;
                forEach( $page -> items as $i => $content ){

                        $s= strtolower(json_encode($page->items[$i]->description));
                        $pure_language = true ; // flag if the repository contain pure language or a framework (false)

                        forEach($framework_tokens as $tok)
                                if ( strpos( $s,$tok ) !== false){
                                        $pure_language = false ;
                                        break;
                                }

                        if ( $pure_language ){
                                $count++;
                                $total_score += $page -> items[$i]-> score ;
                                array_push( $res_arr, $page -> items[$i] ) ;
                        } else {
                                unset($page->items[$i]);        // Impure? Burn the witch
                        }
                }
        }
        return $res_arr;
}

/**
 * sorting the repositories using their scores
 */

function cmp( $i1 , $i2 )
{
        $a = floatval($i2->score);
        $b = floatval($i1->score);
        if( $a < $b)
                return -1 ;
        elseif ( $a > $b )
                return 1;
        else
                return 0;
}

/**
 * easy coloring of a number
 */

function c($n)
{
        return "<span class='color-number'>$n</span>";
}

/**
 * The display of the results
 */

function display_results($res_arr)
{
        global $count, $page_count, $average_score, $size_cmp, $language, $per_page, $req_pages, $size;

        echo "<h3>" . c($count) . " repositories of language ".$language ." size :" . c($size) .", "
		. c($page_count)."/".c($req_pages) . 
        	" pages*". c(100) . " results and average score of " .c($average_score) . " : </h3>";

        forEach( $res_arr as $item  ){
                $score = $item->score ;
                if ( $score < $average_score ){
                        $score_class = "low_score" ;
                }else{
                        $score_class = "high_score" ;
                }
                echo " <p class='$score_class'>" . round($score,2) . "</p>" ;
                echo "<div class='repo'><a href='" . $item->html_url."'>". $item->full_name . "</a>" ;
                echo "<p class='description'>" . $item -> description . "</p></div>";
        }
}

/**
 * return if a string is a programming language existing in a github list or not
 **/

function is_language($str){
	
$tokens=["actionscript" , "c" , "c#" , "c++" , "clojure" , "coffeescript" , "css" , "go" , "haskell" , "html" , "java" , "javascript" ,
 "lua" , "matlab" , "objective-c" , "perl" , "php" , "python" , "r" , "ruby" , "scala" , "shell" , "swift" , "tex" , "vim script" ,
 "1c enterprise" , "abap" , "abnf" , "ada" , "adobe font metrics" , "agda" , "ags script" , "alloy" , "alpine abuild" , "ampl" ,
 "angelscript" , "ant build system" , "antlr" , "apacheconf" , "apex" , "api blueprint" , "apl" , "apollo guidance computer" ,
 "applescript" , "arc" , "asciidoc" , "asn.1" , "asp" , "aspectj" , "assembly" , "ats" , "augeas" , "autohotkey" , "autoit" , "awk" ,
 "ballerina" , "batchfile" , "befunge" , "bison" , "bitbake" , "blade" , "blitzbasic" , "blitzmax" , "bluespec" , "boo" , "brainfuck" ,
 "brightscript" , "bro" , "c- objdump" , "c2hs haskell" , "cap'n proto" , "cartocss" , "ceylon" , "chapel" , "charity" , "chuck" ,
 "cirru" , "clarion" , "clean" , "click" , "clips" , "closure templates" , "cmake" , "cobol" , "coldfusion" , "coldfusion cfc" ,
 "collada" , "common lisp" , "common workflow language" , "component pascal" , "cool" , "coq" , "cpp-objdump" , "creole" , "crystal" ,
 "cson" , "csound" , "csound document" , "csound score" , "csv" , "cuda" , "cweb" , "cycript" , "cython" , "d" , "d- objdump" ,
 "darcs patch" , "dart" , "dataweave" , "desktop" , "diff" , "digital command language" , "dm" , "dns zone" , "dockerfile" ,
 "dogescript" , "dtrace" , "dylan" , "e" , "eagle" , "easybuild" , "ebnf" , "ec" , "ecere projects" , "ecl" , "eclipse" ,
 "edje data collection" , "edn" , "eiffel" , "ejs" , "elixir" , "elm" , "emacs lisp" , "emberscript" , "eq" , "erlang" ,
 "f#" , "factor" , "fancy" , "fantom" , "filebench wml" , "filterscript" , "fish" , "flux" , "formatted" , "forth" , "fortran" ,
 "freemarker" , "frege" , "g-code" , "game maker language" , "gams" , "gap" , "gcc machine description" , "gdb" , "gdscript" ,
 "genie" , "genshi" , "gentoo ebuild" , "gentoo eclass" , "gerber image" , "gettext catalog" , "gherkin" , "glsl" , "glyph" , "gn" ,
 "gnuplot" , "golo" , "gosu" , "grace" , "gradle" , "grammatical framework" , "graph modeling language" , "graphql" , "graphviz (dot)" ,
 "groovy" , "groovy server pages" , "hack" , "haml" , "handlebars" , "harbour" , "haxe" , "hcl" , "hlsl" , "html+django" , "html+ecr" ,
 "html+eex" , "html+erb" , "html+php" , "http" , "hy" , "hyphy" , "idl" , "idris" , "igor pro" , "inform 7" , "ini" , "inno setup" ,
 "io" , "ioke" , "irc log" , "isabelle" , "isabelle root" , "j" , "jasmin" , "java server pages" , "jflex" , "jison" , "jison lex" ,
 "jolie" , "json" , "json5" , "jsoniq" , "jsonld" , "jsx" , "julia" , "jupyter notebook" , "kicad layout" , "kicad legacy layout" ,
 "kicad schematic" , "kit" , "kotlin" , "krl" , "labview" , "lasso" , "latte" , "lean" , "less" , "lex" , "lfe" , "lilypond" , "limbo" ,
 "linker script" , "linux kernel module" , "liquid" , "literate agda" , "literate coffeescript" ,
"literate haskell","livescript","llvm", "logos" , "logtalk" , "lolcode" , "lookml" , "loomscript" , "lsl" , "m" , "m4" , "m4sugar" ,
 "makefile" , "mako" , "markdown" , "marko" , "mask" , "mathematica" , "maven pom" , "max" , "maxscript" , "mediawiki" , "mercury" ,
 "meson" , "metal" , "minid" , "mirah" , "modelica" , "modula-2" , "module management system" , "monkey" , "moocode" , "moonscript" ,
 "mql4" , "mql5" , "mtml" , "muf" , "mupad" , "myghty" , "ncl" , "nearley" , "nemerle" , "nesc" , "netlinx" , "netlinx+erb" , "netlogo" , "newlisp" , "nextflow" , "nginx" , "nim" , "ninja" , "nit" , "nix" , "nl" , "nsis" , "nu" , "numpy" , "objdump" ,
 "objective-c++" , "objective-j" , "ocaml" , "omgrofl" , "ooc" , "opa" , "opal" , "opencl" , "openedge abl" , "openrc runscript" ,
 "openscad" , "opentype feature file" , "org" , "ox" , "oxygene" , "oz" , "p4" , "pan" , "papyrus" , "parrot" , "parrot assembly" ,
 "parrot internal representation" , "pascal" , "pawn" , "pep8" , "perl 6" , "pic" , "pickle" , "picolisp" , "piglatin" , "pike" ,
 "plpgsql" , "plsql" , "pod" , "pogoscript" , "pony" , "postcss" , "postscript" , "pov-ray sdl" , "powerbuilder" , "powershell" ,
 "processing" , "prolog" , "propeller spin" , "protocol buffer" , "public key" , "pug" , "puppet" , "pure data" , "purebasic" ,
 "purescript" , "python console" , "python traceback" , "qmake" , "qml" , "racket" , "ragel" , "raml" , "rascal" , "raw token data" ,
 "rdoc" , "realbasic" , "reason" , "rebol" , "red" , "redcode" , "regular expression" , "ren'py" , "renderscript" , "restructuredtext" ,
 "rexx" , "rhtml" , "ring" , "rmarkdown" , "robotframework" , "roff" , "rouge" , "rpc" , "rpm spec" , "runoff" , "rust" , "sage" ,
 "saltstack" , "sas" , "sass" , "scaml" , "scheme" , "scilab" , "scss" , "self" , "shaderlab" , "shellsession" , "shen" , "slash" ,
 "slim" , "smali" , "smalltalk" , "smarty" , "smt" , "solidity" , "sourcepawn" , "sparql" , "spline font database" , "sqf" , "sql" ,
 "sqlpl" , "squirrel" , "srecode template" , "stan" , "standard ml" , "stata" , "ston" , "stylus" , "sublime text config" ,
 "subrip text" , "sugarss" , "supercollider" , "svg" , "systemverilog" , "tcl" , "tcsh" , "tea" , "terra" , "text" , "textile" ,
 "thrift" , "ti program" , "tla" , "toml" , "turing" , "turtle" , "twig" , "txl" , "type language" , "typescript" ,
 "unified parallel c" , "unity3d asset" , "unix assembly" , "uno" , "unrealscript" , "urweb" , "vala" , "vcl" , "verilog" ,
 "vhdl" , "visual basic" , "volt" , "vue" , "wavefront material" , "wavefront object" , "wdl" , "web ontology language" ,
 "webassembly" , "webidl" , "wisp" , "world of warcraft addon data" , "x10" , "xbase" , "xc" , "xcompose" , "xml" , "xojo" , "xpages" ,
 "xpm" , "xproc" , "xquery" , "xs" , "xslt" , "xtend" , "yacc" , "yaml" , "yang" , "yara" , "zephir" , "zimpl"];

return in_array($str,$tokens);
}

/**
 * isset is presuambly false positive for every form input, so this an enhanced version of it
 *
 * Notice however that this function doesn't allow for empty string or white-space as a value
 *
 **/

function eisset($value){
	if (isset($value) && strlen(trim($value))>0 ) 
		return true;
	else
		return false;
}


