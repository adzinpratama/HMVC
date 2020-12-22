<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->ci->data['fileName'] = "welcome_hmvc";

        // Without second parameter the view will load in front theme by default;
        Theme::renderView($this->ci->data, parent::$admin_theme, true);
    }
}
