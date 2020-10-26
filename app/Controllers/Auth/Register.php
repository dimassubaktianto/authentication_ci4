<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        $data = [
            'view_title' => 'Register',
            'view_name' => 'auth/register'
        ];
        return view('layout', $data);
    }

    //--------------------------------------------------------------------

}
