<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    
    $chart_data = [
        'title' => 'Headcounts by Gender',
        'subtitle' => 'subtitle',
        'labels' => ['Female', 'Male', 'Unknown'],
        'values' => [100, 50, 25],
    ];

    return view('welcome', compact('chart_data'));
});

// Route::get('/column_chart', function () {
//     $chart_data = [75, 65, 15];
//     return view('home', compact('chart_data'));
// });

Route::get('users', [UserController::class, 'index']);
Route::get('list', [UserController::class, 'list']);