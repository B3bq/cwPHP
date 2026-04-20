<?php

namespace App\Controllers;

use App\Request;
use App\Response;

class DashboardpageController implements ControllerInterface
{
    public function __invoke(Request $request): Response
    {
        // implement
        return new Response($request, 'dashboard');
    }
}