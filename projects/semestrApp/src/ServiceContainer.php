<?php

namespace App;
use App\Controllers\HomepageController;
use App\Controllers\ArticlespageController;
use App\Controllers\DashboardpageController;
use App\Controllers\AboutpageController;

class ServiceContainer
{
    private static $instance;

    private array $services;

    private function __construct()
    {
        $this->services['router'] = new Router(
            [
                'home' => [
                    'path' => '/', 
                    'page' => 'homepage',
                    'controller' => new HomepageController()
                ],
                'about' => [
                    'path' => '/about', 
                    'page' => 'about',
                    'controller' => new AboutpageController()
                ],
                'articles' => [
                    'path' => '/articles/{id}', 
                    'page' => 'articles',
                    'controller' => new ArticlespageController()
                ],
                'dashboard' => [
                    'path' => '/dashboard', 
                    'page' => 'dashboard',
                    'controller' => new DashboardpageController()
                ]
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