<?php

error_reporting(0);

require_once("vendor/autoload.php");

use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "template/",
    "cache_dir"     => "cache/",
    "debug"         => false, // set to false to improve the speed
);
Tpl::configure( $config );
// Add PathReplace plugin (necessary to load the CSS with path replace)

// create the Tpl object
$tpl = new Tpl;
// assign a variable


function teste()
{
    return 2 + 4;
}


$path = $_SERVER['PHP_SELF'];

// $filename = substr(strrchr($path, "/"), 1); // pega a ultima rota que contem o / e depois pula essa barra
// echo $filename; // "index.html"
$filename = 15;

$tpl->assign( "name", "Obi Wan Kenoby" );

$tpl->assign( "title", $filename );





// assign an array
// $tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
// draw the template
$tpl->draw( "index" );



?>