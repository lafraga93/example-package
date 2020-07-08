<?php

declare(strict_types = 1);

require 'vendor/autoload.php';

use lafraga93\Faker\Faker;

$faker = new Faker();
$fakerString = $faker->fire();

var_dump($fakerString);
