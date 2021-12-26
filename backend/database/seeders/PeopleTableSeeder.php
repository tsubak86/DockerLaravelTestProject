<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 2,
            'name' => 'test2',
            'mail' => 'test2',
            'age' => 30,
        ];
    DB::table('people')->insert($param);
    }

}
