<?php

    use app\Controllers\MainController;
    use app\Controllers\ErrorController;


    require __DIR__ . "/vendor/autoload.php";

    $subFolder = $_SERVER['BASE_URI'];

    $router = new AltoRouter();
    $router->setBasePath($subFolder);


    $router->map(
        "GET",
        "/",
        [
            'controller' => MainController::class,
            'method' => 'homeAction'
        ],
        "page_home"
    );

    $router->map(
        "GET",
        "/detail/[i:id]",
        [
            'controller' => MainController::class,
            'method' => 'detailAction'
        ],
        "page_detail"
    );

    $router->map(
        "GET",
        "/types",
        [
            'controller' => MainController::class,
            'method' => 'typesAction'
        ],
        "page_types"
    );

    $router->map(
        "GET",
        "/type/[i:type]",
        [
            'controller' => MainController::class,
            'method' => 'filteredTypeAction'
        ],
        "page_type_filtered"
    );


    $match = $router->match();
    if($match !== false) {
        $target = $match['target'];

        $objectController = $target['controller'];
        $method = $target['method'];

        $controller = new $objectController();

        $params = $match['params'];

        $controller->$method($params);

    } else {
        $errorController = new ErrorController();
        $errorController->error404Action();
    }



