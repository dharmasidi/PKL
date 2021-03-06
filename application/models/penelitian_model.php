<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Penelitian_model extends CI_model
    {
        public function get_all()
        {
            $all = $this->db->select('k.*, date_format(tanggal, "%d %M %Y") as tanggal, u.nama_uraian as uraian')
                        ->from('kegiatan as k')
                        ->join('uraian as u', 'k.id_uraian = u.id_uraian')
                        ->get();
            return $all->result();
        }

        public function uraian_kegiatan()
        {
            $uraian = $this->db->select('*')
                               ->from('uraian')
                               ->where('id_bidang', '2')
                               ->get();
            return $uraian->result();
        }

        public function tambahPenelitian($data)
        {
            $this->db->insert('kegiatan', $data);
            $this->session->set_flashdata('msg_alert', 'Data berhasil ditambahkan');
        }

        public function editPenelitian($id)
        {
            $data = $this->db->select('k.*, date_format(tanggal,"%m %d %Y"), u.nama_uraian as uraian')
                        ->from('kegiatan as k')
                        ->join('uraian as u', 'k.id_uraian = u.id_uraian')
                        ->where('id_kegiatan', $id)
                        ->get();
            return $data->row();
        }

        public function updatePenelitian($id, $data)
        {
            $this->db->where('id_kegiatan', $id)
                     ->update('kegiatan', $data);
            $this->session->set_flashdata('msg_alert', 'Data berhasil diupdate');
        }

        public function hapus($id)
        {
            $this->db->where('id_kegiatan', $id)
                 ->delete('kegiatan');
            $this->session->set_flashdata('msg_alert', 'Data  berhasil dihapus');
        }
    }
