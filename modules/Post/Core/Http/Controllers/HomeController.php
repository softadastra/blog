<?php
namespace Modules\Post\Core\Http\Controllers;

use App\Controllers\Controller;
use Ivi\Http\HtmlResponse;

class HomeController extends Controller
{
    public function index(): HtmlResponse
    {
        $title = (string) (cfg(strtolower('Post') . '.title', 'Softadastra Post') ?: 'Softadastra Post');
        $this->setPageTitle($title);

        $message = "Hello from PostController!";
        $styles  = '<link rel="stylesheet" href="' . asset("assets/css/style.css") . '">';
        $scripts = '<script src="' . asset("assets/js/script.js") . '" defer></script>';

        return $this->view(strtolower('Post') . '::home', [
            'title'   => $title,
            'message' => $message,
            'styles'  => $styles,
            'scripts' => $scripts,
        ]);
    }
}