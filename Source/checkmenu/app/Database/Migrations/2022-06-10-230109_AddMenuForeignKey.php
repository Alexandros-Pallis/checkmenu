<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMenuForeignKey extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'business_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true
            ]
        ]);
        $this->forge->addForeignKey('business_id', 'business', 'business_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('menu', true);
    }

    public function down()
    {
        $this->forge->dropForeignKey('menu', 'business_id');
        $this->forge->dropKey('menu', 'business_id');
        $this->forge->dropTable('menu');
    }
}
