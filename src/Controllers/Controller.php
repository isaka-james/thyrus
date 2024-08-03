<?php

namespace App\Controllers;

use App\Database\DatabaseManager;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = (new DatabaseManager())->getPDO();

        $path = __DIR__ . '/../Views';
        error_log('Attempting to initialize Twig with path: ' . $path);

    }

    public function render($template, $data = []) {

        $loader = new FilesystemLoader('src/Views');
        $twig = new Environment($loader, [
            'cache' => false,
            'debug' => true,
        ]);

        if ($twig === null) {
            error_log('Twig environment is not initialized.');
            header('Content-Type: text/plain; charset=utf-8');
            return 'Twig environment is not initialized.';
        }

        header('Content-Type: text/html; charset=utf-8');
        try {
            return $twig->render($template, $data);
        } catch (\Exception $e) {
            error_log('Twig render error: ' . $e->getMessage());
            return 'Error rendering template.';
        }
    }
}
