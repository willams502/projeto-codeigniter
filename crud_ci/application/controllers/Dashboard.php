<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index()
	{
		$this->load->model("games_model");
		$this->games_model->index();
		$data['games'] = $this->games_model->index();
		$data["title"] = "Dashboard - Code-igniter";
		$this->load->view('page/dashboard', $data);
	}
}
