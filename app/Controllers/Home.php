<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function contacto(): string
    {
        return view("view_contacto");
    }


}
