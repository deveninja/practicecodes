<?php

// Dump variables then die
function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}