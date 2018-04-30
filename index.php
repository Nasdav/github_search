<?php

session_start();
header('Content-Type: text/html; charset=utf-8');


?>
<style>

body{
	text-align:center;
}

input{
	padding-left : 5px ;
}

select{
	text-align:center;
	width:250px;
}


</style>

<h1> Search Github repositories </h1>
<form method="post" action="core.php">

<select required name="language" id="langSel">
          <option value="">Any Language</option>
          <optgroup label="Popular">
		<option value="actionscript">actionscript</option>
		<option value="c">c</option>
		<option value="c#">c#</option>
		<option value="c++">c++</option>
		<option value="clojure">clojure</option>
		<option value="coffeescript">coffeescript</option>
		<option value="css">css</option>
		<option value="go">go</option>
		<option value="haskell">haskell</option>
		<option value="html">html</option>
		<option value="java">java</option>
		<option value="javascript">javascript</option>
		<option value="lua">lua</option>
		<option value="matlab">matlab</option>
		<option value="objective-c">objective-c</option>
		<option value="perl">perl</option>
		<option value="php">php</option>
		<option value="python">python</option>
		<option value="r">r</option>
		<option value="ruby">ruby</option>
		<option value="scala">scala</option>
		<option value="shell">shell</option>
		<option value="swift">swift</option>
		<option value="tex">tex</option>
		<option value="vim script">vim script</option>
          </optgroup>
          <optgroup label="everything else">
		<option value="1c enterprise">1c enterprise</option>
		<option value="abap">abap</option>
		<option value="abnf">abnf</option>
		<option value="ada">ada</option>
		<option value="adobe font metrics">adobe font metrics</option>
		<option value="agda">agda</option>
		<option value="ags script">ags script</option>
		<option value="alloy">alloy</option>
		<option value="alpine abuild">alpine abuild</option>
		<option value="ampl">ampl</option>
		<option value="angelscript">angelscript</option>
		<option value="ant build system">ant build system</option>
		<option value="antlr">antlr</option>
		<option value="apacheconf">apacheconf</option>
		<option value="apex">apex</option>
		<option value="api blueprint">api blueprint</option>
		<option value="apl">apl</option>
		<option value="apollo guidance computer">apollo guidance computer</option>
		<option value="applescript">applescript</option>
		<option value="arc">arc</option>
		<option value="asciidoc">asciidoc</option>
		<option value="asn.1">asn.1</option>
		<option value="asp">asp</option>
		<option value="aspectj">aspectj</option>
		<option value="Assembly">Assembly</option>
		<option value="ATS">ATS</option>
		<option value="Augeas">Augeas</option>
		<option value="AutoHotkey">AutoHotkey</option>
		<option value="AutoIt">AutoIt</option>
		<option value="Awk">Awk</option>
		<option value="Ballerina">Ballerina</option>
		<option value="Batchfile">Batchfile</option>
		<option value="Befunge">Befunge</option>
		<option value="Bison">Bison</option>
		<option value="BitBake">BitBake</option>
		<option value="Blade">Blade</option>
		<option value="BlitzBasic">BlitzBasic</option>
		<option value="BlitzMax">BlitzMax</option>
		<option value="Bluespec">Bluespec</option>
		<option value="Boo">Boo</option>
		<option value="Brainfuck">Brainfuck</option>
		<option value="Brightscript">Brightscript</option>
		<option value="Bro">Bro</option>
		<option value="C-ObjDump">C-ObjDump</option>
		<option value="C2hs Haskell">C2hs Haskell</option>
		<option value="Cap'n Proto">Cap'n Proto</option>
		<option value="CartoCSS">CartoCSS</option>
		<option value="Ceylon">Ceylon</option>
		<option value="Chapel">Chapel</option>
		<option value="Charity">Charity</option>
		<option value="ChucK">ChucK</option>
		<option value="Cirru">Cirru</option>
		<option value="Clarion">Clarion</option>
		<option value="Clean">Clean</option>
		<option value="Click">Click</option>
		<option value="CLIPS">CLIPS</option>
		<option value="Closure Templates">Closure Templates</option>
		<option value="CMake">CMake</option>
		<option value="COBOL">COBOL</option>
		<option value="ColdFusion">ColdFusion</option>
		<option value="ColdFusion CFC">ColdFusion CFC</option>
		<option value="COLLADA">COLLADA</option>
		<option value="Common Lisp">Common Lisp</option>
		<option value="Common Workflow Language">Common Workflow Language</option>
		<option value="Component Pascal">Component Pascal</option>
		<option value="Cool">Cool</option>
		<option value="Coq">Coq</option>
		<option value="Cpp-ObjDump">Cpp-ObjDump</option>
		<option value="Creole">Creole</option>
		<option value="Crystal">Crystal</option>
		<option value="CSON">CSON</option>
		<option value="Csound">Csound</option>
		<option value="Csound Document">Csound Document</option>
		<option value="Csound Score">Csound Score</option>
		<option value="CSV">CSV</option>
		<option value="Cuda">Cuda</option>
		<option value="CWeb">CWeb</option>
		<option value="Cycript">Cycript</option>
		<option value="Cython">Cython</option>
		<option value="D">D</option>
		<option value="D-ObjDump">D-ObjDump</option>
		<option value="Darcs Patch">Darcs Patch</option>
		<option value="Dart">Dart</option>
		<option value="DataWeave">DataWeave</option>
		<option value="desktop">desktop</option>
		<option value="Diff">Diff</option>
		<option value="DIGITAL Command Language">DIGITAL Command Language</option>
		<option value="DM">DM</option>
		<option value="DNS Zone">DNS Zone</option>
		<option value="Dockerfile">Dockerfile</option>
		<option value="Dogescript">Dogescript</option>
		<option value="DTrace">DTrace</option>
		<option value="Dylan">Dylan</option>
		<option value="E">E</option>
		<option value="Eagle">Eagle</option>
		<option value="Easybuild">Easybuild</option>
		<option value="EBNF">EBNF</option>
		<option value="eC">eC</option>
		<option value="Ecere Projects">Ecere Projects</option>
		<option value="ECL">ECL</option>
		<option value="ECLiPSe">ECLiPSe</option>
		<option value="Edje Data Collection">Edje Data Collection</option>
		<option value="edn">edn</option>
		<option value="Eiffel">Eiffel</option>
		<option value="EJS">EJS</option>
		<option value="Elixir">Elixir</option>
		<option value="Elm">Elm</option>
		<option value="Emacs Lisp">Emacs Lisp</option>
		<option value="EmberScript">EmberScript</option>
		<option value="EQ">EQ</option>
		<option value="Erlang">Erlang</option>
		<option value="F#">F#</option>
		<option value="Factor">Factor</option>
		<option value="Fancy">Fancy</option>
		<option value="Fantom">Fantom</option>
		<option value="Filebench WML">Filebench WML</option>
		<option value="Filterscript">Filterscript</option>
		<option value="fish">fish</option>
		<option value="FLUX">FLUX</option>
		<option value="Formatted">Formatted</option>
		<option value="Forth">Forth</option>
		<option value="Fortran">Fortran</option>
		<option value="FreeMarker">FreeMarker</option>
		<option value="Frege">Frege</option>
		<option value="G-code">G-code</option>
		<option value="Game Maker Language">Game Maker Language</option>
		<option value="GAMS">GAMS</option>
		<option value="GAP">GAP</option>
		<option value="GCC Machine Description">GCC Machine Description</option>
		<option value="GDB">GDB</option>
		<option value="GDScript">GDScript</option>
		<option value="Genie">Genie</option>
		<option value="Genshi">Genshi</option>
		<option value="Gentoo Ebuild">Gentoo Ebuild</option>
		<option value="Gentoo Eclass">Gentoo Eclass</option>
		<option value="Gerber Image">Gerber Image</option>
		<option value="Gettext Catalog">Gettext Catalog</option>
		<option value="Gherkin">Gherkin</option>
		<option value="GLSL">GLSL</option>
		<option value="Glyph">Glyph</option>
		<option value="GN">GN</option>
		<option value="Gnuplot">Gnuplot</option>
		<option value="Golo">Golo</option>
		<option value="Gosu">Gosu</option>
		<option value="Grace">Grace</option>
		<option value="Gradle">Gradle</option>
		<option value="Grammatical Framework">Grammatical Framework</option>
		<option value="Graph Modeling Language">Graph Modeling Language</option>
		<option value="GraphQL">GraphQL</option>
		<option value="Graphviz (DOT)">Graphviz (DOT)</option>
		<option value="Groovy">Groovy</option>
		<option value="Groovy Server Pages">Groovy Server Pages</option>
		<option value="Hack">Hack</option>
		<option value="Haml">Haml</option>
		<option value="Handlebars">Handlebars</option>
		<option value="Harbour">Harbour</option>
		<option value="Haxe">Haxe</option>
		<option value="HCL">HCL</option>
		<option value="HLSL">HLSL</option>
		<option value="HTML+Django">HTML+Django</option>
		<option value="HTML+ECR">HTML+ECR</option>
		<option value="HTML+EEX">HTML+EEX</option>
		<option value="HTML+ERB">HTML+ERB</option>
		<option value="HTML+PHP">HTML+PHP</option>
		<option value="HTTP">HTTP</option>
		<option value="Hy">Hy</option>
		<option value="HyPhy">HyPhy</option>
		<option value="IDL">IDL</option>
		<option value="Idris">Idris</option>
		<option value="IGOR Pro">IGOR Pro</option>
		<option value="Inform 7">Inform 7</option>
		<option value="INI">INI</option>
		<option value="Inno Setup">Inno Setup</option>
		<option value="Io">Io</option>
		<option value="Ioke">Ioke</option>
		<option value="IRC log">IRC log</option>
		<option value="Isabelle">Isabelle</option>
		<option value="Isabelle ROOT">Isabelle ROOT</option>
		<option value="J">J</option>
		<option value="Jasmin">Jasmin</option>
		<option value="Java Server Pages">Java Server Pages</option>
		<option value="JFlex">JFlex</option>
		<option value="Jison">Jison</option>
		<option value="Jison Lex">Jison Lex</option>
		<option value="Jolie">Jolie</option>
		<option value="JSON">JSON</option>
		<option value="JSON5">JSON5</option>
		<option value="JSONiq">JSONiq</option>
		<option value="JSONLD">JSONLD</option>
		<option value="JSX">JSX</option>
		<option value="Julia">Julia</option>
		<option value="Jupyter Notebook">Jupyter Notebook</option>
		<option value="KiCad Layout">KiCad Layout</option>
		<option value="KiCad Legacy Layout">KiCad Legacy Layout</option>
		<option value="KiCad Schematic">KiCad Schematic</option>
		<option value="Kit">Kit</option>
		<option value="Kotlin">Kotlin</option>
		<option value="KRL">KRL</option>
		<option value="LabVIEW">LabVIEW</option>
		<option value="Lasso">Lasso</option>
		<option value="Latte">Latte</option>
		<option value="Lean">Lean</option>
		<option value="Less">Less</option>
		<option value="Lex">Lex</option>
		<option value="LFE">LFE</option>
		<option value="LilyPond">LilyPond</option>
		<option value="Limbo">Limbo</option>
		<option value="Linker Script">Linker Script</option>
		<option value="Linux Kernel Module">Linux Kernel Module</option>
		<option value="Liquid">Liquid</option>
		<option value="Literate Agda">Literate Agda</option>
		<option value="Literate CoffeeScript">Literate CoffeeScript</option>
		<option value="Literate Haskell">Literate Haskell</option>
		<option value="LiveScript">LiveScript</option>
		<option value="LLVM">LLVM</option>
		<option value="Logos">Logos</option>
		<option value="Logtalk">Logtalk</option>
		<option value="LOLCODE">LOLCODE</option>
		<option value="LookML">LookML</option>
		<option value="LoomScript">LoomScript</option>
		<option value="LSL">LSL</option>
		<option value="M">M</option>
		<option value="M4">M4</option>
		<option value="M4Sugar">M4Sugar</option>
		<option value="Makefile">Makefile</option>
		<option value="Mako">Mako</option>
		<option value="Markdown">Markdown</option>
		<option value="Marko">Marko</option>
		<option value="Mask">Mask</option>
		<option value="Mathematica">Mathematica</option>
		<option value="Maven POM">Maven POM</option>
		<option value="Max">Max</option>
		<option value="MAXScript">MAXScript</option>
		<option value="MediaWiki">MediaWiki</option>
		<option value="Mercury">Mercury</option>
		<option value="Meson">Meson</option>
		<option value="Metal">Metal</option>
		<option value="MiniD">MiniD</option>
		<option value="Mirah">Mirah</option>
		<option value="Modelica">Modelica</option>
		<option value="Modula-2">Modula-2</option>
		<option value="Module Management System">Module Management System</option>
		<option value="Monkey">Monkey</option>
		<option value="Moocode">Moocode</option>
		<option value="MoonScript">MoonScript</option>
		<option value="MQL4">MQL4</option>
		<option value="MQL5">MQL5</option>
		<option value="MTML">MTML</option>
		<option value="MUF">MUF</option>
		<option value="mupad">mupad</option>
		<option value="Myghty">Myghty</option>
		<option value="NCL">NCL</option>
		<option value="Nearley">Nearley</option>
		<option value="Nemerle">Nemerle</option>
		<option value="nesC">nesC</option>
		<option value="NetLinx">NetLinx</option>
		<option value="NetLinx+ERB">NetLinx+ERB</option>
		<option value="NetLogo">NetLogo</option>
		<option value="NewLisp">NewLisp</option>
		<option value="Nextflow">Nextflow</option>
		<option value="Nginx">Nginx</option>
		<option value="Nim">Nim</option>
		<option value="Ninja">Ninja</option>
		<option value="Nit">Nit</option>
		<option value="Nix">Nix</option>
		<option value="NL">NL</option>
		<option value="NSIS">NSIS</option>
		<option value="Nu">Nu</option>
		<option value="NumPy">NumPy</option>
		<option value="ObjDump">ObjDump</option>
		<option value="Objective-C++">Objective-C++</option>
		<option value="Objective-J">Objective-J</option>
		<option value="OCaml">OCaml</option>
		<option value="Omgrofl">Omgrofl</option>
		<option value="ooc">ooc</option>
		<option value="Opa">Opa</option>
		<option value="Opal">Opal</option>
		<option value="OpenCL">OpenCL</option>
		<option value="OpenEdge ABL">OpenEdge ABL</option>
		<option value="OpenRC runscript">OpenRC runscript</option>
		<option value="OpenSCAD">OpenSCAD</option>
		<option value="OpenType Feature File">OpenType Feature File</option>
		<option value="Org">Org</option>
		<option value="Ox">Ox</option>
		<option value="Oxygene">Oxygene</option>
		<option value="Oz">Oz</option>
		<option value="P4">P4</option>
		<option value="Pan">Pan</option>
		<option value="Papyrus">Papyrus</option>
		<option value="Parrot">Parrot</option>
		<option value="Parrot Assembly">Parrot Assembly</option>
		<option value="Parrot Internal Representation">Parrot Internal Representation</option>
		<option value="Pascal">Pascal</option>
		<option value="PAWN">PAWN</option>
		<option value="Pep8">Pep8</option>
		<option value="Perl 6">Perl 6</option>
		<option value="Pic">Pic</option>
		<option value="Pickle">Pickle</option>
		<option value="PicoLisp">PicoLisp</option>
		<option value="PigLatin">PigLatin</option>
		<option value="Pike">Pike</option>
		<option value="PLpgSQL">PLpgSQL</option>
		<option value="PLSQL">PLSQL</option>
		<option value="Pod">Pod</option>
		<option value="PogoScript">PogoScript</option>
		<option value="Pony">Pony</option>
		<option value="PostCSS">PostCSS</option>
		<option value="PostScript">PostScript</option>
		<option value="POV-Ray SDL">POV-Ray SDL</option>
		<option value="PowerBuilder">PowerBuilder</option>
		<option value="PowerShell">PowerShell</option>
		<option value="Processing">Processing</option>
		<option value="Prolog">Prolog</option>
		<option value="Propeller Spin">Propeller Spin</option>
		<option value="Protocol Buffer">Protocol Buffer</option>
		<option value="Public Key">Public Key</option>
		<option value="Pug">Pug</option>
		<option value="Puppet">Puppet</option>
		<option value="Pure Data">Pure Data</option>
		<option value="PureBasic">PureBasic</option>
		<option value="PureScript">PureScript</option>
		<option value="Python console">Python console</option>
		<option value="Python traceback">Python traceback</option>
		<option value="QMake">QMake</option>
		<option value="QML">QML</option>
		<option value="Racket">Racket</option>
		<option value="Ragel">Ragel</option>
		<option value="RAML">RAML</option>
		<option value="Rascal">Rascal</option>
		<option value="Raw token data">Raw token data</option>
		<option value="RDoc">RDoc</option>
		<option value="REALbasic">REALbasic</option>
		<option value="Reason">Reason</option>
		<option value="Rebol">Rebol</option>
		<option value="Red">Red</option>
		<option value="Redcode">Redcode</option>
		<option value="Regular Expression">Regular Expression</option>
		<option value="Ren'Py">Ren'Py</option>
		<option value="RenderScript">RenderScript</option>
		<option value="reStructuredText">reStructuredText</option>
		<option value="REXX">REXX</option>
		<option value="RHTML">RHTML</option>
		<option value="Ring">Ring</option>
		<option value="RMarkdown">RMarkdown</option>
		<option value="RobotFramework">RobotFramework</option>
		<option value="Roff">Roff</option>
		<option value="Rouge">Rouge</option>
		<option value="RPC">RPC</option>
		<option value="RPM Spec">RPM Spec</option>
		<option value="RUNOFF">RUNOFF</option>
		<option value="Rust">Rust</option>
		<option value="Sage">Sage</option>
		<option value="SaltStack">SaltStack</option>
		<option value="SAS">SAS</option>
		<option value="Sass">Sass</option>
		<option value="Scaml">Scaml</option>
		<option value="Scheme">Scheme</option>
		<option value="Scilab">Scilab</option>
		<option value="SCSS">SCSS</option>
		<option value="Self">Self</option>
		<option value="ShaderLab">ShaderLab</option>
		<option value="ShellSession">ShellSession</option>
		<option value="Shen">Shen</option>
		<option value="Slash">Slash</option>
		<option value="Slim">Slim</option>
		<option value="Smali">Smali</option>
		<option value="Smalltalk">Smalltalk</option>
		<option value="Smarty">Smarty</option>
		<option value="SMT">SMT</option>
		<option value="Solidity">Solidity</option>
		<option value="SourcePawn">SourcePawn</option>
		<option value="SPARQL">SPARQL</option>
		<option value="Spline Font Database">Spline Font Database</option>
		<option value="SQF">SQF</option>
		<option value="SQL">SQL</option>
		<option value="SQLPL">SQLPL</option>
		<option value="Squirrel">Squirrel</option>
		<option value="SRecode Template">SRecode Template</option>
		<option value="Stan">Stan</option>
		<option value="Standard ML">Standard ML</option>
		<option value="Stata">Stata</option>
		<option value="STON">STON</option>
		<option value="Stylus">Stylus</option>
		<option value="Sublime Text Config">Sublime Text Config</option>
		<option value="SubRip Text">SubRip Text</option>
		<option value="SugarSS">SugarSS</option>
		<option value="SuperCollider">SuperCollider</option>
		<option value="SVG">SVG</option>
		<option value="SystemVerilog">SystemVerilog</option>
		<option value="Tcl">Tcl</option>
		<option value="Tcsh">Tcsh</option>
		<option value="Tea">Tea</option>
		<option value="Terra">Terra</option>
		<option value="Text">Text</option>
		<option value="Textile">Textile</option>
		<option value="Thrift">Thrift</option>
		<option value="TI Program">TI Program</option>
		<option value="TLA">TLA</option>
		<option value="TOML">TOML</option>
		<option value="Turing">Turing</option>
		<option value="Turtle">Turtle</option>
		<option value="Twig">Twig</option>
		<option value="TXL">TXL</option>
		<option value="Type Language">Type Language</option>
		<option value="TypeScript">TypeScript</option>
		<option value="Unified Parallel C">Unified Parallel C</option>
		<option value="Unity3D Asset">Unity3D Asset</option>
		<option value="Unix Assembly">Unix Assembly</option>
		<option value="Uno">Uno</option>
		<option value="UnrealScript">UnrealScript</option>
		<option value="UrWeb">UrWeb</option>
		<option value="Vala">Vala</option>
		<option value="VCL">VCL</option>
		<option value="Verilog">Verilog</option>
		<option value="VHDL">VHDL</option>
		<option value="Visual Basic">Visual Basic</option>
		<option value="Volt">Volt</option>
		<option value="Vue">Vue</option>
		<option value="Wavefront Material">Wavefront Material</option>
		<option value="Wavefront Object">Wavefront Object</option>
		<option value="wdl">wdl</option>
		<option value="Web Ontology Language">Web Ontology Language</option>
		<option value="WebAssembly">WebAssembly</option>
		<option value="WebIDL">WebIDL</option>
		<option value="wisp">wisp</option>
		<option value="World of Warcraft Addon Data">World of Warcraft Addon Data</option>
		<option value="X10">X10</option>
		<option value="xBase">xBase</option>
		<option value="XC">XC</option>
		<option value="XCompose">XCompose</option>
		<option value="XML">XML</option>
		<option value="Xojo">Xojo</option>
		<option value="XPages">XPages</option>
		<option value="XPM">XPM</option>
		<option value="XProc">XProc</option>
		<option value="XQuery">XQuery</option>
		<option value="XS">XS</option>
		<option value="XSLT">XSLT</option>
		<option value="Xtend">Xtend</option>
		<option value="Yacc">Yacc</option>
		<option value="YAML">YAML</option>
		<option value="YANG">YANG</option>
		<option value="YARA">YARA</option>
		<option value="Zephir">Zephir</option>
		<option value="Zimpl">Zimpl</option>
          </optgroup>
        </select>
