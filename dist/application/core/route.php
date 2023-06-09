<?php

class Route
{

	static function start()
	{
		$controller_name = 'Main';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);
        var_dump($routes);

		// получаем имя контроллера
		if ( !empty($routes[2]) )
		{	
			$controller_name = $routes[2];
		}
		
		// получаем имя экшена
		if ( !empty($routes[3]) )
		{
			$action_name = $routes[3];
		}

		$model_name = 'Model_'.$controller_name;
		$controller_name = 'controller_'.$controller_name;
		$action_name = 'action_'.$action_name;

		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}

		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controller/".$controller_file;
        var_dump($controller_path);
		if(file_exists($controller_path))
		{
			include "application/controller/".$controller_file;
		}
		else
		{
			echo "подцепляем файл с классом контроллера";
        }
		
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			$controller->$action();
		}
		else
		{
			echo "last if";
		}
	
	}

	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
    
}
