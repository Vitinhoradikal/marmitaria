<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): void
    {
        echo view('templates/top');
        echo view('index');
        echo view('templates/foot');
    }   
    
}