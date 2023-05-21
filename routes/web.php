<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => '1Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quos.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => '2Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quos.'
            ],
            [
                'id' => 3,
                'title' => 'Listing Three',
                'description' => '3Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quos.'
            ],
            [
                'id' => 4,
                'title' => 'Listing Four',
                'description' => '4Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quos.'
            ],
        ]
    ]);
});