<?php
use App\Models\profilo ;
use App\Models\contact ;
use App\Models\project ;
use Illuminate\Support\Facades\Route;
use illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome' , [
        'profilos' => Profilo::all() ,
        'projects' => Project::take(4)->get()]);

});
