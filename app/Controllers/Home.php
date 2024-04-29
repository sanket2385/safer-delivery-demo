<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function step1(): string
    {
        return view('step-1');
    }

    public function submitStep1()
    {
        $this->load->helper('form');
        $this->load->helper('url');

        redirect("home/step2");
    }

    public function step2(): string
    {
        return view('step-2');
    }

    public function step3(): string
    {
        return view('step-3');
    }

    public function summary(): string
    {
        return view('summary');
    }
}
