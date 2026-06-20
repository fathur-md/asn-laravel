<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tim = [
        [
            'nama'  => 'Ferdiyansyah Pratama Putra',
            'nim'   => '241110117',
            'role'  => 'ketua'
        ],
        [
            'nama'  => 'Muhammad Fathurrahman',
            'nim'   => '241110109',
            'role'  => 'anggota'
        ],
        [
            'nama'  => 'Dwi Angga Hermawan',
            'nim'   => '123',
            'role'  => 'anggota'
        ],
        [
            'nama'  => 'Violetta Wungubelen',
            'nim'   => '123',
            'role'  => 'anggota'
        ]
    ];
    return view('test', ['tim' => $tim]);
});
