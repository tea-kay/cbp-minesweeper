<?php 
require '../bootstrap/bootstrap.php';

function getControllerActionFromRequest() 
{
    $routes = [];
    include ROUTES_DIR . '/web.php';
    // var_dump($routes);

    $current_route = request::get('route', 'homepage');

    if (array_key_exists($current_routes, $routes))
    {
        // return the value from $routes
        return $routes[$current_route];
    }
    else
    {
        return [
            'controller' => 'errorController',
            'action' => 'error404'
        ];
    }
}

//run an action of a controller
function runControllerAction($controller_name, $action_name) 
{
    //require the "correct" controller file
    require APP_DIR . '/controllers/gamesController.php';

    // create an object instance of the controller class
    $controller = new gamesController();

    // call the index method of the controller and echo the result
    echo $controller->$action_name();
}

$controller_action = getControllerActionFromquests();

$current_route = request::get('route', '404');

// if ($current_route == '404') 
// {
//     require APP_DIR .'/controllers/errorController.php';

//     $controller = new errorController; // Creating a new class 

//     echo $controller->error404();

// }
// else 
// {
//     //display list of games
//     //require the 'correct' controller file
//     require APP_DIR .'/controllers/gamesController.php';

//     $controller = new gamesController; // Creating a new class 

//     echo $controller->listing();

// }




// echo PUBLIC_DIR . '<br>';
// echo __DIR__ . '<br>';
// echo __FILE__ . '<br>';
// echo __LINE__ . '<br>';



