<?php


class Payment_methods_model extends CI_Model
{
    public $title;
    public $image;
    public $order;
    public $status;

    protected $table = 'payment_methods';

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
