<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RegisteredStudentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'fullname' =>[
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],

            'phonenumber' =>[
                'type'       => 'VARCHAR',
                'constraint' => '11',
                'null'       => false,
            ],

            'address' =>[
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],

            'email' =>[
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
                'null'       => false,
            ],

            'gender' =>[
                'type'       => 'ENUM',
                'constraint' => ['male', 'female'],
                'null'       => false,               
            ],

            'literacy' =>[
                'type'       => 'ENUM',
                'constraint' => ['yes', 'no'],
                'null'       => false,               
            ],

            'guardian_phone' =>[
                'type'       => 'VARCHAR',
                'constraint' => '11',
                'null'       => false,
            ],

            'guardian_address' =>[
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],

            'story' =>[
                'type'       => 'TEXT',
                'null'       => 'false',
            ],

            'registered_date' =>[
                'type'       => 'DATETIME',
                'null'       => true,
            ],

            'image' =>[
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],

            'status' =>[
                'type'       => 'VARCHAR',
                'default'    => 'pending',
                'constraint' => 255,
                'null'       => false,
            ],


        ]);

        $this -> forge -> addKey('id', true);
        $this -> forge -> createTable('registered_students');
    }

    public function down()
    {
        $this -> forge -> dropTable('registered_students');
    }
}
