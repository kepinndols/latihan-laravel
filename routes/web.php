<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\muridcontroller;



Route::get('/', function () {
    return view('welcome');
});
route::get('/murid', [muridcontroller::class, 'index']);
route::get('/murid/create/{id}', [muridcontroller::class, 'create']);
route::get('/murid/store/{id}', [muridcontroller::class, 'store']);
route::get('/murid/delete/{id}', [muridcontroller::class, 'delete']);
























// http://127.0.0.1:8000/
Route::get('/siswa', function () {
    return "nama saya siswa";
});
    


Route::get('/siswa/{id}', function ($id) {
    return "nama saya siswa dengan id $id";
})->where('id', '[0-9]+');
    
Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
    return "nama saya siswa dengan id $id dan nama $nama";
})->where(['id'=> '[0-9]+', 'nama'=> '[a-z,A-Z]+' ]);
    