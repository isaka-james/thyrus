<?php

namespace App\Controllers;

// Remember, if you want to use something you gotta `use` them first

class TestController extends Controller
{

    public function __construct()
    {
        // Any construction you can make especially for your models

    }

    public function testAstra()
    {
        return $this->render('index.twig', ['passedVariable' => 'Thyrus is Good']);
    }
}
