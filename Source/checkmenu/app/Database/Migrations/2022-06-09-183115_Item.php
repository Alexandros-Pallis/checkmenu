<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Item extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'item_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'item_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
            ],
            'item_price' => [
                'type'       => 'DECIMAL',
                'constraint' => 5,
            ],
            'item_description' => [
                'type' => 'TEXT',
                'null' => true
            ]
        ]);
        $this->forge->addForeignKey('tag_id', 'item_tag', 'item_tag_id', 'CASCADE', 'CASCADE');
        $this->forge->addKey('item_id', true, true);
        $this->forge->createTable('item');
    }

    public function down()
    {
        $this->forge->dropTable('item');
    }
}
