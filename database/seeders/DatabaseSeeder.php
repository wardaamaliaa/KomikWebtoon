<?php

namespace Database\Seeders;

use App\Models\chapter;
use App\Models\gambar_chapter;
use App\Models\komik;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'wada',
            'nama'=>'warda',
            'password'=>bcrypt('432'),
            'role'=>'admin',
        ]);

        komik::create([
            'user_id'=>1,
            'judul_komik'=>'Naruto',
            'cover_komik'=>'img/ruto.jpg',
            'sinopsis'=>'Manga Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja yang hiperaktif, periang, dan ambisius yang ingin mewujudkan keinginannya untuk mendapatkan gelar Hokage, atau juga disebut pemimpin dan ninja terkuat di desanya',
            'author'=>'Will Byers',
            'tahun'=>'1985',
            'genre'=>'animasi',
        ]);

        komik::create([
            'user_id'=>1,
            'judul_komik'=>'Spider Man',
            'cover_komik'=>'img/man.jpg',
            'sinopsis'=>'Spider Man adalah makhluk laba-laba yang berjuang bertarung menemukan cinta pertamanya ia menaruhkan nyawanya demi seorang wanita yang ia cintai.',
            'author'=>'Max Myfield',
            'tahun'=>'1985',
            'genre'=>'animasi',
        ]);

        komik::create([
            'user_id'=>1,
            'judul_komik'=>'Stranger Things',
            'cover_komik'=>'img/st.jpg',
            'sinopsis'=>'Sebuah kota Hawkins yang terkutuk dan dipenuhi oleh misteri-misteri yang tak terduga',
            'author'=>'Jim Hopper',
            'tahun'=>'1985',
            'genre'=>'Fantasy',
        ]);

        komik::create([
            'user_id'=>1,
            'judul_komik'=>'Zombie',
            'cover_komik'=>'img/zombi.jpg',
            'sinopsis'=>'Zombi (kata tidak baku: Jombi) adalah istilah yang digunakan untuk makhluk hidup dalam film horor, game, ataupun film fantasi. Zombi digambarkan sebagai mayat yang tidak berpikiran dan bernafsu memangsa manusia',
            'author'=>'Joyce',
            'tahun'=>'1985',
            'genre'=>'animasi',
        ]);

        chapter::create([
            'nomor_chapter'=>1,
            'judul_chapter'=>'kepulangan',
            'komik_id'=>1,
        ]);
        chapter::create([
            'nomor_chapter'=>1,
            'judul_chapter'=>'kepergian',
            'komik_id'=>1,
        ]);

        chapter::create([
            'nomor_chapter'=>1,
            'judul_chapter'=>'pulang yu ah',
            'komik_id'=>2,
        ]);

        chapter::create([
            'nomor_chapter'=>1,
            'judul_chapter'=>'jukaaaiii',
            'komik_id'=>3,
        ]);

        chapter::create([
            'nomor_chapter'=>1,
            'judul_chapter'=>'jarombi jombiiii',
            'komik_id'=>4,
        ]);

        // gambar_chapter::create([
        //     'gambar_chapter'=>'https://image.slidesharecdn.com/komiknarutoshippudenchapter627-130412122431-phpapp01/75/komik-naruto-shippuden-chapter-627-1-2048.jpg?cb=1706527379',
        //     'chapter_id'=>1,
        // ]);

        gambar_chapter::create([
            'gambar_chapter'=>'img/narutcp1.jpg',
            'chapter_id'=>1,
        ]);

        gambar_chapter::create([
            'gambar_chapter'=>'img/narutcp2.jpg',
            'chapter_id'=>2,
        ]);
    }
}
