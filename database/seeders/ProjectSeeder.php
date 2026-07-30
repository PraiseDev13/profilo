<?php

namespace Database\Seeders;
use IlluminATE\Support\Facades\DB ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
     DB::table('projects')->insert([
          [
            'icon' => '🛒',
               'title' =>'HHGV',
               'description' => 'An ecommerce website build for bussiness',
              
          ],

            
           [
           ' icon' => ' ⚡' ,
               'title' =>'CMS',
               'description' => 'A customer mangement service',
              
          ],


            
           [
              'icon' => ' ⚙️',
               'title' =>'Laravel Api',
               'description' => 'A laravel api authcation',
               
          ],


          [
            'icon' => ' 📄',
               'title' =>'Blog site',
               'description' => 'A blog site where user can make video and CRUD',
             
          ],
           

 [
    'icon' => ' 📄' ,
               'title' =>'A Todo List',
               'description' => 'a todo list use to add and delete',
       
          ],
           


     ]) ;


    }
}
