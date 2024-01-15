<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view("pages/header");
        echo view("pages/home");
        echo view("pages/footer");
    }

    public function jobs(){
        echo view('pages/header');
        echo view('pages/staffjob');
    }
}
