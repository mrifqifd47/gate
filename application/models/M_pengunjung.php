<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pengunjung extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_pengunjung');   
        $this->db->order_by('id_pengunjung', 'desc');      
        return $this->db->get()->result();
    }
      

    public function add($data, $tbl_pengunjung)
    {
        $this->db->insert($tbl_pengunjung, $data);
        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan!');
    }
    function pengunjung_edit($where, $data, $tbl_pengunjung)
    {
        $this->db->where($where);
        $this->db->update($tbl_pengunjung, $data);
        $this->session->set_flashdata('pesan', 'Data berhasil diubah!');
    }
    public function delete($data)
    {
        
        $this->db->where('id_pengunjung', $data['id_pengunjung']);
        $this->db->delete('tbl_pengunjung', $data);
    }
    public function detail_kartu($id_pengunjung)
    {
        $this->db->select('*');
        $this->db->from('tbl_pengunjung');
        $this->db->where('id_pengunjung', $id_pengunjung);
        return $this->db->get()->row();
    }
 
   
}
