<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('header_view');
        echo view('dashboard_view');
        echo view('footer_view');
    }


}
