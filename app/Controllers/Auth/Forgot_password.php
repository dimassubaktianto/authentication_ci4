<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Forgot_password extends BaseController
{
    public function index()
    {
        $data = [
            'view_title' => 'Forgot Password',
            'view_name' => 'auth/forgot_password'
        ];
        return view('layout', $data);
    }

    //--------------------------------------------------------------------

}
