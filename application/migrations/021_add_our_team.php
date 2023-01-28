<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_our_team extends CI_Migration
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
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'fullname' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'profession' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'about' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'rss' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'facebook' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'twitter' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'google' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'status' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
            ),
            'created_at datetime default current_timestamp',
            'update_at datetime default current_timestamp on update current_timestamp'
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('our_team');
    }

    public function down()
    {
        $this->dbforge->drop_table('our_team');
    }
}