<?php
/**
 * Routes.
 */
$app->router->add("", function () {
    echo <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>Home</title>
<h1>Home</h1>
<p>This is the homepage.</p>
EOD;
});

$app->router->add("about", function () {
    echo <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>About</title>
<h1>About</h1>
<p>This is the page about me.</p>
EOD;
});

$app->router->addInternal("404", function () {
    echo <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>404</title>
<h1>404 Not Found</h1>
<p>The route could not be found!</p>
EOD;
});
