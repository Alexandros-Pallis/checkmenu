<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Menu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'menu_id' => [
                'type'           => 'INT',
                'contsraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'menu_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'unique'     => true
            ],
            'menu_slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'unique'     => true
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ],
        ]);
        $this->forge->addForeignKey('business_id', 'business', 'business_id', 'CASCADE', 'CASCADE');
        $this->forge->addKey('menu_id', true, true);
        $this->forge->createTable('menu');
    }

    public function down()
    {
        $this->forge->dropTable('menu');
    }
}
