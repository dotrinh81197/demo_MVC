<?php

// Lấy được request yêu cầu đến controller và action
$controller =  isset($_GET["controller"]) ? $_GET["controller"] :  null;
$action = $_GET["action"] ?? null;

// Hàm kiểm tra lien kết có đúng với đường dẫn hay không, nếu đúng thì in ra active
function showActive($controllerName, $actionName = null)
{
    global $controller;
    if ($controller == $controllerName) {
        echo "active";
    }
}

// Yêu cầu kết nối MySQL
require_once("db.php");
// $connection = DB::getInstance();

//  Nhúng file controller
if (isset($controller)) {
    require_once("controllers/$controller" . "_controller.php");
    // Khởi tạo controller
    // home: HomeController
    $controllerName = ucwords($controller) . "Controller";

    $controllerInstance = new $controllerName;
  
    // Gọi action
    $controllerInstance->$action();
} else {

    require_once("views/shared/layout.php");
}
