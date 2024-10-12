<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('templates')->insert([
            ['name' => 'vcard1', 'path' => 'assets/img/templates/vcard1.png'],
            ['name' => 'vcard2', 'path' => 'assets/img/templates/vcard2.png'],
            ['name' => 'vcard3', 'path' => 'assets/img/templates/vcard3.png'],
            ['name' => 'vcard4', 'path' => 'assets/img/templates/vcard4.png'],
            ['name' => 'vcard5', 'path' => 'assets/img/templates/vcard5.png'],
            ['name' => 'vcard6', 'path' => 'assets/img/templates/vcard6.png'],
            ['name' => 'vcard7', 'path' => 'assets/img/templates/vcard7.png'],
            ['name' => 'vcard8', 'path' => 'assets/img/templates/vcard8.png'],
            ['name' => 'vcard9', 'path' => 'assets/img/templates/vcard9.png'],
            ['name' => 'vcard10', 'path' => 'assets/img/templates/vcard10.png'],
            ['name' => 'vcard11', 'path' => 'assets/img/templates/vcard11.png'],
            ['name' => 'vcard12', 'path' => 'assets/img/templates/vcard12.png'],
            ['name' => 'vcard13', 'path' => 'assets/img/templates/vcard13.png'],
            ['name' => 'vcard14', 'path' => 'assets/img/templates/vcard14.png'],
            ['name' => 'vcard15', 'path' => 'assets/img/templates/vcard15.png'],
            ['name' => 'vcard16', 'path' => 'assets/img/templates/vcard16.png'],
            ['name' => 'vcard17', 'path' => 'assets/img/templates/vcard17.png'],
            ['name' => 'vcard18', 'path' => 'assets/img/templates/vcard18.png'],
            ['name' => 'vcard19', 'path' => 'assets/img/templates/vcard19.png'],
            ['name' => 'vcard20', 'path' => 'assets/img/templates/vcard20.png'],
            ['name' => 'vcard21', 'path' => 'assets/img/templates/vcard21.png'],
            ['name' => 'vcard22', 'path' => 'assets/img/templates/vcard22.png'],
            ['name' => 'vcard23', 'path' => 'assets/img/templates/vcard23.png'],
            ['name' => 'vcard24', 'path' => 'assets/img/templates/vcard24.png'],
            ['name' => 'vcard25', 'path' => 'assets/img/templates/vcard25.png'],
            ['name' => 'vcard26', 'path' => 'assets/img/templates/vcard26.png'],
            ['name' => 'vcard27', 'path' => 'assets/img/templates/vcard27.png'],
            ['name' => 'vcard28', 'path' => 'assets/img/templates/vcard28.png'],
        ]);
    }
}
