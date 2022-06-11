<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropBusinessTable extends Migration
{
    public function up()
    {
        $this->forge->dropTable('business', true);
    }

    public function down()
    {
        $this->forge->createTable('business', true);
    }
}
