<?php
 class m_user extends CI_Model
 {
     private $table = "user";
     public function cek($username, $password)
     {
         $this->db->where("username", $username);
         $this->db->where("password", $password);
         return $this->db->get("user");
     }
     public function semua()
     {
         return $this->db->get("user");
     }
     public function cekKode($kode)
     {
         $this->db->where("username", $kode);
         return $this->db->get("user");
     }
     public function cekId($kode)
     {
         $this->db->where("u_id", $kode);
         return $this->db->get("user");
     }
     public function getLoginData($usr, $psw)
     {
         $u = mysql_real_escape_string($usr);
         $p = md5(mysql_real_escape_string($psw));
         $q_cek_login = $this->db->get_where('users', array('username' => $u, 'password' => $p));
         if (count($q_cek_login->result()) > 0) {
             foreach ($q_cek_login->result() as $qck) {
                 foreach ($q_cek_login->result() as $qad) {
                     $sess_data['logged_in'] = 'aingLoginWebYeuh';
                     $sess_data['id'] = $qad->u_id;
                     $sess_data['username'] = $qad->u_name;
                     $sess_data['nama'] = $qad->nama;
                     $sess_data['group'] = $qad->group;
                     $sess_data['rid'] = $qad->rid;
                     $this->session->set_userdata($sess_data);
                 }
                 redirect('dashboard');
             }
         } else {
             $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
             header('location:' . base_url() . 'login');
         }
     }
 }
