<?php

namespace App\Controllers;

use App\Request;
use App\Layout;
use App\Response\Response;

class ErrorController implements ControllerInterface
{
    public function __invoke(Request $request): Response
    {
        $layout = new Layout($request, 'error', 'error');
        return new Response($layout->render(), [], 404);
    }
}