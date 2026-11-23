<?php
    include_once "./vendor/autoload.php";

    use App\Controllers\UserController;
    use Phroute\Phroute\Exception\HttpRouteNotFoundException;
    use Phroute\Phroute\RouteCollector;
    use App\Class\User;


    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $router = new RouteCollector();

    $router->get('/register',[UserController::class, 'create']);
    $router->get('/user/{id}/edit',[UserController::class, 'edit']);
    $router->get('/user',[UserController::class, 'index']);
    $router->get('/user/{id}',[UserController::class, 'show']);
    $router->post('user/',[UserController::class, 'store']);
    $router->put('user/{id}',[UserController::class, 'update']);
    $router->delete('user/{id}',[UserController::class, 'destroy']);

    $router->get("/", function(){
        include_once "app/Views/frontend/index.php";
    });

    $router->get("/login", function(){
        include_once "app/Views/frontend/login.php";
    });

    /*$router->get("/register", function(){
        include_once "app/Views/frontend/register.php";
    });*/

    $router->get("/admin", function(){
        include_once "app/Views/backend/index.php";
    });



    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    try{
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }catch (\Phroute\Phroute\Exception\HttpRouteNotFoundException $e){
        $response = "Eres muy tonto";
    }

    echo $response;