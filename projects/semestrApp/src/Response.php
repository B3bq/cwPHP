<?php
namespace App;

use App\Request;
use App\Layout;

class Response
{
    private Layout $layout;
 
    public function __construct(Request $request, string $page)
    {
        $this->layout = new Layout($request, $page, 'default');
    }

    public function render(): void
    {
        $this->layout->render();
    }
}