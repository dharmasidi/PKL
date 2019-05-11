<?php
	define('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Pengabdian extends CI_Controller
	{
		
		function __construct(argument)
		{
			# code...
		}

		function tampil(){
			$this->load->view('/dashboard/pengabdian/tampil');
		}
	}
  ?>