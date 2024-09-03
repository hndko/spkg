<?php defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function index()
    {
        $post = $this->input->post(null, true);
        if (isset($post['cek'])) {
            $this->load->model('landing_m');
            if ($this->landing_m->get_guru($post['nuptk'])->num_rows() > 0) {
                redirect('info/' . $post['nuptk'] . '#hasil');
            } else {
                $this->session->set_flashdata('unknow', 'nuptk Tidak terdaftar pada sistem!');
                redirect('');
            }
        } else {
            $this->load->view('landing/index');
        }
    }

    public function info($nuptk)
    {
        $this->load->model('leader/penilaian_m');
        $this->load->model('landing_m');
        $temp  = $this->landing_m->get_guru($nuptk)->row();
        $data = [
            'kriteria' => $this->penilaian_m->get_kriteria(),
            'guru' => $temp,
            'row' => $this->penilaian_m->get_nilai_byguru($temp->id_guru),
        ];
        $this->load->view('landing/index', $data);
    }
}
