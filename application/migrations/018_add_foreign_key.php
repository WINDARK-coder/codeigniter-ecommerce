<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_foreign_key extends CI_Migration
{

    public function up()
    {
        // Products
        $this->db->query('ALTER TABLE products ADD FOREIGN KEY (brand_id) REFERENCES brand(id);');
        $this->db->query('ALTER TABLE products ADD FOREIGN KEY (category_id) REFERENCES categories(id);');
        // Images
        $this->db->query('ALTER TABLE images ADD FOREIGN KEY (product_id) REFERENCES products(id);');
        // Product image
        $this->db->query('ALTER TABLE product_images ADD FOREIGN KEY (product_id) REFERENCES products(id);');
        $this->db->query('ALTER TABLE product_images ADD FOREIGN KEY (image_id) REFERENCES 	images(id);');
        // Product category
        $this->db->query('ALTER TABLE product_categories ADD FOREIGN KEY (product_id) REFERENCES 	products(id);');
        $this->db->query('ALTER TABLE product_categories ADD FOREIGN KEY (category_id) REFERENCES 	categories(id);');
        // Orders
        $this->db->query('ALTER TABLE orders ADD FOREIGN KEY (user_id) REFERENCES users(id);');
        $this->db->query('ALTER TABLE orders ADD FOREIGN KEY (payment_method) REFERENCES payment_methods(id);');
        $this->db->query('ALTER TABLE orders ADD FOREIGN KEY (delivery_method ) REFERENCES delivery_methods(id);');
        $this->db->query('ALTER TABLE orders ADD FOREIGN KEY (status_id) REFERENCES order_status(id);');
        // Order product
        $this->db->query('ALTER TABLE order_products ADD FOREIGN KEY (order_id) REFERENCES orders(id);');
        $this->db->query('ALTER TABLE order_products ADD FOREIGN KEY (product_id) REFERENCES products(id);');
        // 


    }
}
