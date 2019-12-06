<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactForm;
use Faker\Generator as Faker;

$factory->define(ContactForm::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name,
        'email'=>$faker->email,
        'message'=>$faker->sentence,
        'created_at'=>$faker->dateTime($max = 'now', $timezone = null),

    ];
});
