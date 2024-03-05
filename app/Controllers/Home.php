<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
      $this->load->view('welcome_message');
    }

    public function about(){
        $this->load->view("about");
    }

    public function contact(){
        $this->load->view("contactpage");
    }
}
