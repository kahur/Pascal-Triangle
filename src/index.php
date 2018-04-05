<?php

require_once "../vendor/autoload.php";



$triangle = new Triangle(
    new Row(
        new Cell()
    )
);

$view = new PrintView();

$view->render(10, $triangle->generate(10));
