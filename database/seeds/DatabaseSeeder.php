<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(ResultTableSeeder::class);
        $this->call(ExaminationsTableSeeder::class);
        $this->call(YearsTableSeeder::class);
        $this->call(BoardsTableSeeder::class);

        Model::reguard();
    }
}
