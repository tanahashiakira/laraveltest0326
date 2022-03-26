<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => '英語'
        ];
        DB::table('subjects') -> insert($param);
        $param = [
            'title' => '国語'
        ];
        DB::table('subjects') -> insert($param);
    }
}
