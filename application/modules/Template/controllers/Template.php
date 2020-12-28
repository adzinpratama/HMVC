<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->load->view('template_v');
    }

    function view($data = NULL)
    {

        $this->load->view('template_v', $data);
    }
}
