<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class VocabularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {

                DB::table('vocabulars')->insert([
                    'eng_word' => 'pound',
                    'ru_word' => 'ударить',
                    'eng_description' => 'strike or hit heavily and repeatedly',
                ]);
        });
    }
}
