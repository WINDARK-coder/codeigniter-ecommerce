<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_brands extends CI_Migration
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
            'history' => array(
                'type' => 'TEXT',
            ),
            'logo' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'status' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('brands');
    }

    public function down()
    {
        $this->dbforge->drop_table('brands');
    }
}
