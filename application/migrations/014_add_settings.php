<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_settings extends CI_Migration
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
            'key' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'value' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'status' => array(
                'type' => 'INT',
                'constraint' => '2',
            )

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('settings');
    }

    public function down()
    {
        $this->dbforge->drop_table('settings');
    }
}
