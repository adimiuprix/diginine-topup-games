<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SliderSeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'image'     => 'banner1.png',
                'link'     => 'https://google.com/',
            ],
            [
                'image'     => 'banner2.png',
                'link'     => 'https://facebook.com/',
            ],
            [
                'image'     => 'banner3.png',
                'link'     => 'https://facebook.com/',
            ],
        ];

        $this->db->table('sliders')->insertBatch($data);
    }
}
