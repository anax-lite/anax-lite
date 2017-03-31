<!doctype html>
<meta charset="utf-8">
<title><?= $title ?></title>
<body>
<navbar>
    <a href="<?= $this->url("database") ?>">Index</a> |
    <a href="<?= $this->url("database/connect") ?>">Connect</a> |
    <a href="<?= $this->url("database/create") ?>">Create table</a> |
</navbar>
<h1><?= $header ?></h1>
