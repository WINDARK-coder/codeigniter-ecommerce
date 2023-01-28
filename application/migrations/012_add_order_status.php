<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_order_status extends CI_Migration
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
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'status' => array(
                'type' => 'INT',
                'constraint' => '1',
            ),
            'created_at datetime default current_timestamp',
            'update_at datetime default current_timestamp on update current_timestamp'
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('order_status');
    }

    public function down()
    {
        $this->dbforge->drop_table('order_status');
    }
}
