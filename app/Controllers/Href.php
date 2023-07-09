<?php

namespace App\Controllers;

class Href extends BaseController {

    public function login() {
        return view('ClientSide/Login');
    }

    public function signUp() {
        return view('ClientSide/SignUp');
    }


}
