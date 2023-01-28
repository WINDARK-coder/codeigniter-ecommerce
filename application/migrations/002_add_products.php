<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_products extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 30,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'description' => array(
                'type' => 'TEXT',
            ),
            'category_id' => array(
                'type' => 'INT',
                'constraint' => '5',
            ),
            'brand_id' => array(
                'type' => 'INT',
                'constraint' => '5',
            ),
            'quantity' => array(
                'type' => 'INT',
                'constraint' => '10',
            ),
            'price' => array(
                'type' => 'DOUBLE',
                'constraint' => '10,2',
            ),
            'sales_price' => array(
                'type' => 'DOUBLE',
                'constraint' => '10,2',
            ),
            'status' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
            ),
            'created_at datetime default current_timestamp',
            'update_at datetime default current_timestamp on update current_timestamp'

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('products');
    }

    public function down()
    {
        $this->dbforge->drop_table('products');
    }
}
