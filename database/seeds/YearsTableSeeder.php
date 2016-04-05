<?php

use Illuminate\Database\Seeder;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('years')->truncate();

        DB::table('years')->insert([
            ['year' => '2016'],
            ['year' => '2015'],
            ['year' => '2014'],
            ['year' => '2013'],
            ['year' => '2012'],
            ['year' => '2011'],
            ['year' => '2010'],
            ['year' => '2009'],
            ['year' => '2008'],
            ['year' => '2007'],
            ['year' => '2006'],
            ['year' => '2005'],
            ['year' => '2004'],
            ['year' => '2003']
        ]);
    }
}
