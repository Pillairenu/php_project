<?php

$uri =parse_url($_SERVER['REQUEST_URI'])['path'];

// Use Constants for Route Paths
require 'constants.php';

// $routes=[

//     ROOT =>'controllers/index.php',
//     SIGNIN =>'controllers/signin.php',
//     SIGNUP=>'controllers/signup.php',
//     ROOMS=>'controllers/rooms.php',
//     HOUSE=>'controllers/house.php',
//     APT=>'controllers/apartment.php',
//     DETAILS=>'controllers/room-details.php',
//     FAV=>'controllers/favorite.php',
//     PROPERTY=>'controllers/add_property.php',
//     BOOK=>'controllers/view_bookings.php'
// ];

$routes=[

    '/'=>'controllers/index.php',
    '/signin'=>'controllers/signin.php',
    '/signup'=>'controllers/signup.php',
    '/rooms'=>'controllers/rooms.php',
    '/house'=>'controllers/house.php',
    '/apartment'=>'controllers/apartment.php',
    '/room-details'=>'controllers/room-details.php',
    '/favorite'=>'controllers/favorite.php',
    '/property'=>'controllers/add_property.php',
    '/bookings'=>'controllers/view_bookings.php',
    '/logout'=>'controllers/logout.php'


];



function routeToController($uri,$routes)
{

    if(array_key_exists($uri,$routes))
    {
        require $routes[$uri];
    }
    else
    {

        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    
    require "views/{$code}.php";
    die();
}

routeToController($uri,$routes);
?>