<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pengabdian extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function tampil(){
			$this->load->view('/dashboard/pengabdian/tampil');
		}
		public function tambah(){
			$this->load->view('/dashboard/pengabdian/tambah');
		}
		public function edit(){
			$this->load->view('/dashboard/pengabdian/edit');
		}
	}
  ?>