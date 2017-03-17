<?php
/**
 * Internal routes.
 */
$app->router->addInternal("404", function () use ($app) {
    $app->view->add("take1/header", ["title" => "404"]);
    $app->view->add("take1/404");

    $app->response->setBody([$app->view, "render"])
                  ->send(404);
});
