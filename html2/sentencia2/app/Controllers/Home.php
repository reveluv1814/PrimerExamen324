<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('hola');
    }
    public function fcpn()
    {
        echo view('fcpn/header');
        echo view('fcpn/index');
        echo view('fcpn/footer');
    }
}
