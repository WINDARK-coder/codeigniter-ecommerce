<?php

class Our_team_model extends CI_Model
{
    public $fullname;
    public $image;
    public $profession;
    public $about;
    public $rss;
    public $facebook;
    public $twitter;
    public $google;
    public $status;

    protected $table = 'our_team';

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function select_all()
    {
        $this->db->where('status', 1);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function select_last_item()
    {
        $this->db->where('status', 1);
        $this->db->order_by('created_at', 'desc');
        $this->db->limit(1);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function selectDataById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
    public function delete($id)
    {
        $this->db->delete($this->table, array('id' => $id));
    }
}
