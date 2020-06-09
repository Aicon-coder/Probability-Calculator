<?php

if ( $_SERVER["REQUEST_URI"] == "/") {
    readfile("home.html");  

} else if ( $_SERVER["REQUEST_URI"] == "/stuff.css" ) {
    header("Content-Type: text/css");
    readfile("stuff.css" );

} else if ( $_SERVER["REQUEST_URI"] == "/Core.js" ) {
    readfile("Core.js" );




} else {
     var_dump( $_SERVER["REQUEST_URI"] );
    echo("I don't know what you want from me..");







}


//var_dump($_SERVER);
//exit();




// Show all information, defaults to INFO_ALL



?>