<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMenuTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'menu_id' => [
                'type'           => 'int',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'business_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'menu_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 30
            ],
            'menu_slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 30
            ]
        ]);
        $this->forge->addPrimaryKey('menu_id');
        $this->forge->addForeignKey('business_id', 'business', 'business_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('menu');
    }

    public function down()
    {
        $this->forge->dropTable('menu');
    }
}
