<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_product_categories extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'product_id' => array(
                'type' => 'INT',
                'constraint' => '5',
            ),
            'category_id' => array(
                'type' => 'INT',
                'constraint' => '5',
            ),
            'created_at datetime default current_timestamp',
            'update_at datetime default current_timestamp on update current_timestamp'
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('product_categories');
    }

    public function down()
    {
        $this->dbforge->drop_table('product_categories');
    }
}
