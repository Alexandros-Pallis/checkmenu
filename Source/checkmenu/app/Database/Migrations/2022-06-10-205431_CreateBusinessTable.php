<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBusinessTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'business_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'business_owner' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'business_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 40,
            ],
            'business_slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 40
            ],
        ]);
        $this->forge->addForeignKey('business_owner', 'users', 'id');
        $this->forge->addKey('business_id', true, true);
        $this->forge->createTable('business', true);
    }

    public function down()
    {
        $this->forge->dropForeignKey('business', 'business_owner');
        $this->forge->dropKey('business', 'business_id');
        $this->forge->dropTable('business', true);
    }
}
