<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Business extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'business_id' => [
                'type'           => 'INT',
                'contsraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'business_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'unique'     => true
            ],
            'business_pasword' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ]
        ]);
        $this->forge->addKey('business_id', true, true);
        $this->forge->createTable('business');
    }

    public function down()
    {
        $this->forge->dropTable('business');
    }
}
