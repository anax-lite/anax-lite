<?php

// Get all available variables
var_dump(get_defined_vars());

/*
$li = "";
foreach (get_defined_vars() as $key => $val) {
    $li .= "<li>$key</li>\n";
}*/



?><doctype html>
<meta charset="utf-8">
<title><?= $title ?></title>
<p><?= $message ?></p>
<p>These variables are defined.</p>
<ul>
<?php foreach (get_defined_vars() as $key => $val) : ?>
    <li><?= $key ?></li>
<?php endforeach; ?>
</ul>
