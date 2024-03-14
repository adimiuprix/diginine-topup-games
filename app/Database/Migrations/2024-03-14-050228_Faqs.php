<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faqs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'question' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'answer' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('faqs');
        $initialData = [
            [
                'question'      => 'MENGAPA ANDA HARUS PILIH SWGSTORE?',
                'answer'         => 'SWGSTORE adalah tempat top up game termurah dan teraman No 1 Di Indonesia.',
            ],
            [
                'question'      => 'APA KEUNTUNGAN TOP UP DI SWGSTORE?',
                'answer'         => 'Banyak promo yang anda dapatkan di website ini, dan anda berkesempatan untuk membuka reseller untuk mendapatkan keuntungan yang lebih.',
            ],
            [
                'question'      => 'APAKAH HARGA BISA BERSAING DENGAN STORE GAME YANG ADA DI INDONESIA?',
                'answer'         => 'Pastinya SWGSTORE memberikan harga yang terbaik untuk para membernya dan bisa kalian bandingkan dengan harga harga di pasar lain.',
            ],
            [
                'question'      => 'APAKAH ADA GARANSI DI SWGSTORE?',
                'answer'         => 'Pastinya member akan mendapatkan garansi 100% jika ada trouble setting pada system dan mematuhi kebijakan store yang berlaku.',
            ],
            [
                'question'      => 'BERAPA LAMA PROSES TOP UP GAME PADA SWGSTORE?',
                'answer'         => 'Proses top up dilakukan secara otomatis dan manual, dan transaksi membutuhkan waktu antara 1 – 5 menit. Dan jika proses belum sukses saldo akan di kembalikan kepada pengguna 100% tanpa ada biaya potongan.',
            ],
            [
                'question'      => 'BAGAIMANA CARA PENGGUNA DAFTAR UNTUK MENJADI RESELLER?',
                'answer'         => 'Cara daftar untuk menjadi reseller pengguna bisa menghubungi kontak whatsapp admin yang sudah tertera pada website SWGSTORE.',
            ],
            [
                'question'      => 'APAKAH ADA BONUS REWARD RESELLER?',
                'answer'         => 'Pastinya ada dong? Pengguna yang sudah daftar reseller wajib cp admin agar mendapatkan harga khusus dan ada target reward dari perusahaan.',
            ],
            [
                'question'      => 'KALAU BOLEH TAU APA REWARD RESELLER PERUSAHAAN?',
                'answer'         => 'Reward dari perusahaan antara lain Handphone, kaos, sepatu, bahkan uang tunai. Sesuai target yang telah diberikan pada perusahaan.',
            ],
            [
                'question'      => 'BAGAIMANA CARA CLAIM REWARD BONUS?',
                'answer'         => 'Para reseller bisa langsung cp admin perusahaan jika sudah memenuhi target yang sudah di berikan oleh perusahaan.',
            ],
        ];
        $this->db->table('faqs')->insertBatch($initialData);
    }

    public function down()
    {
        $this->forge->dropTable('faqs');
    }
}
