<?php defined('BASEPATH') or exit('No direct script access allowed');

class DokumenPendukung extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        guru(); // Pastikan fungsi ini ada untuk memeriksa hak akses
        $this->load->model('guru/DokumenPendukung_m');
    }

    public function index()
    {
        $data['row'] = $this->DokumenPendukung_m->get_dokumen();
        $this->template->load('guru/template', 'guru/dokumen_pendukung/index', $data);
    }

    public function upload()
    {
        $this->template->load('guru/template', 'guru/dokumen_pendukung/create');
    }

    public function proses_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|doc|docx|jpg|png';
        $config['max_size'] = 2048; // 2MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('guru/dokumenpendukung/upload');
        } else {
            $fileData = $this->upload->data();
            $data = [
                'file' => $fileData['file_name'],
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->DokumenPendukung_m->insert_dokumen($data);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Dokumen berhasil diunggah!');
                redirect('guru/dokumenpendukung');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengunggah dokumen!');
                redirect('guru/dokumenpendukung/upload');
            }
        }
    }

    public function edit($id)
    {
        $data['dokumen'] = $this->DokumenPendukung_m->get_dokumen_by_id($id);
        $this->template->load('guru/template', 'guru/dokumen_pendukung/edit', $data);
    }

    public function update($id)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|doc|docx|jpg|png';
        $config['max_size'] = 2048; // 2MB

        $this->load->library('upload', $config);
        $data = [];

        if ($this->upload->do_upload('file')) {
            $fileData = $this->upload->data();
            $data['file'] = $fileData['file_name'];
        }

        // Update created_at timestamp
        $data['created_at'] = date('Y-m-d H:i:s');

        // Update dokumen in the database
        $this->DokumenPendukung_m->update_dokumen($id, $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Dokumen berhasil diperbarui!');
            redirect('guru/dokumenpendukung');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui dokumen!');
            redirect('guru/dokumenpendukung/edit/' . $id);
        }
    }

    public function show($id)
    {
        $data['dokumen'] = $this->DokumenPendukung_m->get_dokumen_by_id($id);
        $this->template->load('guru/template', 'guru/dokumen_pendukung/show', $data);
    }

    public function delete($id)
    {
        $this->DokumenPendukung_m->delete_dokumen($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Penghapusan data dokumen berhasil!');
            redirect('guru/dokumenpendukung');
        } else {
            $this->session->set_flashdata('error', 'Penghapusan data dokumen gagal!');
            redirect('guru/dokumenpendukung');
        }
    }
}
