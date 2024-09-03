<?php defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        guru();
        $this->load->model('admin/users_m');
    }

    public function index()
    {
        $data['row'] = $this->users_m->get_user($this->session->userdata('user_id'));
        $this->template->load('guru/template', 'guru/profile/index', $data);
    }

    public function update()
    {
        // Get user ID from POST data
        $id = $this->input->post('id');

        // Prepare data to update
        $data = [
            'username_user' => $this->input->post('username_user')
        ];

        // Check if the password field is not empty, then hash with SHA-1 and include it in the update
        if ($this->input->post('password_user')) {
            $data['password_user'] = sha1($this->input->post('password_user'));
        }

        // Update user data in the database
        $this->users_m->update_user($id, $data);

        // Set a flash message for success
        $this->session->set_flashdata('success', 'Profile updated successfully.');

        // Redirect back to the profile page
        redirect('guru/profile');
    }
}
