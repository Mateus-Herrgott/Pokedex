<?php 

    namespace app\Controllers;

use app\Models\Pokemon;

    class CoreController {

        protected function show($viewName, $viewData = []) {
            global $router;
            $absoluteURL = $_SERVER['BASE_URI'];
            
            require_once __DIR__ . '/../views/header.tpl.php';
            require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        }
    }