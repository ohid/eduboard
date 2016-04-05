<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ResultTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
	    DB::table('results')->truncate();

    	$faker = Faker::create();
    	$board = "Jessore";
    	$type = "Regular";
    	$year = "2016";
    	$examination = "SSC";

    	$i = 11;
		while($i <= 99) {
			$result = $faker->randomFloat($nbMaxDecimals = NULL, $min = 4.13, $max = 5);
			DB::table('results')->insert([
				'roll' => "4221{$i}",
		        'name' => $faker->name,
		        'board' => "$board",
		        'fathers_name' => $faker->name($gender = 'male'),
		        'sub_group' => 'Business Studies',
		        'mothers_name' => $faker->name($gender = 'female'),
		        'type' => "$type",
		        'birth' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')->format('Y-m-d'),
		        'result' => $result,
		        'institute' => 'JESSORE ZILLA SCHOOL',
		        'gpa' => $result,
		        'year' => "$year",
		        'examination' => "$examination",
		        'bangla' => $faker->numberBetween(2,5),
		        'english' => $faker->numberBetween(2,5),
		        'math' => $faker->numberBetween(2,5),
		        'science' => $faker->numberBetween(2,5),
		        'religion' => $faker->numberBetween(2,5),
		        'int_to_busi' => $faker->numberBetween(2,5),
		        'accounting' => $faker->numberBetween(2,5),
		        'business_entre' => $faker->numberBetween(2,5),
		        'agriculture' => $faker->numberBetween(2,5)
			]);
			$i++;
		}

    	$i2 = 11;
		while($i2 <= 99) {
			$result = $faker->randomFloat($nbMaxDecimals = NULL, $min = 4.13, $max = 5);
			DB::table('results')->insert([
				'roll' => "4222{$i2}",
		        'name' => $faker->name,
		        'board' => "$board",
		        'fathers_name' => $faker->name($gender = 'male'),
		        'sub_group' => 'Business Studies',
		        'mothers_name' => $faker->name($gender = 'female'),
		        'type' => "$type",
		        'birth' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')->format('Y-m-d'),
		        'result' => $result,
		        'institute' => 'JESSORE Police Line SCHOOL',
		        'gpa' => $result,
		        'year' => "$year",
		        'examination' => "$examination",
		        'bangla' => $faker->numberBetween(2,5),
		        'english' => $faker->numberBetween(2,5),
		        'math' => $faker->numberBetween(2,5),
		        'science' => $faker->numberBetween(2,5),
		        'religion' => $faker->numberBetween(2,5),
		        'int_to_busi' => $faker->numberBetween(2,5),
		        'accounting' => $faker->numberBetween(2,5),
		        'business_entre' => $faker->numberBetween(2,5),
		        'agriculture' => $faker->numberBetween(2,5)
			]);
			$i2++;
		}


    	$i3 = 11;
		while($i3 <= 99) {
			$result = $faker->randomFloat($nbMaxDecimals = NULL, $min = 4.13, $max = 5);
			DB::table('results')->insert([
				'roll' => "4223{$i3}",
		        'name' => $faker->name,
		        'board' => "$board",
		        'fathers_name' => $faker->name($gender = 'male'),
		        'sub_group' => 'Business Studies',
		        'mothers_name' => $faker->name($gender = 'female'),
		        'type' => "$type",
		        'birth' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')->format('Y-m-d'),
		        'result' => $result,
		        'institute' => 'BAF SHAHIN SCHOOL & COLLAGE',
		        'gpa' => $result,
		        'year' => "$year",
		        'examination' => "$examination",
		        'bangla' => $faker->numberBetween(2,5),
		        'english' => $faker->numberBetween(2,5),
		        'math' => $faker->numberBetween(2,5),
		        'science' => $faker->numberBetween(2,5),
		        'religion' => $faker->numberBetween(2,5),
		        'int_to_busi' => $faker->numberBetween(2,5),
		        'accounting' => $faker->numberBetween(2,5),
		        'business_entre' => $faker->numberBetween(2,5),
		        'agriculture' => $faker->numberBetween(2,5)
			]);
			$i3++;
		}


    	$i4 = 11;
		while($i4 <= 99) {
			$result = $faker->randomFloat($nbMaxDecimals = NULL, $min = 4.13, $max = 5);
			DB::table('results')->insert([
				'roll' => "4224{$i4}",
		        'name' => $faker->name,
		        'board' => "$board",
		        'fathers_name' => $faker->name($gender = 'male'),
		        'sub_group' => 'Business Studies',
		        'mothers_name' => $faker->name($gender = 'female'),
		        'type' => "$type",
		        'birth' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')->format('Y-m-d'),
		        'result' => $result,
		        'institute' => 'JESSORE MM COLLAGE',
		        'gpa' => $result,
		        'year' => "$year",
		        'examination' => "$examination",
		        'bangla' => $faker->numberBetween(2,5),
		        'english' => $faker->numberBetween(2,5),
		        'math' => $faker->numberBetween(2,5),
		        'science' => $faker->numberBetween(2,5),
		        'religion' => $faker->numberBetween(2,5),
		        'int_to_busi' => $faker->numberBetween(2,5),
		        'accounting' => $faker->numberBetween(2,5),
		        'business_entre' => $faker->numberBetween(2,5),
		        'agriculture' => $faker->numberBetween(2,5)
			]);
			$i4++;
		}
    }
}
