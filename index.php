
<?php
/**
 * Front to the Ziki app. This file doesn't do anything, but bootstraps
 * Ziki to load the theme.
 *
 * @package Ziki
 */
/** Loads the Ziki Environment and Theme */

// $app = require( dirname( __FILE__ ) . '/src/bootstrap.php' );






require_once __DIR__.'/router.php';
require_once __DIR__.'/src/classes/route.php';

//to autoload classes
 function __autoload($class_name){

     if(file_exists('./src/classes/'.$class_name.'.php')){

        require_once './src/classes/'.$class_name.'.php';

     }else if(file_exists('./controllers/'.$class_name.'.php')) {

       require_once './controllers/'.$class_name.'.php';
     }
    
}




// $router = new Router(new Request);
//I plan to get rid of all this below but Am late for PR so am coming back for it

// $router->get('/profile', function() {

//     echo "hello there";
//   });

//   $request = $_SERVER['REQUEST_URI'];

//   if (strlen($request) > 1) {
//     $request = rtrim($request, '/');
//   }

//   switch ($request) {

//       case '/' :
//           $ziki = [
//                     [ 'name'          => 'Adroit' ],
//                     [ 'name'          => 'Olu' ],
//                     [ 'name'          => 'Amuwo' ],
//                 ];

//             // Render our view
//             echo (new Twig)->render('index.html', ['ziki' => $ziki] );
//           break;
//       case '/blog-details' :
//           $ziki = [
//                     [ 'name'          => 'Adroit' ],
//                     [ 'name'          => 'Olu' ],
//                     [ 'name'          => 'Amuwo' ],
//                 ];

//             // Render our view
//             echo (new Twig)->render('blog-details.html', ['ziki' => $ziki] );
//           break;
//       case '/timeline' :
//           $ziki = [
//                     [ 'name'          => 'Adroit' ],
//                     [ 'name'          => 'Twig' ],
//                 ];

//             // Render our view
//             echo (new Twig)->render('timeline.html', ['ziki' => $ziki] );
//           break;
//       case '/settings' :
//           echo (new Twig)->render('settings.html', ['ziki' => $ziki] );
//           break;


    //   default:
    //       require __DIR__ . '/resources/themes/ghost/template/404.html';
    //       break;
  // }





