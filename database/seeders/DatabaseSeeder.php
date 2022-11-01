<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\tipesoal;
use App\Models\kepribadian;
use App\Models\soal;
use App\Models\hasiltesawal;
use App\Models\hasiltes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'miraju',
            'username' => 'mirajuhana',
            'email' => 'miftahurrizqiyah12@gmail.com',
            'ttgl' => '12 November 1992',
            'jeniskelamin' => 'perempuan',
            'pekerjaan' => 'wiraswasta',
            'pendidikan' => 'S-1',
            'usia' => '29 tahun',
            'password' => bcrypt('password')
        ]);

        tipesoal::insert([
            ['tipe_soal' => 'AN'],
            ['tipe_soal' => 'AE'],
            ['tipe_soal' => 'AL'],
            ['tipe_soal' => 'NN'],
            ['tipe_soal' => 'NE'],
            ['tipe_soal' => 'NL']
        ]);

        kepribadian::insert([
            ['user_id' => 1, 'tipe_kepribadian' => 'Tipe 1', 'Ket_kepribadian' => 'Orang yang Introvert (tertutup) dan memiliki tingkat kecemasan yang rendah'],
            ['user_id' => 1, 'tipe_kepribadian' => 'Tipe 2', 'Ket_kepribadian' => 'Orang yang Ekstrovert (terbuka) dan memiliki tingkat kecemasan yang rendah'],
            ['user_id' => 1, 'tipe_kepribadian' => 'Tipe 3', 'Ket_kepribadian' => 'Orang yang introvert (tertutup), dan memiliki tingkat  kecemasan yang sedang atau stabil.'],
            ['user_id' => 1, 'tipe_kepribadian' => 'Tipe 4', 'Ket_kepribadian' => 'Orang yang Ekstrovert (terbuka), dan memiliki tingkat  kecemasan yang sedang atau stabil.'],
            ['user_id' => 1, 'tipe_kepribadian' => 'Tipe 5', 'Ket_kepribadian' => 'Orang yang Introvert (tertutup), dan memiliki tingkat kecemasan tinggi.'],
            ['user_id' => 1, 'tipe_kepribadian' => 'Tipe 6', 'Ket_kepribadian' => 'Orang yang Ekstrovert (terbuka), dan memiliki tingkat kecemasan tinggi.'],
            ['user_id' => 1, 'tipe_kepribadian' => 'Tipe 7', 'Ket_kepribadian' => 'Ups, Kamu berbohong, karena kepribadianmu tidak bisa disimpulkan']
        ]);

        soal::insert([
            ['id_tipesoal' => 2, 'soal' => 'Apakah Anda sering menginginkan kegairahan?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda sering membutuhkan kawan yang penuh pengertian untuk dapat mengembirakan Anda?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah Anda biasanya bersikap  masa bodoh?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah sangat sukar bagi Anda untuk menolak sesuatu?'],
            ['id_tipesoal' => 5, 'soal' => 'Apakah Anda berfikir-fikir dahulu sebelum bertindak?'],
            ['id_tipesoal' => 3, 'soal' => 'Jika Anda telah berkata akan melakukan sesuatu, apakah Anda selalu akan menepatinya walau bagaimanapun sulitnya untuk melaksanakan hal itu?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah suasana hati Anda berubah-ubah?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah pada umumnya Anda melakukan dan mengatakan sesuatu dengan cepat, tanpa anda fikirkan terlebih dahulu?'],
            ['id_tipesoal' => 1, 'soal' => 'Pernahkah Anda merasa MASGUL tanpa suatu sebab yang jelas?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah setiap tantangan akan Anda hadapi?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda tiba-tiba merasa canggung jika Anda ingin berbicara dengan seseorang yang menarik yang belum Anda kenal?'],
            ['id_tipesoal' => 6, 'soal' => 'Apakah Anda kadang-kadang tidak dapat menahan kemarahan Anda?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah Anda sering melakukan sesuatu secara tiba-tiba?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda sering merisaukan perbuatan-perbuatan atau perkataan-perkataan Anda yang tidak semestinya Anda lakukan ucapkan? '],
            ['id_tipesoal' => 5, 'soal' => 'Apakah pada umumnya Anda lebih suka membaca daripada bermain-main?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah perasaan Anda agak mudah tersinggung?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah Anda suka sekali berpergian?'],
            ['id_tipesoal' => 6, 'soal' => 'Apakah Anda kadang-kadang mempunyai fikiran atau gangguan yang tidak Anda inginkan untuk diketahui oleh orang lain?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda kadang-kadang begitu bersemangat dan kadang-kadang lesu?'],
            ['id_tipesoal' => 5, 'soal' => 'Apakah Anda lebih suka mempunyai teman sedikit tetapi betul-betul karib/akrab?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda sering berkhayal/melamun?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah Anda akan membentaknya kembali jika nda dibentak seseorang?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda sering terganggu perasaan bersalah?'],
            ['id_tipesoal' => 3, 'soal' => 'Apakah semua kebiasaan Anda baik dan disukai?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah biasanya Anda dapat bergembira dalam suatu pesta yang meriah?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda menganggap diri Anda tegang atau kaku?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah orang lain menganggap diri Anda seorang yang periang?'],
            ['id_tipesoal' => 1, 'soal' => 'Setelah Anda menyeleseikan sesuatu yang penting, apakah Anda sering merasa bahwa Anda seharusnya dapat menegrjakannya dengan lebih baik?'],
            ['id_tipesoal' => 5, 'soal' => 'Apakah Anda lebih sering berdiam diri jika Anda ada bersama dengan orang lain?'],
            ['id_tipesoal' => 6, 'soal' => 'Apakah Anda kadang-kadang suka bergunjing (gosip) ?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda tidak dapat tertidur oleh karena masalah-masalah yang Anda fikirkan?'],
            ['id_tipesoal' => 5, 'soal' => 'Jika Anda ingin mengetahui sesuatu, apakah Anda lebih suka mencarinya, atau daripada menanyakan kepada seseorang?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah jantung Anda sering berdebar-debar?'],
            ['id_tipesoal' => 5, 'soal' => 'Apakah Anda suka akan jenis pekerjaan yang membutuhkan kecermatan dan ketelitian?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda sering gemetar tanpa suatu sebab?'],
            ['id_tipesoal' => 3, 'soal' => 'Apakah Anda akan selalu memberitahukan seluruhnya kepada pabean meskipun Anda tahu bahwa sebenarnya Anda tidak akan ketahuan?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda tidak suak berkumpul bersama dengan orang-orang yang suka berolok-olok satu sama lain?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda seorang yang mudah terganggu?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah Anda suka akan pekerjaan yang memerlukan kecepatan bertindak?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda mengkhawatirkan kejadian-kejadian kuran baik yang mungkin terjadi?'],
            ['id_tipesoal' => 5, 'soal' => 'Apakah Anda seorang yang lambat dan tidak tergesa-gesa dalam gerak-gerik Anda?'],
            ['id_tipesoal' => 6, 'soal' => 'Pernahkah Anda terlambat dalam perjanjian atau pekerjaan?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda sering mimpi yang menakutkan?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah Anda demikian sukanya ngobrol, sehingga setiap kesempatan untuk ngobrol meski dengan seorang asing akan Anda pergunakan?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda suka terganggu oleh perasaan sakit dan nyeri?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah Anda akan merasa sangat kesal, jika Anda untuk waktu yang lama tidak dapat bertemu dengan orang banyak?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda menganggap diri Anda sebagai seorang yang gugup?'],
            ['id_tipesoal' => 6, 'soal' => 'Dari semua kenalan Anda, adakah diantaranya yang benar-benar tidak Anda sukai?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah Anda merasa seorang yang mempunyai kepercayaan diri yang cukup besar?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda mudah tersinggung bila pekerjaan Anda dinyatakan salah?'],
            ['id_tipesoal' => 5, 'soal' => 'Sukarkah bagi Anda untuk benar-benar gembira pada suatu pesta yang meriah?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda terganggu oleh perasaan rendah diri?'],
            ['id_tipesoal' => 2, 'soal' => 'Dapatkah Anda membuat pesta yang sepi menjadi agak ramai?'],
            ['id_tipesoal' => 6, 'soal' => 'Apakah Anda kadang-kadang berbicara mengenai hal-hal yang tidak Anda ketahui?'],
            ['id_tipesoal' => 1, 'soal' => 'Apakah Anda mengkkhawatirkan kesehatan Anda?'],
            ['id_tipesoal' => 2, 'soal' => 'Apakah Anda suka mempermainkan orang lain?']
        ]);

        hasiltesawal::insert([
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 1, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 2, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 3, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 1, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 4, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 5, 'id_soal' => 5, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 3, 'id_soal' => 6, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 7, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 8, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 9, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 10, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 11, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 6, 'id_soal' => 12, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 13, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 14, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 5, 'id_soal' => 15, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 1, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 16, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 17, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 6, 'id_soal' => 18, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 19, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 5, 'id_soal' => 20, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 21, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 22, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 23, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 3, 'id_soal' => 24, 'jawaban' => 'ya', 'nilai_l' => 1, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 25, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 1, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 26, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 27, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 1, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 28, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 5, 'id_soal' => 29, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 6, 'id_soal' => 30, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 31, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 5, 'id_soal' => 32, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 33, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 5, 'id_soal' => 34, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 1, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 35, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 3, 'id_soal' => 36, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 37, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 38, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 39, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 40, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 5, 'id_soal' => 41, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 6, 'id_soal' => 42, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 43, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 44, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 45, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 46, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 47, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 6, 'id_soal' => 48, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 49, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 1, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 50, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 5, 'id_soal' => 51, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 52, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 53, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 6, 'id_soal' => 54, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0],
            ['id_user' => 1, 'id_tipesoal' => 1, 'id_soal' => 55, 'jawaban' => 'ya', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 1],
            ['id_user' => 1, 'id_tipesoal' => 2, 'id_soal' => 56, 'jawaban' => 'tidak', 'nilai_l' => 0, 'nilai_e' => 0, 'nilai_n' => 0]
        ]);

        hasiltes::insert([
            ['id_user' => 1, 'jumlah_l' => 1, 'jumlah_e' => 6, 'jumlah_n' => 23, 'id_kepribadian' => 5] 
        ]);
    }
}
