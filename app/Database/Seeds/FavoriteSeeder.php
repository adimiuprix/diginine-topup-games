<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'section'     => '1',
                'image_fav'     => 'mobile-legends.png',
            ],
            [
                'section'     => '24',
                'image_fav'     => 'pre-order-joki-awal-season.png',
            ],
            [
                'section'     => '23',
                'image_fav'     => 'jasa-komen-album.png',
            ],
            [
                'section'     => '9',
                'image_fav'     => 'free-fire.png',
            ],
            [
                'section'     => '11',
                'image_fav'     => 'valorant.png',
            ],

        ];

        $this->db->table('favourites')->insertBatch($data);
    }
}
