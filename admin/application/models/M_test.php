<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_test extends CI_Model
{
    function add($post_data)
    {
        $this->db->insert('surat_keluar', $post_data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
}
