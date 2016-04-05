<?php

use Illuminate\Database\Seeder;

class ExaminationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('examinations')->truncate();
    	
    	DB::table('examinations')->insert([
            ['examination' => 'PSC'],
    		['examination' => 'JSC'],
    		['examination' => 'SSC'],
    		['examination' => 'HSC']
    	]);

    }
}
