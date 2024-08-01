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
    return view('welcome', [
        'slider' => [
            [
                'image' => 'images/slider-main/bg2_1.jpg',
                'title' => '15 წელი თქვენს სამსახურში',
                'subtitle' => 'ამანათები',
                'description' => 'ამერიკიდან, ინგლისიდან, დუბაიდან  და ჩინეთიდან',
            ],
            [
                'image' => 'images/slider-main/bg1.jpg',
                'title' => 'თქვენ შოპინგობთ',
                'subtitle' => 'ჩვენ ჩამოგვაქვს',
                'description' => '',
            ],
            [
                'image' => 'images/slider-main/bg3.jpg',
                'title' => 'ტრანსპორტირების',
                'subtitle' => 'საუკეთესო პირობები',
                'description' => '',
            ]
        ]
    ]);
});

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
