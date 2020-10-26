<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'view_title' => 'Dashboard',
            'view_name' => 'backend/dashboard'
        ];
        return view('layout', $data);
    }

    //--------------------------------------------------------------------

}
