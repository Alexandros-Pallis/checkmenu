<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class City extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'city_id' => [
                'type'           => 'INT',
                'contsraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'city_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'unique'     => true
            ],
            'city_slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('city_id', true, true);
        $this->forge->createTable('city');
    }

    public function down()
    {
        $this->forge->dropTable('city');
    }
}
