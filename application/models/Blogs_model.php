<?php


class Blogs_model extends CI_Model
{
    public $id;
    public $title;
    public $description;
    public $content;
    public $image;
    public $post_by;
    public $status;
    public $created_at;

    protected $table = 'blogs';

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

    public function new_blogs()
    {
        $this->db->order_by("created_at", "desc");
        $this->db->limit(2);
        $query = $this->db->get($this->table);
        return $query->result();
    }
}
