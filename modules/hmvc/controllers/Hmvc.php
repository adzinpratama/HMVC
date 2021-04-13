<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hmvc extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['fileName'] = "welcome_hmvc";

		// Without second parameter the view will load in front theme by default;
		Theme::renderView($data, parent::$front_theme, true);
	}
}
