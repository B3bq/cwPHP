<?php

namespace App\Controllers;

use App\Request;
use App\Response;

class HomepageController implements ControllerInterface
{
    public function __invoke(Request $request): Response
    {
        // implement
        return new Response($request, 'homepage');
    }
}