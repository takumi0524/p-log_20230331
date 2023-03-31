<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Testseeder::class,
            Userseeder::class,
            AgeSeeder::class,
            GenderSeeder::class,
            ComposerSeeder::class,
            SongSeeder::class,
            SmartPianoSeeder::class,
            PianoMasterSeeder::class,
            PianoLogSeeder::class
        ]);
        
        \App\Models\ContactForm::factory(100)->create();
        // \App\Models\PianoLog::factory(100)->create();

        // 特定のデータを 1 件作成⇒これは0件時の表示用
        DB::table('contact_forms')->insert([
            'username' => 'searchplease',
            'userid' => '0000000',
            'email' => 'p-log@example.com',
            'age' => 1,
            'gender' => 1,
            'pstartage' => 1,
            'totalhistory' => 1,
            'pianohon' => 1,
            'soundproofhon' => 1,
            'community' => 'P-log',
            'age_id' => 1, // age_id も一緒に挿入
            'gender_id' => 1, // gender_id も一緒に挿入
        ]);

        // 特定のデータを 1 件作成(myprofile用)
        DB::table('contact_forms')->insert([
            'username' => 'てすとa',
            'userid' => 'aaa',
            'email' => 'p-log@aaa.com',
            'age' => 1,
            'gender' => 1,
            'pstartage' => 1,
            'totalhistory' => 1,
            'pianohon' => 1,
            'soundproofhon' => 1,
            'community' => 'P-log',
            'age_id' => 1, // age_id も一緒に挿入
            'gender_id' => 1, // gender_id も一緒に挿入
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('my_piano_logs')->insert([
        //     'username' => 'てすとa',
        //     'userid' => 'aaa',
        //     'song' => 'p-log@aaa.com',
        //     'composer' => 1,
        //     'playingage' => 1,
        //     'difficulty' => 1,
        //     'degree' => 1,
        //     'playingtimerp' => 1,
        //     'playingtimenrp' => 1,
        //     'score' => 'P-log',
        //     'readingperiod' => 'P-log',
        //     'exercise' => 'P-log',
        //     'technique' => 'P-log',
        //     'recording' => 'P-log',
        //     'url' => 'P-log',
        //     'soundsource' => 'P-log',
        //     'books' => 'P-log',
        // ]);
    }
}
