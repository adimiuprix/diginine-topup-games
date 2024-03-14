<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_cats'     => '1',
                'item_name'     => 'Mobile Legends',
                'status'     => 'enable',
                'slug'     => 'mobile-legends',
                'code_game' => 'mobilelegend',
                'image'     => 'mobile-legends.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Mobile Legends: Bang Bang (MLBB) adalah game pertarungan tim bergenre MOBA (Multiplayer Online Battle Arena) khusus ponsel. Game besutan Moonton ini, dirilis pada tahun 2016 dan terkenal di Asia Tenggara.',
                'vendor'     => 'Moonton',
                'coloum'     => '1',
            ],
            [
                'id_cats'     => '1',
                'item_name'     => 'PUBG Mobile',
                'status'     => 'enable',
                'slug'     => 'pubg-mobile',
                'code_game' => '',
                'image'     => 'pubg-mobile.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'PUBG Mobile adalah game battle royale gratis untuk ponsel yang dimana 100 pemain terjun ke sebuah map dan bertarung hingga menjadi pemain terakhir yang bertahan hidup. Pemain dapat mengumpulkan senjata, kendaraan, dan perlengkapan lainnya untuk bertarung dan mengalahkan lawan. Game ini menawarkan berbagai mode permainan, seperti mode klasik 100 pemain, mode team deathmatch, dan mode zombie. PUBG Mobile dikenal dengan gameplay yang seru, menegangkan, dan memiliki kualitas grafik yang tinggi.',
                'vendor'     => 'Level Infinite',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Genshin Impact',
                'status' => 'enable',
                'slug' => 'genshin-impact',
                'code_game' => '',
                'image' => 'genshin-impact.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Genshin Impact adalah game open world RPG (Role-Playing Game) yang dikembangkan oleh miHoYo. Game ini dirilis pada tahun 2020 dan tersedia di berbagai platform, termasuk PC, mobile, dan PlayStation. Genshin Impact terkenal dengan grafis yang indah, gameplay yang seru, dan cerita yang menarik. Pemain dapat menjelajahi dunia Teyvat yang luas, menyelesaikan berbagai quest, dan bertemu dengan karakter-karakter yang unik.',
                'vendor' => 'miHoYo',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Higgs Domino',
                'status' => 'enable',
                'slug' => 'higgs-domino',
                'code_game' => '',
                'image' => 'higgs-domino.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Higgs Domino adalah game domino online terpopuler di Indonesia. Nikmati permainan domino gaple, Capsa Susun, Ludo, dan QiuQiu bersama teman-teman. Dapatkan chip gratis dan fitur VIP untuk pengalaman bermain yang lebih seru.',
                'vendor' => 'Higgs Games',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Honkai Impact 3rd',
                'status' => 'enable',
                'slug' => 'honkai-impact-3rd',
                'code_game' => '',
                'image' => 'honkai-impact-3rd.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Honkai Impact 3rd adalah game action RPG (Role-Playing Game) gratis yang dikembangkan dan diterbitkan oleh miHoYo. Game ini dirilis pada tahun 2016 dan tersedia di berbagai platform, termasuk PC, mobile, dan iOS. Honkai Impact 3rd terkenal dengan gameplay action yang seru, cerita yang menarik, dan karakter yang unik. Pemain dapat bertarung melawan musuh menggunakan berbagai senjata dan skill, serta mengumpulkan karakter baru dan meningkatkan kemampuan mereka.',
                'vendor' => 'miHoYo',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Clash of Clans',
                'status' => 'enable',
                'slug' => 'clash-of-clans',
                'code_game' => '',
                'image' => 'clash-of-clans.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Clash of Clans adalah game strategi mobile yang populer di mana pemain membangun desa, melatih pasukan, dan menyerang desa lain. Game ini terkenal dengan gameplay yang adiktif dan kompetitif. Pemain dapat bergabung dengan klan dan berpartisipasi dalam perang klan untuk mendapatkan hadiah dan meningkatkan reputasi klan mereka.',
                'vendor' => 'Supercell',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Clash Royale',
                'status' => 'enable',
                'slug' => 'clash-royale',
                'code_game' => '',
                'image' => 'clash-royale.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Clash Royale adalah game real-time strategy yang menggabungkan elemen dari game kartu koleksi, tower defense, dan multiplayer online battle arena. Dikembangkan dan diterbitkan oleh Supercell, game ini diluncurkan secara global pada tahun 2016. Pemain mengumpulkan dan meningkatkan kartu yang menampilkan karakter Clash of Clans dan lainnya, dan menggunakannya untuk bertempur melawan pemain lain secara real-time. Tujuannya adalah untuk menghancurkan menara lawan sambil mempertahankan menara sendiri.',
                'vendor' => 'Supercell',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Brawl Stars',
                'status' => 'enable',
                'slug' => 'brawl-stars',
                'code_game' => '',
                'image' => 'brawl-stars.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Brawl Stars adalah game mobile moba (multiplayer online battle arena) yang dikembangkan dan diterbitkan oleh Supercell. Game ini dirilis pada tahun 2018 dan terkenal dengan gameplay yang cepat, aksi seru, dan karakter unik. Pemain dapat memilih berbagai Brawler dengan kemampuan khusus untuk bertarung dalam berbagai mode permainan, seperti Gem Grab, Heist, dan Brawl Ball. Brawl Stars juga memiliki sistem peningkatan Brawler dan kosmetik yang menarik.',
                'vendor' => 'Supercell',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Free Fire',
                'status' => 'enable',
                'slug' => 'free-fire',
                'code_game' => '',
                'image' => 'free-fire.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Free Fire adalah game battle royale mobile yang gratis untuk dimainkan. Game ini mengharuskan 50 pemain terjun ke sebuah pulau terpencil dan bertarung satu sama lain hingga menjadi pemain terakhir yang bertahan hidup. Pemain dapat mengumpulkan senjata, perlengkapan, dan kendaraan untuk meningkatkan peluang mereka menang. Free Fire terkenal dengan gameplay yang cepat dan seru, serta grafis yang menarik.',
                'vendor' => 'Garena',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Point Blank',
                'status' => 'enable',
                'slug' => 'point-blank',
                'code_game' => '',
                'image' => 'point-blank.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Point Blank adalah game FPS (First-Person Shooter) online yang populer di Indonesia. Game ini terkenal dengan gameplay yang seru dan kompetitif, serta memiliki berbagai mode permainan yang menarik. Pemain dapat memilih berbagai jenis senjata dan karakter untuk bertarung melawan tim lain. Point Blank juga memiliki komunitas yang aktif dan sering mengadakan turnamen esports.',
                'vendor' => 'Zepetto',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Valorant',
                'status' => 'enable',
                'slug' => 'valorant',
                'code_game' => '',
                'image' => 'valorant.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Valorant adalah game FPS (First-Person Shooter) 5v5 yang kompetitif, di mana pemain mengendalikan agen unik dengan berbagai kemampuan. Game ini dikembangkan oleh Riot Games, pencipta League of Legends. Valorant terkenal dengan gameplay yang seru dan taktis, serta memiliki berbagai karakter dan peta yang menarik. Pemain harus bekerja sama dengan tim mereka untuk menyelesaikan tujuan dan memenangkan pertandingan.',
                'vendor' => 'Riot Games',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'League of Legends: Wild Rift',
                'status' => 'enable',
                'slug' => 'league-of-legends-wild-rift',
                'code_game' => '',
                'image' => 'league-of-legends-wild-rift.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'League of Legends: Wild Rift adalah game MOBA (multiplayer online battle arena) mobile yang dikembangkan dan diterbitkan oleh Riot Games. Game ini merupakan adaptasi dari game PC League of Legends yang populer, dan menawarkan pengalaman bermain yang seru dan kompetitif di perangkat mobile. Pemain memilih champion (juara) unik dengan berbagai skill dan gaya bermain, lalu bertarung dalam tim beranggotakan 5 orang untuk menghancurkan markas lawan. Wild Rift terkenal dengan gameplay yang cepat, strategis, dan grafis yang memukau.',
                'vendor' => 'Riot Games',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Ragnarok M: Eternal Love',
                'status' => 'enable',
                'slug' => 'ragnarok-m',
                'code_game' => '',
                'image' => 'ragnarok-m.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Ragnarok M: Eternal Love adalah game MMORPG (Massively Multiplayer Online Role-Playing Game) mobile yang diadaptasi dari Ragnarok Online, game MMORPG PC populer yang dikembangkan oleh Gravity Interactive. Game ini dirilis pada tahun 2017 dan terkenal dengan grafis yang indah, gameplay yang seru, dan komunitas yang aktif. Pemain dapat memilih berbagai kelas karakter dan menjelajahi dunia Ragnarok yang luas, menyelesaikan quest, dan bertarung melawan monster.',
                'vendor' => 'Gravity Interactive',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Dragon Raja',
                'status' => 'enable',
                'slug' => 'dragon-raja',
                'code_game' => '',
                'image' => 'dragon-raja.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Dragon Raja adalah game MMORPG (Massively Multiplayer Online Role-Playing Game) open world yang dikembangkan menggunakan Unreal Engine 4. Game ini dirilis pada tahun 2019 dan tersedia di berbagai platform, termasuk Android, iOS, dan PC. Dragon Raja terkenal dengan grafis yang menakjubkan, dunia yang luas untuk dijelajahi, dan sistem kustomisasi karakter yang mendalam. Pemain dapat memilih berbagai class, menyesuaikan penampilan karakter mereka, dan membangun rumah impian mereka. Selain itu, Dragon Raja juga menawarkan berbagai aktivitas seperti pertempuran seru, petualangan menarik, dan sistem sosial yang memungkinkan pemain untuk berinteraksi dengan pemain lain.',
                'vendor' => 'Archosaur Games',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => '8 Ball Pool',
                'status' => 'enable',
                'slug' => '8-ball-pool',
                'code_game' => '',
                'image' => '8-ball-pool.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => '8 Ball Pool adalah game biliar online yang populer di seluruh dunia. Dikembangkan oleh Miniclip, game ini menawarkan gameplay yang seru dan mudah dipelajari, namun sulit untuk dikuasai. Pemain dapat bertarung melawan teman, pemain lain secara online, atau berlatih di arena latihan. 8 Ball Pool menyediakan berbagai mode permainan, seperti 8-Ball, 9-Ball, dan Snooker. Pemain juga dapat berpartisipasi dalam turnamen dan event untuk memenangkan hadiah.',
                'vendor' => 'Miniclip',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'HAGO',
                'status' => 'enable',
                'slug' => 'hago',
                'code_game' => '',
                'image' => 'hago.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'HAGO: Hiburan seru di satu aplikasi! Main game mini, chat, live streaming, dan bersenang-senang bersama teman.',
                'vendor' => 'HAGO Games',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Call of Duty: Mobile',
                'status' => 'enable',
                'slug' => 'call-of-duty-mobile',
                'code_game' => '',
                'image' => 'call-of-duty-mobile.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'CALL OF DUTY®: MOBILE adalah game action FPS (First-Person Shooter) yang menghadirkan gameplay dan karakter ikonik dari seri Call of Duty ke perangkat mobile. Game ini menawarkan berbagai mode permainan, seperti Team Deathmatch, Domination, Search and Destroy, dan Battle Royale. Pemain dapat memilih berbagai senjata dan peralatan, serta kustomisasi karakter mereka untuk bertarung melawan pemain lain secara online.',
                'vendor' => 'Activision',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Boyaa Capsa Susun',
                'status' => 'enable',
                'slug' => 'boyaa-capsa-susun',
                'code_game' => '',
                'image' => 'boyaa-capsa-susun.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Boyaa Capsa Susun adalah game kartu online populer di Indonesia. Game ini terkenal dengan gameplay yang mudah dipelajari, namun sulit untuk dikuasai. Pemain harus menyusun 13 kartu yang mereka miliki menjadi 3 kombinasi terbaik untuk mengalahkan lawan. Boyaa Capsa Susun juga menawarkan berbagai mode permainan, seperti Domino QiuQiu, Texas Holdem, dan Bandar Ceme. Pemain dapat bermain dengan teman-teman atau melawan pemain lain dari seluruh dunia.',
                'vendor' => 'Boyaa Interactive',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Blood Strike',
                'status' => 'enable',
                'slug' => 'blood-strike',
                'code_game' => '',
                'image' => 'blood-strike.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Blood Strike adalah game mobile FPS Battle Royale yang dioptimalkan untuk perangkat kelas bawah dan penyimpanan terbatas. Rasakan Battle Royale 100 pemain dengan senjata yang bisa disesuaikan sepenuhnya! Dengan ukuran ringkas hanya 560MB+ dan persyaratan minimal RAM 2GB — siapa saja bisa menikmati pengalaman bertempur yang mulus dengan Blood Strike! Saat ini game ini masih dalam tahap pra-registrasi dan akan segera diluncurkan secara global.',
                'vendor' => 'NetEase Games',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '1',
                'item_name' => 'Undawn',
                'status' => 'enable',
                'slug' => 'undawn',
                'code_game' => '',
                'image' => 'undawn.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Undawn adalah game mobile open-world survival yang dikembangkan oleh Tencent Games dan LightSpeed ​​Studios. Game ini menggabungkan elemen FPS dengan RPG dan menawarkan pengalaman survival yang realistis di dunia pasca-apokaliptik. Pemain harus menjelajahi dunia yang luas, mencari sumber daya, membangun tempat berlindung, dan melawan zombie dan pemain lain untuk bertahan hidup.',
                'vendor' => 'Tencent Games & LightSpeed ​​Studios',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '2',
                'item_name' => 'Netflix',
                'status' => 'enable',
                'slug' => 'netflix',
                'code_game' => '',
                'image' => 'netflix.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Netflix adalah platform streaming yang populer menyajikan berbagai film, acara TV, dokumenter, dan konten asli on-demand dengan langganan bulanan, menawarkan pengalaman menonton yang mudah dan personalisasi.',
                'vendor' => 'Netflix',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '3',
                'item_name' => 'Jasa Mabar Mobile Legends',
                'status' => 'enable',
                'slug' => 'jasa-mabar-mobile-legends',
                'code_game' => '',
                'image' => 'mobile-legends.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Kami mempersembahkan layanan joki Mobile Legends yang cepat, murah, serta aman dan terpercaya! Tingkatkan permainan dan rank Anda dengan bantuan dari profesional kami. Kami mengutamakan kepuasan dan keamanan akun Anda dalam setiap jasa yang kami berikan.',
                'vendor' => 'Moonton',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '4',
                'item_name' => 'Telkomsel',
                'status' => 'enable',
                'slug' => 'telkomsel',
                'code_game' => '',
                'image' => 'telkomsel.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Telkomsel, sebagai pemimpin di industri telekomunikasi Indonesia, dikenal karena layanan pulsa seluler unggulnya. Dengan jaringan luas dan inovasi terus-menerus, Telkomsel memenuhi kebutuhan komunikasi pelanggan di seluruh negeri.',
                'vendor' => 'Telkomsel',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '4',
                'item_name' => 'Three',
                'status' => 'enable',
                'slug' => 'three',
                'code_game' => '',
                'image' => 'three.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Three, salah satu penyedia layanan telekomunikasi terkemuka di Indonesia, menawarkan berbagai paket dan layanan komunikasi yang inovatif. Dengan cakupan jaringan yang luas dan komitmen untuk memberikan pengalaman pelanggan yang terbaik, Three membantu memenuhi kebutuhan komunikasi pelanggan di seluruh negeri.',
                'vendor' => 'Three',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '4',
                'item_name' => 'Indosat Ooredoo',
                'status' => 'enable',
                'slug' => 'indosat-ooredoo',
                'code_game' => '',
                'image' => 'indosat.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Indosat Ooredoo adalah salah satu penyedia layanan telekomunikasi terkemuka di Indonesia. Dengan berbagai paket dan layanan yang inovatif, serta cakupan jaringan yang luas, Indosat Ooredoo membantu memenuhi kebutuhan komunikasi pelanggan di seluruh negeri. Komitmen mereka terhadap pelayanan berkualitas menjadikan mereka pilihan utama dalam dunia telekomunikasi.',
                'vendor' => 'Indosat Ooredoo',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '4',
                'item_name' => 'XL Axiata',
                'status' => 'enable',
                'slug' => 'xl-axiata',
                'code_game' => '',
                'image' => 'xl-axiata.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'XL Axiata, sebagai salah satu pemimpin di industri telekomunikasi Indonesia, terus menghadirkan inovasi yang mendukung konektivitas yang lebih baik bagi jutaan pelanggan di seluruh negeri. Dengan jaringan yang luas dan layanan yang andal, XL Axiata memberikan pengalaman berkomunikasi yang lancar dan menyeluruh. Dari layanan data hingga panggilan suara, XL Axiata hadir untuk memenuhi semua kebutuhan komunikasi Anda.',
                'vendor' => 'XL Axiata',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '4',
                'item_name' => 'Smartfren',
                'status' => 'enable',
                'slug' => 'smartfren',
                'code_game' => '',
                'image' => 'smartfren.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Smartfren, sebagai pelopor di bidang teknologi komunikasi, mempersembahkan pengalaman terhubung yang tak tertandingi bagi pelanggan di Indonesia. Dengan kecepatan dan keandalan jaringan 4G terdepan, Smartfren menghadirkan layanan yang tidak hanya menghubungkan, tetapi juga menginspirasi dan memberdayakan individu. Dari akses internet cepat hingga berbagai fitur tambahan seperti streaming tanpa buffering dan paket hemat, Smartfren hadir untuk merangkul masa depan komunikasi digital Indonesia.',
                'vendor' => 'Smartfren',
                'coloum'     => '1',
            ],   
            [
                'id_cats' => '5',
                'item_name' => 'GoPay',
                'status' => 'enable',
                'slug' => 'gopay',
                'code_game' => '',
                'image' => 'gopay.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'GoPay adalah layanan dompet digital yang dimiliki oleh Gojek, menyediakan berbagai layanan pembayaran, mulai dari pembayaran tagihan, pembelian pulsa, hingga pembayaran di merchant mitra Gojek. GoPay hadir untuk memberikan kemudahan transaksi bagi pengguna Gojek.',
                'vendor' => 'Gojek',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '5',
                'item_name' => 'OVO',
                'status' => 'enable',
                'slug' => 'ovo',
                'code_game' => '',
                'image' => 'ovo.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'OVO adalah salah satu e-wallet terbesar di Indonesia, dimiliki oleh Grab. OVO menawarkan berbagai layanan pembayaran, transfer uang, pembelian pulsa, dan cashback melalui penggunaan aplikasi mobile.',
                'vendor' => 'Grab',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '5',
                'item_name' => 'Dana',
                'status' => 'enable',
                'slug' => 'dana',
                'code_game' => '',
                'image' => 'dana.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Dana adalah platform pembayaran digital yang memungkinkan penggunanya untuk melakukan berbagai transaksi, termasuk pembayaran tagihan, transfer uang, pembelian pulsa, dan pembayaran di merchant mitra Dana.',
                'vendor' => 'Dana',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '5',
                'item_name' => 'LinkAja',
                'status' => 'enable',
                'slug' => 'linkaja',
                'code_game' => '',
                'image' => 'linkaja.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'LinkAja adalah e-wallet yang dikembangkan oleh beberapa BUMN dan perusahaan swasta, seperti Telkomsel, Bank Mandiri, BRI, BNI, dan BTN. LinkAja menawarkan berbagai layanan pembayaran digital, transfer uang, pembelian pulsa, dan transaksi di merchant mitra LinkAja.',
                'vendor' => 'Telkomsel, Bank Mandiri, BRI, BNI, BTN',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '5',
                'item_name' => 'ShopeePay',
                'status' => 'enable',
                'slug' => 'shopee-pay',
                'code_game' => '',
                'image' => 'shopeepay.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'ShopeePay adalah layanan dompet digital yang dimiliki oleh Shopee, salah satu platform e-commerce terbesar di Indonesia. ShopeePay memungkinkan pengguna untuk melakukan pembayaran di Shopee serta transfer uang, pembelian pulsa, dan pembayaran di merchant mitra Shopee.',
                'vendor' => 'Shopee',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '5',
                'item_name' => 'Jenius',
                'status' => 'enable',
                'slug' => 'jenius',
                'code_game' => '',
                'image' => 'jenius.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Jenius adalah layanan perbankan digital yang dimiliki oleh Bank BTPN. Jenius memungkinkan penggunanya untuk membuka rekening secara online, melakukan transfer uang, pembayaran tagihan, pembelian pulsa, hingga investasi. Jenius juga menawarkan fitur-fitur inovatif seperti Dream Saver, Split Bill, dan Card Center yang memberikan pengalaman perbankan yang lebih fleksibel dan modern.',
                'vendor' => 'Bank BTPN',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '5',
                'item_name' => 'Sakuku',
                'status' => 'enable',
                'slug' => 'sakuku',
                'code_game' => '',
                'image' => 'sakuku.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Sakuku adalah layanan dompet digital yang dimiliki oleh Bank BCA. Sakuku memungkinkan penggunanya untuk melakukan berbagai transaksi pembayaran, transfer uang, pembelian pulsa, hingga transaksi di merchant mitra Sakuku dengan mudah melalui aplikasi mobile Sakuku.',
                'vendor' => 'Bank BCA',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '5',
                'item_name' => 'TCash',
                'status' => 'enable',
                'slug' => 'tcash',
                'code_game' => '',
                'image' => 'tcash.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'TCash adalah layanan dompet digital yang dimiliki oleh Telkomsel, salah satu operator seluler terbesar di Indonesia. TCash memungkinkan penggunanya untuk melakukan pembayaran di merchant mitra Telkomsel, pembelian pulsa, pembayaran tagihan, hingga transfer uang dengan mudah melalui aplikasi mobile TCash.',
                'vendor' => 'Telkomsel',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '5',
                'item_name' => 'Kredivo',
                'status' => 'enable',
                'slug' => 'kredivo',
                'code_game' => '',
                'image' => 'kredivo.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Kredivo adalah layanan kredit instan yang memungkinkan pengguna untuk berbelanja online tanpa kartu kredit. Kredivo memberikan kemudahan pembayaran dengan cicilan yang dapat dipilih sesuai kebutuhan. Kredivo bekerja sama dengan berbagai merchant online dan menawarkan berbagai promo dan diskon bagi pengguna.',
                'vendor' => 'Kredivo',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '5',
                'item_name' => 'Paytren',
                'status' => 'enable',
                'slug' => 'paytren',
                'code_game' => '',
                'image' => 'paytren.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Paytren adalah platform pembayaran digital yang menggabungkan teknologi dengan nilai-nilai keislaman. Paytren memungkinkan penggunanya untuk melakukan berbagai transaksi, seperti pembayaran tagihan, pembelian pulsa, pembayaran zakat, dan transaksi lainnya sesuai dengan prinsip-prinsip syariah.',
                'vendor' => 'Paytren',
                'coloum'     => '1',
            ],
            [
                'id_cats' => '6',
                'item_name' => 'Lita',
                'status' => 'enable',
                'slug' => 'lita',
                'code_game' => '',
                'image' => 'lita.png',
                'blog_image'     => '',
                'breadcrumb'     => '',
                'description' => 'Lita adalah aplikasi yang membantu pengguna menemukan teman bermain game online (mabar) dengan mudah dan cepat.',
                'vendor' => 'BATTUTA TECHNOLOGY PTE. LTD',
                'coloum'     => '1',
            ],
        ];

        $this->db->table('items')->insertBatch($data);
    }
}
