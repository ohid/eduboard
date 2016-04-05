<?php

use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boards')->truncate();

        DB::table('boards')->insert([
            ['board' => 'Barishal'],
            ['board' => 'Chittagang'],
            ['board' => 'Comilla'],
            ['board' => 'Dhaka'],
            ['board' => 'Dinajpur'],
            ['board' => 'Jessore'],
            ['board' => 'Rajshahi'],
            ['board' => 'Sylhet'],
            ['board' => 'Madrasha'],
            ['board' => 'Technical']
        ]);
    }
}
