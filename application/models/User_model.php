<?php

class User_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function get_last_ten_entries()
        {
                $query = $this->db->get('users', 10);
                return $query->result();
        }

        public function insert($table,$data){
                $this->db->insert($table, $data);
                $insert_id = $this->db->insert_id();
                 return  $insert_id; 
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('users', $this, array('id' => $_POST['id']));
        }
        public function mail_exists($key)
        {
            $this->db->where('email',$key);
            $query = $this->db->get('users');
            //echo $this->db->last_query();exit;
                if ($query->num_rows() > 0){
                     return false;
                }
                else{
                        return true;
                }
        }
        public function phone_exists($key){
                $this->db->where('phone_no',$key);
            $query = $this->db->get('users');
            //echo $this->db->last_query();exit;
                if ($query->num_rows() > 0){
                     return false;
                }
                else{
                        return true;
                }
        }
        

}