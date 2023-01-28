<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_pages extends CI_Migration
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
                'constraint' => '255',
            ),
            'description' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'content' => array(
                'type' => 'TEXT',
            ),
            'status' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
            ),
            'created_at datetime default current_timestamp',
            'update_at datetime default current_timestamp on update current_timestamp'
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('pages');
    }

    public function down()
    {
        $this->dbforge->drop_table('pages');
    }
}
