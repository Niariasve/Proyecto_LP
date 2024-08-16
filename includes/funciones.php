<?php 

function debug($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function isPostMethod() : bool {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}