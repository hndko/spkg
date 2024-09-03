<?php defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        admin();
        $this->load->model('admin/users_m');
    }

    public function index()
    {
        $data['row'] = $this->users_m->get_user();
        $this->template->load('admin/template', 'admin/users/index', $data);
    }

    public function add()
    {
        $this->template->load('admin/template', 'admin/users/create');
    }

    public function create()
    {
        // Prepare data to insert
        $data = [
            'id_user' => random_string('numeric', 17),
            'username_user' => $this->input->post('username_user'),
            'password_user' => sha1($this->input->post('password_user')),
            'level_user' => $this->input->post('level_user'),
            'status_user' => $this->input->post('status_user')
        ];

        // Insert new user data in the database
        $this->users_m->create_user($data);

        // Set a flash message for success
        $this->session->set_flashdata('success', 'Pengguna baru berhasil dibuat.');

        // Redirect back to the users page
        redirect('admin/users');
    }

    public function edit()
    {
        $data['row'] = $this->users_m->get_user($this->uri->segment(4));
        $this->template->load('admin/template', 'admin/users/edit', $data);
    }

    public function update()
    {
        // Get user ID from POST data
        $id = $this->input->post('id');

        // Prepare data to update
        $data = [
            'username_user' => $this->input->post('username_user'),
            'level_user' => $this->input->post('level_user'),
            'status_user' => $this->input->post('status_user')
        ];

        // Check if the password field is not empty, then hash with SHA-1 and include it in the update
        if ($this->input->post('password_user')) {
            $data['password_user'] = sha1($this->input->post('password_user'));
        }

        // Update user data in the database
        $this->users_m->update_user($id, $data);

        // Set a flash message for success
        $this->session->set_flashdata('success', 'Data pengguna updated successfully.');

        // Redirect back to the users page
        redirect('admin/users');
    }
}
