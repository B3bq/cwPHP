<?php

namespace App;

class ServiceContainer
{
    private static $instance;

    private array $services;

    private function __construct()
    {
        $this->services['router'] = new Router(
            [
                'home' => ['path' => '/', 'page' => 'homepage'],
                'about' => ['path' => '/about', 'page' => 'about'],
                'articles' => ['path' => '/articles', 'page' => 'articles'],
                'dashboard' => ['path' => '/dashboard', 'page' => 'dashboard']
            ]
        );
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function get(string $identifier)
    {
        if (!isset($this->services[$identifier])) {
            throw new \Exception("Service $identifier not found");
        }

        return $this->services[$identifier];
    }

}