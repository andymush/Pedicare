<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class Locations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location')->insert([
            'name' => 'Kisumu',
            'created_at' => Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('location')->insert([
            'name' => 'Nairobi',
            'created_at' => Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('location')->insert([
            'name' => 'Embu',
            'created_at' => Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('location')->insert([
            'name' => 'Karen',
            'created_at' => Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('location')->insert([
            'name' => 'Karatina',
            'created_at' => Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('location')->insert([
            'name' => 'Nyeri',
            'created_at' => Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('location')->insert([
            'name' => 'Machakos',
            'created_at' => Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        
    }
}
