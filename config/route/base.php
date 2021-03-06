<?php
/**
 * Routes.
 */
$app->router->add("", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Home"]);
    $app->view->add("take1/navbar");
    $app->view->add("take1/home");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});



$app->router->add("admin/**", function () use ($app) {
    if (user not loggedin) {
        $app->redirect("about");
    }
});


$app->router->add("admin/user", function () use ($app) {
    if (user not loggedin) {
        $app->redirect("about");
    }
});



$app->router->add("about", function () use ($app) {
    $app->view->add("take1/header", ["title" => "About"]);
    $app->view->add("take1/navbar");
    $app->view->add("take1/about");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("status", function () use ($app) {
    $data = [
        "Server" => php_uname(),
        "PHP version" => phpversion(),
        "Included files" => count(get_included_files()),
        "Memory used" => memory_get_peak_usage(true),
        "Execution time" => microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'],
    ];

    $app->response->sendJson($data);
});

$app->router->add("search/{string}", function ($string) use ($app) {
    $data = [
        "Searchstring was" => $string
    ];

    $app->response->sendJson($data);
});


/**
 * Check arguments that matches a specific type.
 */
$callback = function ($value = null) use ($app) {
    $data = [
        "method"    => $app->request->getMethod(),
        "route"     => $app->request->getRoute(),
        "matched"   => $app->router->getLastRoute(),
        "value"     => $value,
    ];

    $app->response->sendJson($data);
};

$app->router->add("validate/{value:digit}", $callback);
$app->router->add("validate/{value:hex}", $callback);
$app->router->add("validate/{value:alpha}", $callback);
$app->router->add("validate/{value:alphanum}", $callback);

$app->router->get("router/get", $callback);
$app->router->post("router/post", $callback);
$app->router->put("router/put", $callback);
$app->router->delete("router/delete", $callback);
