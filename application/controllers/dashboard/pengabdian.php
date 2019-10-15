<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pengabdian extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model("Pengabdian_model");
			$this->load->library('form_validation');
			$this->load->helper('url', 'form');
			//$this->load->helper(array('Pengabdian', 'url'));
			$this->pengabdian = $this->Pengabdian_model;
		}

		public function tampil(){
			$data['all'] = $this->pengabdian->get_all();
			$this->load->view('/dashboard/pengabdian/tampil', $data);
		}
		public function tambah(){
			$data['all'] = $this->pengabdian->get_all();
			$data['uraian_kegiatan'] = $this->pengabdian->uraian_kegiatan();
			$this->load->view('dashboard/pengabdian/tambah', $data);
		}
		public function edit($id){
			$data['kegiatan'] = $this->pengabdian->editPengabdian($id);
			$data['uraian_kegiatan'] = $this->pengabdian->uraian_kegiatan();
			$this->load->view('/dashboard/pengabdian/edit',$data);
		}	

		public function add(){
			$this->form_validation->set_rules('uraianKegiatan','Uraian Kegiatan', 'required' );
			$this->form_validation->set_rules('subKegiatan','Sub Kegiatan', 'required' );
			$this->form_validation->set_rules('tanggalKegiatan','Tanggal Kegiatan', 'required' );
			$this->form_validation->set_rules('satuanHasil','Satuan Hasil', 'required' );
			$this->form_validation->set_rules('volumeKegiatan','Volume Kegiatan', 'required' );
			$this->form_validation->set_rules('angkaKredit','Angka Kredit', 'required' );
			//$this->form_validation->set_rules('buktiFisik','Bukti Fisik', 'required' );
			$this->form_validation->set_rules('deskripsi','Deskripsi', 'required' );

			if ($this->form_validation->run() == FALSE) {
				//redirect(base_url('dashboard/Pengabdian/tambah'));
				$this->load->view('/dashboard/pengabdian/tambah');
			}
			else{
				//upload file
			 $namefile = $_FILES['buktiFisik']['name'];
			 $file_ext = pathinfo($namefile, PATHINFO_EXTENSION);
			 $document = $namefile.".".$file_ext;
			 $config['upload_path'] = './assets/file/';
			 $config['allowed_types'] = 'pdf';
			 $config['file_name'] = $document;
			 $config['overwrite'] = true;
			 $config['max_size'] = 10240;

			 $this->load->library('upload',$config);
			 if ($this->upload->do_upload('buktiFisik')) {
			 	$upload_data =$this->upload->data();
			 	$filename = $upload_data['file_name'];
			 }

			$uraianKegiatan = $this->security->xss_clean($this->input->post('uraianKegiatan'));
			$subKegiatan = $this->security->xss_clean($this->input->post('subKegiatan'));
			$tanggalKegiatan = $this->security->xss_clean(date_format(date_create($this->input->post('tanggalKegiatan')),'Y-m-d'));
			$satuanHasil = $this->security->xss_clean($this->input->post('satuanHasil'));
			$volumeKegiatan = $this->security->xss_clean($this->input->post('volumeKegiatan'));
			$angkaKredit = $this->security->xss_clean($this->input->post('angkaKredit'));
			$deskripsi = $this->security->xss_clean($this->input->post('deskripsi'));
			$buktiFisik = $filename;
			 
			// $data['dosen_nip'] =""; dari session login
			// $data['id_bidang'] =""; dari session pencet navbar 
			$data['id_uraian'] = $uraianKegiatan;
			$data['sub_kegiatan'] = $subKegiatan;
			$data['tanggal'] = $tanggalKegiatan;
			$data['satuan_hasil'] =$satuanHasil;
			$data['jumlah_volume'] =$volumeKegiatan;
			$data['angka_kredit'] =$angkaKredit;
			$data['berkas'] = $buktiFisik;
			$data['deskripsi'] =$deskripsi;
			
			$this->pengabdian->tambahPengabdian($data);
			redirect(base_url('dashboard/Pengabdian/tampil'));
			}
		}

		public function update()
		{

			 $namefile = $_FILES['buktiFisik']['name'];
			 $name = basename($namefile,".pdf");
			 $file_ext = pathinfo($namefile, PATHINFO_EXTENSION);
			 $document = $name.".".$file_ext;
			 $config['upload_path'] = './assets/file/';
			 $config['allowed_types'] = 'pdf';
			 $config['file_name'] = $document;
			 $config['overwrite'] = true;
			 $config['max_size'] = 10240;

			 $this->load->library('upload',$config);
			 if ($this->upload->do_upload('buktiFisik')) {
			 	$upload_data =$this->upload->data();
			 	$filename = $upload_data['file_name'];
			 }

			$idKegiatan = $this->security->xss_clean($this->input->post('idKegiatan'));
			$uraianKegiatan = $this->security->xss_clean($this->input->post('uraianKegiatan'));
			$subKegiatan = $this->security->xss_clean($this->input->post('subKegiatan'));
			$tanggalKegiatan = $this->security->xss_clean(date_format(date_create($this->input->post('tanggalKegiatan')),'Y-m-d'));
			$satuanHasil = $this->security->xss_clean($this->input->post('satuanHasil'));
			$volumeKegiatan = $this->security->xss_clean($this->input->post('volumeKegiatan'));
			$angkaKredit = $this->security->xss_clean($this->input->post('angkaKredit'));
			$deskripsi = $this->security->xss_clean($this->input->post('deskripsi'));
			$buktiFisik = $filename;
			if ($filename == "") {
				$buktiFisik = $this->security->xss_clean($this->input->post('namaBerkas')); 
			}
			
			
			
			// $data['dosen_nip'] =""; dari session login
			// $data['id_bidang'] =""; dari session pencet navbar 
			$id= $idKegiatan;
			$data['sub_kegiatan'] = $subKegiatan;
			$data['id_uraian'] = $uraianKegiatan;
			$data['tanggal'] = $tanggalKegiatan;
			$data['satuan_hasil'] =$satuanHasil;
			$data['jumlah_volume'] =$volumeKegiatan;
			$data['angka_kredit'] =$angkaKredit;
			$data['berkas'] = $buktiFisik;
			$data['deskripsi'] =$deskripsi;
			
			$this->pengabdian->updatePengabdian($id,$data);
			redirect(base_url('dashboard/Pengabdian/tampil'));
		}

		public function hapus(){
			$id = $this->uri->segment('4');
			$this->pengabdian->hapus($id);
			redirect(base_url('dashboard/Pengabdian/tampil'));
		}

		public function file(){
			$name = $this->uri->segment(4);
			//$data = file_get_contents("./assets/file/".$name);
			$tofile= realpath("./assets/file/".$name);
			header('Content-Type: application/pdf');
			// header('Content-Disposition: inline; filename="' . $name . '"');
  	// 		header('Content-Transfer-Encoding: binary');
  	// 		header('Accept-Ranges: bytes');
			readfile($tofile);
			//force_download($name, $data);
		}

	}
  ?>
