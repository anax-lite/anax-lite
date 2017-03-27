<?php
/**
 * Routes to test the view engine.
 */
$app->router->add("view/test1", function () use ($app) {
    $app->view->add("view/test1", [
        "title" => "Home",
        "message" => "Hello World",
        "answer" => 42
    ]);

    $app->response->setBody([$app->view, "render"])
                  ->send();
});



$app->router->add("view/test2", function () use ($app) {
    $app->view->add("view/test2", [
        "title" => "Home",
        "message" => "Hello World",
    ]);

    $app->response->setBody([$app->view, "render"])
                  ->send();
});



$app->router->add("view/test3", function () use ($app) {
    $app->view->add("view/test3", [
        "title" => "Home",
        "message" => "Hello World",
        "copyright" => "MegaMic"
    ]);

    $app->response->setBody([$app->view, "render"])
                  ->send();
});



$app->router->add("view/test4", function () use ($app) {
    $app->view->add("view/test4", [
        "title" => "Home",
        "message" => "Hello World",
        "copyright" => "MegaMic"
    ]);

    $app->response->setBody([$app->view, "render"])
                  ->send();
});



$app->router->add("view/test5", function () use ($app) {
    // Create default data set to send to the layout
    $data = [
        "title" => "Index",
        "message" => "Hello World"
    ];

    // Add the layout view to its own region
    $app->view->add("view/layout", $data, "layout");

    // Add views to a specific region
    $app->view->add("view/block", ["region" => "flash1"], "flash", 0);
    $app->view->add("view/block", ["region" => "flash2"], "flash", 1);
    $app->view->add("view/block", ["region" => "main1"], "main", 1);
    $app->view->add("view/block", ["region" => "main2"], "main", 0);
    $app->view->add("view/block", ["region" => "footer1"], "footer", 0);
    $app->view->add("view/block", ["region" => "footer2"], "footer", 1);

    // Render the layout view and send the response
    $body = $app->view->renderBuffered("layout");
    $app->response->setBody($body)
                  ->send();
});
