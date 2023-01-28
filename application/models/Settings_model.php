<?php


class Settings_model extends CI_Model
{
    public $key;
    public $value;
    public $phone;
    public $status;

    protected $table = 'settings';

    public function insert($data)
    {

        $this->db->insert($this->table, $data);

        return $this->db->insert_id();
    }

    public function select_all()
    {
        // $this->db->where('status', 1);
        $query = $this->db->get($this->table);

        return $query->result();
    }
    public function select_data($key)
    {
        $this->db->select('value');
        $this->db->where('status', 1);
        $this->db->where('key', $key);
        $query = $this->db->get($this->table);
        return $query->row()->value;
    }
    public function select_front()
    {
        $this->db->where('status', 2);
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
