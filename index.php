<?php

require 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

//echo getenv('S3_BUCKET');



$faker = Faker\Factory::create();

echo $faker->email;

