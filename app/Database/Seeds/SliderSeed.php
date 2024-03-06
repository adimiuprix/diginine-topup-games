<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SliderSeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'image'     => 'banner1.jpg',
                'link'     => 'https://google.com/',
            ],
            [
                'image'     => 'banner2.jpg',
                'link'     => 'https://facebook.com/',
            ],
        ];

        $this->db->table('sliders')->insertBatch($data);
    }
}
