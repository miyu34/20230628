<?php

namespace database\seeders;

use Illuminate\database\seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $param = [
      'name' => 'tony',
      'age' => 35,
      'nationality' => 'American'
    ];
    DB::table('authors')->insert($param);
    $param = [
      'name' => 'jack',
      'age' => 20,
      'nationality' => 'British'
    ];
    DB::table('authors')->insert($param);
    $param = [
      'name' => 'sara',
      'age' => 45,
      'nationality' => 'Egyptian'
    ];
    DB::table('authors')->insert($param);
    $param = [
      'name' => 'saly',
      'age' => 31,
      'nationality' => 'Chinese'
    ];
    DB::table('authors')->insert($param);
  }
}