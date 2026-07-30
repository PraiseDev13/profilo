<?php

namespace Database\Seeders;
use illuminate\Support\Facades\DB ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        
        DB::table('contacts')->insert([
          
         [
            'name' => 'praise ombude',
            'message' => 'Good work',
            'email' => 'praiseomobude13@gmail.com',
            'location' => 'Nigeria'
         ]


        ]) ;
    }
}
