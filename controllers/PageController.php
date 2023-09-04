<?php

class PageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct()
    {

    }

    public function index()
    {
        $this->render->view('default');
    }

    public function folder_one()
    {
        $this->render->view('folder_one/default');
    }

    public function folder_two()
    {
        $this->render->view('folder_two/default');
    }
}