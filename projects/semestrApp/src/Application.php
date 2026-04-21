<?php

namespace App;

use App\Controllers\ControllerInterface;

class Application
{
    /**
     * @var array|string[]
     */
    

    /**
     * @var string
     */
    private string $page;

    /**
     * @var Layout
     */
    private Layout $layout;

    public function run(): void
    {
        $instance = ServiceContainer::getInstance();
        $request = Request::prepareRequest();
        $router = $instance->get('router');
        $matchedRoute = $router->match($request);

        if ($matchedRoute instanceof ControllerInterface) {
            $response = $matchedRoute($request);
            foreach ($response->getHeaders() as $header) {
                header($header);
            }
            echo $response->getBody();
        }
    }
}