<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_item'       => '1',
                'name_product'  => 'Diamonds Mobile Legends',
                'code_product'  => 'DML11D',
                'price'         => '3000',
                'item'          => 'Diamonds 10 + 1',
            ],
            [
                'id_item'       => '1',
                'name_product'  => 'Diamonds Mobile Legends',
                'code_product'  => 'DML22D',
                'price'         => '6000',
                'item'          => 'Diamonds 20 + 2',
            ],
            [
                'id_item'       => '1',
                'name_product'  => 'Diamonds Mobile Legends',
                'code_product'  => 'DML56D',
                'price'         => '14000',
                'item'          => 'Diamonds 51 + 5',
            ],
            [
                'id_item'       => '1',
                'name_product'  => 'Diamonds Mobile Legends',
                'code_product'  => 'DML102D',
                'price'         => '27500',
                'item'          => 'Diamonds 102 + 10',
            ],
            [
                'id_item'       => '1',
                'name_product'  => 'Diamonds Mobile Legends',
                'code_product'  => 'DML203D',
                'price'         => '55000',
                'item'          => 'Diamonds 203 + 20',
            ],
            [
                'id_item'       => '1',
                'name_product'  => 'Diamonds Mobile Legends',
                'code_product'  => 'DML303D',
                'price'         => '85000',
                'item'          => 'Diamonds 303 + 33',
            ],
            [
                'id_item'       => '1',
                'name_product'  => 'Diamonds Mobile Legends',
                'code_product'  => 'DML504D',
                'price'         => '135000',
                'item'          => 'Diamonds 504 + 66',
            ],
            [
                'id_item'       => '1',
                'name_product'  => 'Diamonds Mobile Legends',
                'code_product'  => 'DML1007D',
                'price'         => '270000',
                'item'          => 'Diamonds 1007 + 156',
            ],
            [
                'id_item'       => '1',
                'name_product'  => 'Diamonds Mobile Legends',
                'code_product'  => 'DML2015D',
                'price'         => '550000',
                'item'          => 'Diamonds 2015 + 383',
            ],
            [
                'id_item'       => '1',
                'name_product'  => 'Diamonds Mobile Legends',
                'code_product'  => 'DML5035D',
                'price'         => '1300000',
                'item'          => 'Diamonds 5035 + 1007',
            ],

        ];

        $this->db->table('products')->insertBatch($data);
    }
}
