<?php

namespace PhpPmd\Framework;

class Request
{
    public $get = [];
    public $uri = '';
    public function __construct()
    {
        $this->get = $_GET;
        $this->uri =  explode('?', $_SERVER['REQUEST_URI']);
    }

    public function input($name, $value = null)
    {
        return $this->get[$name] ?? $value;
    }

    public function uri()
    {
        return $this->uri;
    }
}
