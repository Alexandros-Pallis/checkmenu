<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Address extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'address_id' => [
                'type'           => 'INT',
                'contsraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'address_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true
            ],
            'address_number' => [
                'type'       => 'INT',
                'constraint' => 3,
                'unsigned'   => true
            ],
            'postal_code' => [
                'type'       => 'INT',
                'constraint' => 5
            ]
        ]);
        $this->forge->addKey('address_id', true, true);
        $this->forge->createTable('address');
    }

    public function down()
    {
        $this->forge->dropTable('address');
    }
}
