<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModels extends CI_Model
{
    protected $table;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('bcrypt');
        $this->table = 'user';
    }
    public function cek_login($mail, $pass)
    {
        $this->db->where('email',$mail);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            if ($this->bcrypt->check_password($pass, $result['password'])) {
                return 1;
            } else {
                return 2;
            }
        } else {
            return 3;
        }
    }
    public function cek_user(){
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result();
        }else{
            return false;
        }
    }
}
