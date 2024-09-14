<?php defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/users_m');
        $this->load->model('leader/penilaian_m');
        guru();
    }

    public function index()
    {
        $user = $this->users_m->get_user($this->session->userdata('user_id'));
        $data = [
            'user' => $user->username_user,
        ];

        $this->template->load('guru/template', 'guru/laporan/index', $data);
    }

    public function cetak($id = null)
    {
        $post = $this->input->post(null, true);
        if (isset($post['cetak'])) {
            $id_guru = $post['id'];
            $data = [
                'kriteria' => $this->penilaian_m->get_kriteria(),
                'row' => $this->penilaian_m->get_nilai_byguru($id_guru),
            ];
            $mpdf = new \Mpdf\Mpdf([
                'mode' => 'utf-8',
                'format' => 'A4',
                'orientation' => 'P'
            ]);

            $html = $this->load->view('guru/laporan/guru', $data, TRUE);
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        } else if ($id) {
            $data = [
                'kriteria' => $this->penilaian_m->get_kriteria(),
                'row' => $this->penilaian_m->get_nilai_byguru($id),
            ];
            $mpdf = new \Mpdf\Mpdf([
                'mode' => 'utf-8',
                'format' => 'A4',
                'orientation' => 'P'
            ]);

            $html = $this->load->view('guru/laporan/guru', $data, TRUE);
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        } else {
            $data = [
                'kriteria' => $this->penilaian_m->get_kriteria(),
                'row' => $this->penilaian_m->get_nilai(),
            ];
            $mpdf = new \Mpdf\Mpdf([
                'mode' => 'utf-8',
                'format' => 'A4',
                'orientation' => 'L'
            ]);

            $html = $this->load->view('guru/laporan/cetak', $data, TRUE);
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }
    }
}
