<?php

use App\SiteSettings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SiteSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sedding Start Here
        DB::table('site_settings')->insert([
            'id' => '1',
            'site_phnNumber' => '01778966356',
            'site_mail' => 'cse44@diu.edu.bd',
            'site_address' => 'Dhanmondi 27 - Mirpur Road',
            'site_shortDescription' => Str::random(255),
            'site_fbLink' => 'www.fb.com/ImMaheKarim',
            'site_ytLink' => 'Lorem Ipsum',

        ]);
    }
}
