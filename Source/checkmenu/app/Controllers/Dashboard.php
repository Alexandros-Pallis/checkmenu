<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $something = 5;
        echo view('dashboard/header');
        echo view('dashboard/index');
        echo view('dashboard/footer');
    }
}
