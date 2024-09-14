<?php defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        guru();
        $this->load->model('admin/users_m');
        $this->load->model('admin/guru_m');
        $this->load->model('leader/penilaian_m');
    }

    public function index()
    {
        $user = $this->users_m->get_user($this->session->userdata('user_id'));
        $guru = $this->guru_m->get_guru_nuptk($user->username_user);

        // Check if $guru is not empty
        if ($guru->num_rows() > 0) {
            $data = [
                'guru' => $guru
            ];
        } else {
            $data = [
                'guru' => null
            ];
        }
        $this->template->load('guru/template', 'guru/penilaian/index', $data);
    }

    public function rekapitulasi()
    {
        $data = [
            'kriteria' => $this->penilaian_m->get_kriteria(),
            'row' => $this->penilaian_m->get_nilai(),
        ];

        $this->template->load('guru/template', 'guru/penilaian/rekap', $data);
    }

    public function assesment($id)
    {
        $data = [
            'guru' => $this->guru_m->get_guru($id)->row(),
        ];
        $this->template->load('guru/template', 'guru/penilaian/form', $data);
    }

    function proses()
    {
        $post = $this->input->post(null, true);
        if (isset($post['nilai'])) {
            $post['id'] = random_string('alnum', 40);
            $hasil = metode_saw($post);
            $post['val_all'] = $hasil['val_all'];
            $post['val_hasil'] = $hasil['val_hasil'];
            $this->penilaian_m->set_ass($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('succes', 'Penilaian Kinerja Guru Berhasil!');
                redirect('guru/penilaian');
            } else {
                $this->session->set_flashdata('error', 'Penilaian Kinerja Guru Gagal!, <br> Sistem Error!');
                redirect('guru/penilaian');
            }
        } else {
            redirect('guru/penilaian');
        }
    }
}
