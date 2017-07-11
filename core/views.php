<?php

class View
{
    public function render($filename, $data)
    {
        require_once 'views/' . $filename . '.php';
    }
}