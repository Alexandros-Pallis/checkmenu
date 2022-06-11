<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBusinessHasAddressHasCity extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'business_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'address_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'city_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ]
        ]);
        $this->forge->addForeignKey('business_id', 'business', 'business_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('address_id', 'address', 'address_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('city_id', 'city', 'city_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('business_has_address_has_city');
    }

    public function down()
    {
        $this->forge->dropTable('business_has_address_has_city');
    }
}
