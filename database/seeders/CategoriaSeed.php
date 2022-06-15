<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
           'name' => 'Front End',
           'created_at' => Carbon::now(), 
           'updated_at' => Carbon::now(), 
        ]);

        DB::table('categorias')->insert([
            'name' => 'Backend End',
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
         ]);

         DB::table('categorias')->insert([
            'name' => 'Full Stack',
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
         ]);

         DB::table('categorias')->insert([
            'name' => 'DBA',
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
         ]);

         DB::table('categorias')->insert([
            'name' => 'UI/UX',
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
         ]);

         DB::table('categorias')->insert([
            'name' => 'Tech Lead',
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
         ]);
    }
}
