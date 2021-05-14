<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Apple Earpod',
                'price' => '27',
                'description' => 'Kompatibel untuk Iphone 5s, Ipod dan Ipad : $ 27',
                'category' => 'Earphone',
                'gallery' => 'https://images.tokopedia.net/img/cache/900/product-1/2018/11/29/3820014/3820014_3e73be49-b9f1-43a0-a48a-f5cd9f2177b5_1028_1028.jpeg'
            ],
            [
                'name' => 'Samsung Galaxy A11 3/32GB Garansi Resmi',
                'price' => '131',
                'description' => 'Garansi Resmi Samsung Indonesia',
                'category' => 'Mobile',
                'gallery' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/3/10/b5a529f5-9a9d-4065-9176-a476f8e5f084.jpg'
            ],
            [
                'name' => 'Apple Iphone 12 128GB Garansi IBOX Indonesia',
                'price' => '1000',
                'description' => 'SILAHKAN TANYA STOCK WARNA YANG READY SEBELUM ORDER !!! SEMUA PESANAN MASUK LANGSUNG DIPROSES DAN DIPACKING AMAN MENGGUNAKAN BUBBLE WRAP FREE, THX',
                'category' => 'Mobile',
                'gallery' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/1/15/e46875fd-0ae4-4fd4-9aad-13d7b0d8b960.jpg'
            ],
            [
                'name' => 'Mouse Logitech G304',
                'price' => '34',
                'description' => 'LIGHTSPEED WIRELESS UNTUK SEMUA G304 adalah LIGHTSPEED wireless gaming mouse yang dirancang untuk kinerja serius dengan inovasi teknologi terbaru dengan harga yang terjangkau.',
                'category' => 'Mouse',
                'gallery' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/3/29/b798a1a5-6d62-4f5d-9fae-1a62d062865f.jpg'
            ],
            [
                'name' => 'Logitech G813 LIGHTSYNC RGB Mechanical Gaming Keyboard',
                'price' => '172',
                'description' => 'Fitur: Luar Biasa Tipis, Mechanical Terbaik yang Sederhana, Lightsync RGB, Kontrol tanpa batas, USB Passthrough, Kontrol media khusus, Logitech G Hub',
                'category' => 'Keyboard',
                'gallery' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2020/12/2/7c6a0268-830c-4522-ab52-4182238c9687.jpg'
            ],
            [
                'name' => 'Pencil iPad Stylus Pen Universal High Sensitivity Rechargeable',
                'price' => '13',
                'description' => 'Fitur: Parameter fungsi: lukisan, menulis, catatan, sentuh, Waktu pengisian: 1 jam, Waktu kerja: 8-10 jam, Jarak efektif: 1.4mm dari pena',
                'category' => 'Stylus Tablet',
                'gallery' => 'https://images.tokopedia.net/img/cache/900/product-1/2020/9/30/11657236/11657236_8294ea1c-c358-4609-a0f0-d658340d7057_640_640'
            ],
            [
                'name' => 'Speaker Bluetooth Wireless with Alarm Clock FM Radio Portable',
                'price' => '12',
                'description' => 'Feature:
                【BT 5.0】the digital clock supports Bluetooth connection,within 10m remote
                distance.you can use it for your party,home,or anywhere you want.',
                'category' => 'Speaker',
                'gallery' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2020/10/16/835ef552-9434-44f8-be1d-a08c4307e546.jpg'
            ],
            [
                'name' => 'Canon EOS 3000D with EF-S 18-55mm III Kit',
                'price' => '310',
                'description' => 'Canon menghadirkan kamera DSLR EOS entry-level generasi terbarunya yaitu EOS 3000D.',
                'category' => 'Camera',
                'gallery' => 'https://images.tokopedia.net/img/cache/900/product-1/2018/5/14/19629535/19629535_c6122e89-ff63-4a69-8737-b65530547e4f_500_500.jpg'
            ],
        ]);
    }
}
