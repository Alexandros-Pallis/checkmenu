<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ItemTag extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'item_tag_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'item_tag_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'unique'     => true
            ],
            'item_tag_slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'unique'     => true
            ]
        ]);
        $this->forge->addKey('item_tag_id', true, true);
        $this->forge->createTable('item_tag');
    }

    public function down()
    {
        $this->forge->dropTable('item_tag');
    }
}
