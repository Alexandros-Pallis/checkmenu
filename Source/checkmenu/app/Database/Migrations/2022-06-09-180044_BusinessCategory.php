<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BusinessCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'business_category_id' => [
                'type'           => 'INT',
                'contsraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'business_category_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true
            ],
            'business_category_slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true
            ],
        ]);
        $this->forge->addKey('business_category_id', true, true);
        $this->forge->createTable('business_category');
    }

    public function down()
    {
        $this->forge->dropTable('business_category');
    }
}
