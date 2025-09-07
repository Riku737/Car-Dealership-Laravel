<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;

// PUBLIC

Route::get('/', function () {
    $cars = Car::all();
    return view('index', ['cars' => $cars]);
});

Route::get('/home', function () {
    $cars = Car::all();
    return view('index', ['cars' => $cars]);
});

Route::get('/car/{id}', function ($id) {
    return view('detail', ['id' => $id]);
});

// STAFF

Route::get('/login', function () {
    return view('staff.login');
});

Route::get('/logout', function () {
    return view('staff.logout');
});

Route::get('/staff', function () {
    return view('staff.index');
});

// CARS

Route::get('/staff/cars', function () {
    return view('staff.cars.index');
});

// Show car
Route::get('/staff/cars/show/{id}', function ($id) {
    return view('staff.cars.show', ['id' => $id]);
});

// Delete car
Route::get('/staff/cars/delete/{id}', function ($id) {
    return view('staff.cars.delete', ['id' => $id]);
});

// New car
Route::get('/staff/cars/new', function () {
    return view('staff.cars.new');
});
