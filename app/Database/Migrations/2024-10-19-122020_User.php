<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;
class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id"=>[
                "type"=>"INT",
                "constraint"=>11,
                "auto_increment"=> True
            ],

            "firstname"=>[
                "type"=>"VARCHAR",
                "constraint"=> 50,
            ],

            "lastname"=>[
                "type"=>"VARCHAR",
                "constraint"=> 50,
            ],

            "emailaddress"=>[
                "type"=>"VARCHAR",
                "constraint"=> 50,
            ],

            "password"=>[
                "type"=>"VARCHAR",
                "constraint"=> 50,
            ],
            "created_at"=>["type"=>"Datetime",
                "default"=>new RawSql("CURRENT_TIMESTAMP")
            ]

            ]);

            $this->forge->addkey("id", True);
            $this->forge->CreateTable("users",True);

    }

    public function down()
    {
        $this->forge->dropTable("users",True);

    }
}
