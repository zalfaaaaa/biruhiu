<?php
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name()."</br>";
echo $faker->email()."</br>";
echo $faker->text();
// 'Numquam ut mollitia at consequuntur inventore dolorem.'
