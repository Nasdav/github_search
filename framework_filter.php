<?php

/**
 * Return a list of s per language
 *
 **/

function what_frameworks( $language ){
	switch ($language) {
                case 'php':
                    return ['opencart','expressionengine','symfony','laravel','magento','yii','cakephp','moodle','phpbb',
			'symphony','joomla','wordpress','silverstripe','elgg','zf2','processwire','zend','mybb','superboxselect',
			'prestashop','drupal', 'kohana','woocommerce','pfsense','codeigniter','nette','concret' , "aiki" , "apigility" , "backdrop" , "bonita" , "fat-free" , "fuelphp" , "getsimple" , "gyroscope" , "hammerkit" , "horde" , "impresspages" , "inek" , "jamroom" , "kajona" , "li3" , "novius os" , "phalcon" , "pop" , "prado" , "processwire" , "silex" , "smart" , "twistphp" , "typo3" , "typo3 flow" , "xoops"
 ];
                break;
                case 'javascript':
			return ["polymer" , "dojo toolkit" , "jquery" ,
 "midori" , "mootools" , "prototype" , "anychart" , "d3.js" , "fusioncharts" , "highcharts" ,
 "easeljs" , "infovis" , "p5.js" , "pixi.js" , "plotly" , "processing.js" , "raphaël" ,
 "swfobject" , "teechart" , "three.js" , "velocity.js" , "whitestormjs" , "angularjs" , "angular" ,
 "bootstrap" , "devextreme" , "dhtmlx" , "dojo" , "ext js" , "foundation" ,
 "jquery ui" , "jqwidgets" , "ignite ui" , "kendo ui" , "wijmo 5" , "openui5" , "qooxdoo" , "smartclient" , "react.js" , "webix" ,
 "winjs" , "ample sdk" , "glow" , "lively kernel" , "script.aculo.us" , "yui" , "closure" , "joose" , "jsphp" , "mochikit" , "pdf.js" ,
 "rico" , "socket.io" , "spry" , "underscore.js" , "cascade" , "jquery mobile" , "mustache" , "jinja-js" , "twig.js" , "jasmine" , "mocha" , "qunit" , "tape" , "unit.js" , "angularjs" , "backbone.js" , "cappuccino" , "chaplin.js" , "echo" , "ember.js" , "enyo" , "ext js" , "google web toolkit" , "javascriptmvc" , "knockout" , "meteor" , "mojito" , "mootools" , "node.js" , "openui5sap" , "react" , "rialto" , "sproutcore" , "vue.js" , "wakanda" , "modernizr" , "cannon.js" , "mathjax"];
                break;
                case 'python':
                	return ["bluebream" , "bottle" , "cherrypy" , "django" , "flask" ,
 "grok" , "nagare" , "nevow" , "pylons" , "pylons " , "pylons" ,
 "pyramid" , "paste" , "quixote" , "rapidsms" , "tactic" ,
 "tornado" , "turbogears" , "web2py" , "webware" , "zope" , "zope 2"];
		break;
                case 'java':
                       return ["flexive" , "jspx" , "openxava" , "crawler4j" , " nutch" , "hk2" , "dagger" , "appfuse" , "jlisa" ,
 "drools" , "easy rules" , "jbpm" , "jeddict" , "act" , "activiti" , "akka" , "android plot" , "annotation command " ,
 " accumulo" , " activemq" , "avalon" , "avro" , "axis" , "blur" , "bookkeeper"  , "vraptor" , "webfirm" , "wildfly" ,
 "camel" , "cayenne" , "click" , "cocoon" , "commons" , "crunch" , "cxf" , "twitter4j" , "vaadin" , "vertx" ,
 "datafu" , "empire db" , "felix" , "flume" , "geronimo" , "giraph" , "hadoop" ,
 "hbase" , "hive" , "jackrabbit" , "javanlp" , "jena" , "kafka" , "log4j" ,
 "lucene" , "mahout" , "mesos" , "mina" , "oodt" , "oozie" , "opennlp" ,
 "pdfbox" , "pig" , "pivot" , "poi" , "qpid" , "jini" , "samza" , "wordcram" , "wso2" , "jess" ,
 "shiro" , "sling" , "solr" , "spark" , "storm" , "struts" , "tapestry" , "stringtemplate" , "suanshu" , "testng" , "thymeleaf" ,
 "tika" , "tomcat" , "turbine" , "uima" , "usergrid" , "velocity" , "vxquery" ,
 "wicket" , "wink" , "xerces" , "zookeeper" , "axon" , "barracuda" , "beads" , "birt" , "bigfaceless" ,
 "biojava" , "bluecove" , "bouncy castle cryptographic" , "cascading" , "checker" , "cogcompnlp" , "codename one" , "controlsfx" ,
 "deeplearning4j" , "directwebremoting" , "dropwizard jersey" , "eclipselink" , "ehcache" , "ejml" ,
 "facebook4j" , "fmj" , "frame4j" , "freemarker template" , "gcviewer" , "geoapi" , "geotools" , "glassfish" , "google gson" ,
 "google guava" , "google guice" , "gwt" , "gstreamer" , "gxt" , "hibernate" , "hsqldb" , "ibatis" , "infinispan" ,
 "itext" , "jackcess" , "jackson" , "collections " , "media " , "javassist" , "javers" , "jaxp" ,
 "jboss seam" , "jcabi" , "jdom" , "jello" , "jersey" , "jetty" , "jfreechart" , "jhipster" , "jidesoft" , "jmock" , "jmonkeyengine" ,"wso2 machine learner" , "wso2 message broker" , "xuggler" , "zkoss" , "prova" , "openrules" , "jruleengine" , 
 "joda time" , "jogamp" , "jooby" , "jppf" , "jprofiler" , "jrockit" , "jsf" , "jsonlib" , "jsoup" , "jsyn" , "jts topology" ,
 "junit" , "spring", "liquibase" , "logback" , "lombok" , "loopj" , "lwjgl" , "mapdb" , "mockito" , "mybatis" , "nd4j" , "netty" ,
 "neuroph" , "ninja" , "opencsv" , "opencv" , "oracle weblogic" , "orientdb" , "ormlite" , "pi4j" , "play" , "primefaces" ,
 "quartz" , "quasar" , "rabbitmq" , "ratpack" , "reactor" , "resteasy" , "restfb" , "restlet" , "sax" , "scribejava" , "selenide" ,
 "selenium" , "slf4j" , "slick2d" , "smack" , "sonarlint" , "sonarqube" , "jasper reports" , "spock" , "stormpath"
 ];
                break;
                case 'perl':
                    return ["data::validator" , "params::util" , "params::validate" , "smart::args" , "audio::cd" , "audio::wav" ,
 "benchmark" , "dumbbench" , "parallel::benchmark" , "chi" , "chi::driver::dbi" , "chi::driver::dbic" , "chi::driver::memcached" ,
 "chi::driver::mongodb" , "chi::driver::redis" , "catalyst::plugin::session::store::chi" , "cgi::application::plugin::chi" ,
 "mojolicious::plugin::chi" , "class::accessor::lite" , "class::accessor::lite::lazy" , "homer" , "mo" , "moo" , "moose" , "mouse" ,
 "object::tiny" , "app::cmd" , "getopt::long" , "aws::cloudfront" , "aws::s3" , "net::amazon::ec2" , "net::aws::ses" ,
 "webservice::digitalocean" , "webservice::dropbox" , "object::container" , "data::dumper::simple" , "data::messagepack" ,
 "json::pp" , "json::xs" , "sereal" , "storable" , "text::csv" , "text::csv_xs" , "text::markdown" , "toml" , "xml::libxml" ,
 "xml::compile::schema" , "xml::compile::soap" , "xml::compile::wsdl" , "yaml" , "dbi" , "dbix::connector" , "dbix::handler" ,
 "dbix::inspector" , "dbix::querylog" , "dbix::sunny" , "dbix::transactionmanager" , "dbd::csv" , "dbd::firebird" , "dbd::mysql" ,
 "dbd::odbc" , "dbd::oracle" , "dbd::pg" , "dbd::sqlite" , "dbd::sybase" , "cache::memcached::fast" , "mango" , "redis" ,
 "redis::fast" , "search::elasticsearch" , "unqlite" , "datetime" , "time::moment" , "time::piece" , "device::modem" , "device::onkyo" ,
 "rex" , "email::sender" , "ae" , "anyevent" , "ev" , "event" , "io::async" , "poe" , "autodie" , "exception::class" , "throwable" ,
 "try::tiny" , "trycatch" , "file::util" , "path::tiny" , "catalyst::controller::html::formfu" , "cgi::formbuilder" , "form::sensible" ,
 "form::toolkit" , "html::formfu" , "html::formfu::extjs" , "html::formhandler" , "mojolicious::plugin::formfields" , "www::form" ,
 "image::magick" , "imager" , "array::unique" , "list::compare" , "list::gen" , "list::moreutils" , "list::util" , "log::dispatch" ,
 "log::log4perl" , "log::minimal" , "dist::zilla" , "cpan" , "pdl::graphics::gnuplot" , "pdl::io::*" , "pdl::linearalgebra" ,
 "pdl::stats" , "physics::*" , "catalyst::action::rest" , "dancer2::plugin::rest" , "dancer::plugin::rest" , "raisin" , "squatting" ,
 "html::template" , "template::alloy" , "template::toolkit" , "text::microtemplate" , "text::microtemplate::extended" ,
 "text::template" , "text::xslate" , "tiffany" , "template::magic" , "test::base" , "test::base::less" , "test::bdd::cucumber" ,
 "test::class" , "test::deep" , "test::deep::matcher" , "test::harness" , "test::kantan" , "test::more" , "test::exception" ,
 "test::fatal" , "test::mock::guard" , "test::mocktime" , "test::mysqld" , "test::tcp" , "test::time" , "devel::cover" ,
 "devel::cover::report::coveralls" , "app::ack" , "app::nopaste" , "daiku" , "data::printer" , "reply" , "riji" , "toolbox::simple" ,
 "script::toolbox" , "devel::kit" , "config::tiny" , "ffmpeg" , "video::info" , "amon2" , "catalyst" , "dancer" , "official site" ,
 "dancer2" , "gantry" , "kossy" , "mojolicious" , "poet" , "gazelle" , "plack" , "server::starter" , "starlet" , "starman" , "twiggy" ,
 "embperl" , "mason" , "web::scraper"];
                break;
                case 'ruby':
                	return ["rails" , "rack" , "sinatra" , "hanami" , "padrino" , "cramp" , "cuba" , "pakyow" , "ramaze" , "raptor" , "hobo" , "scorched" , "merb-core" , "rango" , "plezi" , "strelka" , "camping" , "vanilla" , "bats" , "renee" , "harbor" , "gin" , "e" , "marley" , "lattice"];
		break;
		case 'c':
	return ["libtool" , "meson" , "scons" , "zproject" , "mpl-2.0" , "ccache" , "clang" , "ncsa" , "distcc" , "firm" ,
 "pcc" , "blosc" , "brotli" , "clzip" , "lzip" , "croaring" , "roaring bitmaps" , "finitestateentropy" , "density" , "heatshrink" ,
 "isc" , "fast_zlib" , "huffandpuff" , "libbzip2" , "lizard" , "lz4" , "lzo" , "shoco" , "simdcomp" , "smaz" , "squash" , "turbopfor" ,
 "turborle" , "zip" ,  "zlib" , "zlib-ng" , "zstandard" , "cchan" , "checkedthreads" , "ck" , "libconcurrent" , "libdill" , "libhl" ,
 "liburcu" , "mill" , "oclkit" , "ocl-mla" , "openmp" , "openmpi" , "pal" , "pth" , "pthreads" , "tinycthread" , "zlib" , "gnu sasl" ,
 "libgcrypt" ,  "openssl" , "liboqs" , "libsodium" , "libtomcrypt" , "mbed tls" , "miracl" , "retter" , "s2n" , "sphlib" ,
 "trezor-crypto" , "berkeleydb" , "groonga" , "hiredis" , "libmongoc" , "mongodb" , "lmdb" , "oldap-2.8" , "postgresql" , "redis" ,
 "sophia" , "sparkey" , "apache-2.0" , "sqlite" , "unqlite" , "whitedb" , "collections-c" , "kdtree" , "libavl" , "liblfds" , "m*lib" ,
 "offbrand" , "libsrt" ,  "packedarray" , "wtfpl" , "uthash" , "vector.h" , "c-reduce" , "cbmc" , "cflow" , "complexity" , "cscout" ,
 "ddd" , "debug" , "gdb" ,  "lldb" , "ncsa" , "rr" , "valgrind" , "cxref" , "doconce" , "doxygen" , "anjuta devstudio" ,
 "code::blocks" , "codelite" , "geany" , "kdevelop" , "apr" , "c algorithms" , "isc" , "cpl" , "efl" , "klib" , "libcork" , "libnih" ,
 "libu" , "pbl" , "qlibc" , "tbox" , "allegro" , "zlib" , "chipmunk2d" , "corange" , "csfml" , "sfml" , "zlib" , "darkplaces" ,
 "epoxy" , "freeglut" , "x11" , "glfw" , "zlib" , "ioquake3" , "kazmath" , "libao" , "mathc" , "zlib" , "orx" , "zlib" , "quake" ,
 "quake2" , "raylib" , "zlib" , "retroarch" , "libretro" , "sdl2" , "zlib" , "sdl-gpu" , "sigil" , "spearmint" , "uastar" , "zlib" ,
 "cairo" , "mpl-1.1" , "giflib" , "graphene" ,  "heman" , "libcaca" , "wtfpl" , "libgd" , "libimagequant" , "libjpeg-turbo" , "libpng" ,
 "libpng" , "librsvg" , "libsixel" , "libvips" ,  "libxmi" , "lightmapper" , "mozjpeg" , "nanovg" , "zlib" , "opengl" , "gtk+" , "iup" ,
 "nuklear" , "tinyfiledialogs" , "zlib" , "tk" , "tcl" , "xforms toolkit" , "clhash" , "highwayhash" , "spookyhash" , "t1ha" ,
 "xxhash" , "jansson" , "jfes" , "jsmn" , "json.h" , "unlicense" , "wjelement"  , "yajl"];
		break;
                default:
                    return []; 
                break;
            }
}
