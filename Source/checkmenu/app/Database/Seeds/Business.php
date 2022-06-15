<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Business extends Seeder
{
    public function run()
    {
        $data = [
            'business_owner' => 4,
            'business_name'  => 'Hungry Monkey',
            'business_slug'  => 'hungry_monkey'
        ];

        $this->db->table('business')->insert($data);
    }
}
