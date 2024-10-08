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
            [
                'section'     => '3',
                'image_fav'     => 'genshin-impact.png',
            ],
            [
                'section'     => '2',
                'image_fav'     => 'pubg-mobile.png',
            ],
            [
                'section'     => '17',
                'image_fav'     => 'call-of-duty.png',
            ],
        ];

        $this->db->table('favourites')->insertBatch($data);
    }
}
