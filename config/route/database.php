<?php
/**
 * Routes to test the view engine.
 */
$app->router->add("database", function () use ($app) {
    // Create default data set to send to the layout
    $data = [
        "title" => "Index | database",
        "header" => "Database examples",
    ];

    // Add views to a specific region

    // Add layout, render it, add to response and send.
    $app->view->add("database/header", $data, "header");
    $app->view->add("database/footer", [], "footer");
    $app->view->add("database/layout", $data, "layout");
    $body = $app->view->renderBuffered("layout");
    $app->response->setBody($body)->send();
});



$app->router->add("database/connect", function () use ($app) {
    // Create default data set to send to the layout
    $data = [
        "title" => "Connect | database",
        "header" => "Connecting to the database",
    ];

    // Do something
    $app->db->connect();

    // Add views to a specific region
    $app->view->add("database/section", [
        "content" => "Establishing connection with the database.",
    ]);

    // Add layout, render it, add to response and send.
    $app->view->add("database/header", $data, "header");
    $app->view->add("database/footer", [], "footer");
    $app->view->add("database/layout", $data, "layout");
    $body = $app->view->renderBuffered("layout");
    $app->response->setBody($body)->send();
/*
    $app->renderPage([
        "title" => "Connect | database",
        "header" => "Connecting to the database",
    ]);
*/
});



$app->router->add("database/create", function () use ($app) {
    // Create default data set to send to the layout
    $data = [
        "title" => "Create table | database",
        "header" => "Create a table in the database",
    ];

    // Do something
    $sql = <<< EOD
CREATE TABLE IF NOT EXISTS anax (
    code CHAR(6) NOT NULL PRIMARY KEY,
    name VARCHAR(20)
);
EOD;
    $app->db->connect()
            ->execute($sql);

    // Add views to a specific region
    $app->view->add("database/section", [
        "sql" => $sql,
    ]);

    // Add layout, render it, add to response and send.
    $app->view->add("database/header", $data, "header");
    $app->view->add("database/footer", [], "footer");
    $app->view->add("database/layout", $data, "layout");
    $body = $app->view->renderBuffered("layout");
    $app->response->setBody($body)->send();
});
