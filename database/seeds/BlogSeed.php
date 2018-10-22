<?php

use Illuminate\Database\Seeder;

class BlogSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'title' => 'Makin Banyak Kosakata Makin Lancar Bicara Metode sinonim Part 1',
            'date' => '2018-09-08',
			'author' => 'Gede Murta',
			'imgSrc' => 'blog-1.jpg',
			'body' => 'Mampu berbicara bahasa inggris dalam kehidupan sehari – hari adalah dambaan masyarakat yang bahasa sehari - harinya bukan bahasa inggris. Hal ini dikarenakan orang yang dapat lancar berbicara bahasa inggris memiliki kesempatan bekerja'
        ]);
        DB::table('blog')->insert([
            'title' => 'Contoh Percakapan dengan Menggunakan Kata Ensure dalam Bahasa Inggris Beserta Artinya',
            'date' => '2018-09-08',
			'author' => 'Desak',
			'imgSrc' => 'blog-2.png',
			'body' => 'Sebelumnya English Cafe Bali telah memberikan perbedaan pengertian antara Assure, Ensure, Insure dan Secure. Masih ada yang ingat tidak dengan perbedaan kata tersebut? Nah, untuk memperjelas lagi pengertian dari kata tersebut, English Cafe'
        ]);
    }
}
