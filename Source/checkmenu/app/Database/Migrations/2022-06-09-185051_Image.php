<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Image extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'image_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'image_entity' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'image_entity_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unique' => false
            ]
        ]);
        $this->forge->addKey('image_id', true, true);
        $this->forge->createTable('image');
    }

    public function down()
    {
        $this->forge->dropTable('image');
    }
}
