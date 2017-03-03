<?php
echo "I wanna be a frontcontroller!";

/**
 * Bootstrap the framework.
 */
// Were are all the files?
define("ANAX_INSTALL_PATH", realpath(__DIR__ . "/.."));
define("ANAX_APP_PATH", ANAX_INSTALL_PATH);

// Include essentials
require ANAX_INSTALL_PATH . "/config/error_reporting.php";

// Get the autoloader by using composers version.
require ANAX_INSTALL_PATH . "/vendor/autoload.php";

// Create and use an object of the request class.
$request = new \Anax\Request\RequestBasic();
$request->init();
var_dump($request);

// Create and init an instance of url.
$url = new \Anax\Url\Url();

// Set default values from the request object.
$url->setSiteUrl($request->getSiteUrl());
$url->setBaseUrl($request->getBaseUrl());
$url->setStaticSiteUrl($request->getSiteUrl());
$url->setStaticBaseUrl($request->getBaseUrl());
$url->setScriptName($request->getScriptName());

// Update url configuration with values from config file.
$url->configure("url.php");
$url->setDefaultsFromConfiguration();

// Create some urls.
$aUrl = $url->create("");
echo "<p><a href='$aUrl'>The index url, home</a> ($aUrl)";

$aUrl = $url->create("some/route");
echo "<p><a href='$aUrl'>Url to some/route</a> ($aUrl)";

$aUrl = $url->create("some/where/some/route");
echo "<p><a href='$aUrl'>Another url to some/where/some/route</a> ($aUrl)";


echo "<p>Done";
