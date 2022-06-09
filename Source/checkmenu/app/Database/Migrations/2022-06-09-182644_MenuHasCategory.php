<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuHasCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ]
        ]);

        $this->forge->addForeignKey('menu_id', 'menu', 'menu_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('menu_category_id', 'menu_category', 'menu_category_id', 'CASCADE', 'CASCADE');
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('menu_has_category');
    }

    public function down()
    {
        $this->forge->dropTable('menu_has_category');
    }
}
