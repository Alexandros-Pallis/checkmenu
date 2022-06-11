<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuHasCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'menu_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true
            ],
            'category_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true
            ]
        ]);
        $this->forge->addForeignKey('menu_id', 'menu', 'menu_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('category_id', 'menu_category', 'menu_category_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('menu_has_category', true);
    }

    public function down()
    {
        $this->forge->dropforeignkey('menu_has_category', 'menu_id');
        $this->forge->dropforeignkey('menu_has_category', 'category_id');
        $this->forge->dropTable('menu_has_category');
    }
}
