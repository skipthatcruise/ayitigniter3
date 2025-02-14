<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        $this -> forge -> addFIeld([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'email' =>[
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
                'null'       => false,
            ],

            'password' =>[
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
        ]);

        $this -> forge -> addKey('id', true);
        $this -> forge -> createTable('admins');
    }

    public function down()
    {
        $this -> forge -> dropTable('admins');
    }
}
