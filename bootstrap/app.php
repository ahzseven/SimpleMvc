<?php
/**
 * Author: Seven
 * Date: 2017/11/22 23:41
 */
// 定义项目路径
//define('APP_PATH') or define('APP_PATH', getcwd() . '/app');
define('PROJECT_PATH', getcwd());                      // 当前项目目录
define('APP_PATH', getcwd() . '/app');                 // 应用目录
define('CONTROLLERS_PATH', APP_PATH . '/Controllers'); // 控制器目录
define('MODELS_PATH', APP_PATH . '/Models');           // 模型目录
define('VIEWS_PATH', APP_PATH . '/Views');             // 视图目录

/**
 * 获取当前访问的模块-控制器-方法
 */
$m = isset($_GET['m']) ? $_GET['m'] : 'home';
$c = isset($_GET['c']) ? $_GET['c'] : 'index';
$a = isset($_GET['a']) ? $_GET['a'] : 'index';

// 定义当前的模块-控制器-方法
define('MODULE_NAME', $m);
define('CONTROLLER_NAME', $c);
define('ACTION_NAME', $a);

function autoload($class_name){
//    $type = substr($class_name, -10) == 'Controller' ? 'controller' : 'model';

//    if ($type == 'controller') {

        // 模块名称
        $module = substr($class_name, 0, -10) == 'Common' ? '' : '/' . MODULE_NAME;

        // 控制器名称
        $controller_name = '/' . ucfirst(strtolower(substr($class_name, 0, -10))) . 'Controller.php';

        // 控制器完整路径(默认Home模块下的Index控制器中index方法)
        $file = CONTROLLERS_PATH . $module . $controller_name;
//    }

    if (file_exists($file)) {
        require $file;
    }
}

// 注册自动加载
spl_autoload_register("autoload");

$controller = ucfirst($c) . 'Controller';
$_controller = new $controller;
$_controller->$a();










