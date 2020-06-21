<?php

$factory-> define(member::class , function(Faker\Generator $faker)
{
    return
    [
        'name' =>$faker->name,
        'ac' =>$faker->ac,
        'psd' =>$faker->psd,
    ];

});