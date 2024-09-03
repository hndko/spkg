<?php defined('BASEPATH') or exit('No direct script access allowed');

class DokumenPendukung_m extends CI_Model
{
    // Mengambil semua dokumen
    public function get_dokumen()
    {
        // Menggunakan query builder untuk mendapatkan semua dokumen
        $query = $this->db->get('tbl_dokumen_pendukung');
        return $query->result(); // Mengembalikan hasil sebagai array objek
    }

    // Mengambil dokumen berdasarkan ID
    public function get_dokumen_by_id($id)
    {
        // Menggunakan query builder untuk mendapatkan dokumen berdasarkan ID
        $query = $this->db->get_where('tbl_dokumen_pendukung', ['id' => $id]);
        return $query->row(); // Mengembalikan hasil sebagai objek
    }

    // Menyisipkan dokumen baru
    public function insert_dokumen($data)
    {
        return $this->db->insert('tbl_dokumen_pendukung', $data); // Mengembalikan true/false
    }

    // Memperbarui dokumen berdasarkan ID
    public function update_dokumen($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tbl_dokumen_pendukung', $data); // Mengembalikan true/false
    }

    // Menghapus dokumen berdasarkan ID
    public function delete_dokumen($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tbl_dokumen_pendukung'); // Mengembalikan true/false
    }
}
