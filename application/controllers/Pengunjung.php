<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengunjung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       
 
        $this->load->model('m_pengunjung');
  
  
    }
 
// Pengunjung
 
    public function index()
    {
        $data['title'] = 'Manajemen Pengunjung';
        $data['title_content'] = 'Manajemen Pengunjung';
        $data['pengunjung'] = $this->m_pengunjung->lists();
     

        $this->load->view('dash/templates/header', $data, FALSE);
        $this->load->view('dash/templates/topbar', $data, FALSE);
        $this->load->view('dash/templates/sidebar', $data, FALSE);
        $this->load->view('dash/pengunjung/index', $data, FALSE);
        $this->load->view('dash/templates/footer');
    }
    public function pengunjung_add()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_kartu', 'Kartu', 'trim|is_unique[tbl_pengunjung.no_kartu]', [
            'is_unique' => 'kartu telah terdaftar'
        ]);

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Profil Sekolah';
            $data['title_content'] = 'Profil Sekolah';
            
          
        } else{
                $data = array(
                    'no_kartu' => $this->input->post('no_kartu', null),
                    'status' => 1,
                    'nama' => $this->input->post('nama'),
                    'no_induk' => $this->input->post('no_induk'),
                    'date_add' => date('Y-m-d H:i:s'),
                    'prodi' => $this->input->post('prodi'),
                    'kategori' => $this->input->post('kategori')

                );
                $this->m_pengunjung->add($data, 'tbl_pengunjung');
                $this->session->set_flashdata('add', 'dData berhasil ditambahkan');
                redirect('');
            }
       
        $data = array(
            'title' => 'Tambah Pengunjung',
            'title_content' => 'Tambah Pengunjung',
        );
     

        $this->load->view('dash/templates/header', $data, FALSE);
        $this->load->view('dash/templates/topbar', $data, FALSE);
        $this->load->view('dash/templates/sidebar', $data, FALSE);
        $this->load->view('dash/pengunjung/add', $data, FALSE);
        $this->load->view('dash/templates/footer');
    }
    public function pengunjung_edit($id_pengunjung)
    {
       
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_induk', 'Nama', 'required');
        $this->form_validation->set_rules('prodi', 'Nama', 'required');
        $this->form_validation->set_rules('kategori', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            
      
            $data['pengunjung'] = $this->m_pengunjung->detail_kartu($id_pengunjung); 

            $this->load->view('dash/templates/header', $data, FALSE);
            $this->load->view('dash/templates/topbar', $data, FALSE);
            $this->load->view('dash/templates/sidebar', $data, FALSE);
            $this->load->view('dash/pengunjung/edit', $data, FALSE);
            $this->load->view('dash/templates/footer');
        } else {
             $data = array(
                'no_kartu' => $this->input->post('no_kartu', null),
                'nama' => $this->input->post('nama',true),
                'no_induk' => $this->input->post('no_induk',true),
                'prodi' => $this->input->post('prodi',true),
                'kategori' => $this->input->post('kategori',true)
    
            );
            $where = array(
                'id_pengunjung' => $id_pengunjung
            );
            $this->m_pengunjung->pengunjung_edit($where, $data, 'tbl_pengunjung');
            $this->session->set_flashdata('edit', 'Data berhasil diubah');
            redirect('');
        }
    }
    public function pengunjung_delete($id_pengunjung)
    {
        $this->session->set_flashdata('delete', 'Data berhasil ditambahkan');
        $where = array('id_pengunjung' => $id_pengunjung);
        $this->m_pengunjung->delete($where, 'tbl_pengunjung');
        redirect('pengunjung');
    }
}