<br><br>
<input type="radio" name="size_cmp" value="size_inf" required> Inferior than size<br>
<input type="radio" name="size_cmp" value="size_sup" required> Superior than size<br><br>
Size <input type="number" name="size" ><br><br>
Pages <input type="number" name="req_pages" placeholder='number of pages'><br><br>
Result per page <input type="number" name="per_page" size="9" placeholder='number of results'><br><br>
<input type="submit" name="Submit"><br><br>

<script type="text/javascript">

function succeed(r){
	formEl = document.getElementsByTagName('form')[0];
	var anchor = formEl.language;
	var html_options = '<option value="">Select included frameworks</option>';
	try{a=JSON.parse(r)}catch(e){alert(e)}

	
	a.forEach(function(e){
		html_options += "<option value=\""+e+"\">"+e+"</option>\n"
	});
	if(formEl.include != undefined){
		formEl.include.remove();
		var brLi = formEl.getElementsByTagName('br');
		brLi[0].remove();
		brLi[1].remove();
	}
		
	var sel = document.createElement("select");
	sel.name = "include";
	sel.multiple = true ;
	sel.size = 12;
	sel.innerHTML = html_options;
	brEl = document.createElement("br");
	brEl2 = document.createElement("br");
	formEl.insertBefore(  sel   ,anchor.nextSibling);
	formEl.insertBefore(  brEl  ,anchor.nextSibling);
	formEl.insertBefore(  brEl2 ,anchor.nextSibling);
	
}

function fail(error){
	console.log('Error :'+error);
}

function getURL (url){
	return new Promise(function(succeed,fail){

		var xhr = new XMLHttpRequest();
		xhr.open('GET',url);
		xhr.addEventListener( 'load' , function(){
			if ( xhr.status == 200)
				succeed(xhr.responseText);
			else
				fail(new Error(xhr.statusText));
		});
		xhr.addEventListener( 'error' , function(){
			fail(new Error("Network Error!"));
		});
		xhr.send();
	});
}


document . addEventListener("DOMContentLoaded" , function(){

	document . getElementById('langSel') . addEventListener( 'change' , function(e){
		language = encodeURIComponent(this.value.trim());
		getURL("http://localhost/GitHubSearch/framework_filter_ajax.php?language="+language).then(succeed).catch(fail);	

	});	
	

});


</script>
