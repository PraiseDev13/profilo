<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfiloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('profilos')->insert([
          
         [
            'image' => 'images/pic.PNG' ,
            'name' => 'praise omobude',
            'title'=> 'Laravel Developer building full-stack web apps with Livewire, Filament, and Tailwind CSS. and more',
            'bio' => 'i am a Laravel developer who loves building robust, full-stack web applications with Livewire and Filament. I enjoy crafting clean, responsive interfaces with Tailwind CSS and bringing interactivity to life with JavaScript I m currently expanding my toolkit by learning React to build even more dynamic user experiences.' ,
            'github' => 'https://www.github.com/praiseDev13'
         ]


        ]) ;
    }
}
