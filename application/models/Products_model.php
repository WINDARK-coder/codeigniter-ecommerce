<?php


class Products_model extends CI_Model
{
    public $title;
    public $description;
    public $brand_id;
    public $quantity;
    public $price;
    public $sales_price;
    public $status;

    protected $table = 'products';

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

    public function select_by_date()
    {
        $this->db->select('p.title,p.sales_price,p.id,p.price,i.path');
        $this->db->from('products p');
        $this->db->join('images i ', 'p.id=i.product_id', 'Left');
        $this->db->where('p.status', 1);
        $this->db->order_by("p.created_at", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    public function select_by_date_limit4()
    {
        $this->db->select('p.title,p.sales_price,p.id,p.price,i.path');
        $this->db->from('products p');
        $this->db->join('images i ', 'p.id=i.product_id', 'Left');
        $this->db->where('p.status', 1);
        $this->db->order_by("p.created_at", "desc");
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }

    public function select_by_quan()
    {
        $this->db->select('p.title,p.sales_price,p.id,p.price,i.path');
        $this->db->from('products p');
        $this->db->join('images i ', 'p.id=i.product_id', 'Left');
        $this->db->where('p.quantity >', 5);
        $this->db->order_by("p.created_at", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function select_by_price_limit2()
    {
        $this->db->select('p.title,p.sales_price,p.id,p.price,i.path');
        $this->db->from('products p');
        $this->db->join('images i ', 'p.id=i.product_id', 'Left');
        $this->db->where('p.price >', 1000);
        $this->db->order_by("p.created_at", "desc");
        $this->db->limit(2);
        $query = $this->db->get();
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

    public function selectBrandId($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('brands');

        return $query->row();
    }

    public function join_app()
    {
        $this->db->select('p.title,p.sales_price,p.id,p.price,i.path');
        $this->db->from('products p');
        $this->db->join('images i ', 'p.id=i.product_id', 'Left');
        $this->db->where('category_id', 20);
        $query = $this->db->get();
        return $query->result();
    }
    public function join_cul()
    {
        $this->db->select('p.title,p.sales_price,p.id,p.price,i.path');
        $this->db->from('products p');
        $this->db->join('images i ', 'p.id=i.product_id', 'Left');
        $this->db->where('category_id', 23);
        $query = $this->db->get();
        return $query->result();
    }

    public function join_elect()
    {
        $this->db->select('p.title,p.sales_price,p.id,p.price,i.path');
        $this->db->from('products p');
        $this->db->join('images i ', 'p.id=i.product_id', 'Left');
        $this->db->where('category_id', 26);
        $query = $this->db->get();
        return $query->result();
    }

    public function select_data($id)
    {
        $this->db->select('title');
        $this->db->where('id', $id);
        $query = $this->db->get('categories');
        return $query->row('title');
    }

    public function joinDataById($id)
    {
        $this->db->select('p.*,i.path');
        $this->db->from('products p');
        $this->db->join('images i ', 'p.id=i.product_id', 'Left');
        $this->db->where('product_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // public function joinDataByIdBrand($id)
    // {
    //     $this->db->select('p.id,b.*');
    //     $this->db->from('products p');
    //     $this->db->join('brands b ', 'p.brand_id=b.id', 'Left');
    //     $this->db->where('brand_id', $id);
    //     $query = $this->db->get();
    //     return $query->row();
    // }

    public function select_data_brand($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('brands');
        return $query->row();
    }

    public function select_by_category_limit4($category_id)
    {
        $this->db->select('p.title,p.sales_price,p.id,p.price,i.path');
        $this->db->from('products p');
        $this->db->join('images i ', 'p.id=i.product_id', 'Left');
        $this->db->where('p.status', 1);
        $this->db->where('p.category_id', $category_id);
        $this->db->order_by("p.created_at", "desc");
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }
}
