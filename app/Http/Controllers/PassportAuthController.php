<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class PassportAuthController extends Controller
{
    public function register()
    {
        $this -> validate(
            $request ,
            [
               'name'=> 'require'
               ,'details' => 'require|'
            ]
        );
    }
}
