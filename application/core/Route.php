<?php
class Route{

    static public function start(){
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        $controllerName = 'Main';
        $actionName = 'index';

        if(!empty($routes[1])){
            $controllerName = $routes[1];
        }

        if(!empty($routes[2])){
            $actionName = $routes[2];
        }

        $modelName = 'Model_'.$controllerName.'.php';
        $model_file = strtolower($modelName);
        $modelPath = 'application/models/'.$model_file;
        if(file_exists($modelPath)){
            require_once $modelPath;
        }

        $controllerName = 'Controller_'.$controllerName;
        $controller_file = strtolower($controllerName).'.php';
        $actionName = 'action_'.$actionName;

        $controllerPath = "application/controllers/".$controller_file;
        if(file_exists($controllerPath)){
            require_once $controllerPath;
        }else{
            Route::error404();
        }

        $controller = new $controllerName;
        $action = $actionName;
        if(method_exists($controller, $action)) {
            if (!empty($routes[3])) {
                $controller->$actionName($routes[3]);
            }elseif (empty($routes[3])){
                $controller->$action();
            }
        else{
                Route::error404();
            }
        }

    }

    static public  function error404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}