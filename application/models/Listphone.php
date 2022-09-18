<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Listphone extends CI_Model
{
    private $_table = "list";
    public $name;
    public $no_phone;

    public function getData()
    {
        $this->db->from($this->_table);
        $this->db->order_by("name", "asc");
        return $this->db->get()->result();
    }

    public function rules() 
    {
        return [['field' => 'nama',
                 'label'=> 'Nama : ',
                 'rules' => 'required'],
                 
                ['field' => 'noTelp',
                 'label' => 'No. HP : ',
                 'rules' => 'required']
               ];
    }

    public function addNewData()
    {
        $post = $this->input->post();
        $this->name = ucwords($post["nama"]);
        $this->no_phone = $post["noTelp"];
        $this->db->insert($this->_table, $this);
        
    } 
}

?>