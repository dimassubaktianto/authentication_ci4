<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'view_name' => 'auth/login'
        ];
        return view('layout', $data);
    }

    //--------------------------------------------------------------------

}
