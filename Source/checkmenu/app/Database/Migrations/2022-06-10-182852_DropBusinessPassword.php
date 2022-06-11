<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropBusinessPassword extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('business', 'business_password');
    }

    public function down()
    {
        $fields = [
            'business_password' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ]
        ];
        $this->forge->addColumn('business', $fields);
    }
}
