<?php
//$data = get_defined_vars();
//include __DIR__ . "/header.php";
/*
$this->renderView("view/header", [
    "title" => $title,
]);
*/
try {
    $this->renderView("view/header", $data);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<p>This is another test view.</p>

<p><?= $message ?></p>

<?php
//include __DIR__ . "/footer.php"
/*
$this->renderView("view/footer", [
    "copyright" => $copyright,
]);
*/
$this->renderView("view/footer", $data);
