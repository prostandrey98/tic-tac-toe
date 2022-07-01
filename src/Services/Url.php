<?php

namespace Services;

class Url
{
    protected $uri;
    private static $instance;

    private function __construct()
    {
        $this->uri = parse_url($_SERVER['REQUEST_URI'])['path'];

        if ('/' == $this->uri || empty($this->uri)) {
            $this->uri = '/tic-tac-toe';
        }
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Url();
        }

        return self::$instance;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function setUri(string $uri)
    {
        $this->uri = $uri;
    }
}
