<?php
namespace App;

use App\Request;
use App\Layout;

class Response
{
    private Layout $layout;
    private string $page;

    public function __construct(Request $request, string $page)
    {
        $this->page = $page;
        $this->layout = new Layout($request, $page, 'default');
        $this->layout->render();
    }
}