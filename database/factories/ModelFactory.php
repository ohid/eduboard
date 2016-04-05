<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Eduboard\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Eduboard\Result::class, function (Faker\Generator $faker) {

	$result = $faker->randomFloat($nbMaxDecimals = NULL, $min = 4.13, $max = 5);

    return [
        // 'roll' => $faker->numberBetween(422147, 422246),
        // 'name' => $faker->name,
        // 'board' => $faker->name,
        // 'fathers_name' => $faker->name($gender = 'male'),
        // 'sub_group' => $faker->name,
        // 'mothers_name' => $faker->name($gender = 'female'),
        // 'type' => 'regular',
        // 'birth' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')->format('Y-m-d'),
        // 'result' => $result,
        // 'institute' => $faker->company,
        // 'gpa' => $result,
        // 'year' => 2016,
        // 'examination' => 'ssc',
        // 'bangla' => $faker->numberBetween(2,5),
        // 'english' => $faker->numberBetween(2,5),
        // 'math' => $faker->numberBetween(2,5),
        // 'science' => $faker->numberBetween(2,5),
        // 'religion' => $faker->numberBetween(2,5),
        // 'int_to_busi' => $faker->numberBetween(2,5),
        // 'accounting' => $faker->numberBetween(2,5),
        // 'business_entre' => $faker->numberBetween(2,5),
        // 'agriculture' => $faker->numberBetween(2,5)
    ];
});
