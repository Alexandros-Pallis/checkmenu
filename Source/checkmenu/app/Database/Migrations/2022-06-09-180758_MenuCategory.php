<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'menu_category_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'menu_category_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
            ],
            'menu_category_slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
            ]
        ]);
        $this->forge->addKey('menu_category_id', true, true);
        $this->forge->createTable('menu_category');
    }

    public function down()
    {
        $this->forge->dropTable('menu_category');
    }
}
