<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropMenuTable extends Migration
{
    public function up()
    {
        $this->forge->dropTable('menu', true);
    }

    public function down()
    {
        $this->forge->createTable('menu', true);
    }
}
