<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Business extends Migration
{
    public function up()
    {
        $fields = [
            'business_owner' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true
            ]
        ];
        $this->forge->addField($fields);
        $this->forge->addForeignKey('business_owner', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addColumn('business', $fields);
        $this->forge->dropColumn('business', 'business_password');
    }

    public function down()
    {
        $this->forge->dropForeignKey('business', 'business_password');
        $this->forge->dropColumn('business', 'business_owner');
        $this->forge->addColumn('business', 'business_password');
        $this->forge->addField([
            'business_password' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ]
        ]);
    }
}
