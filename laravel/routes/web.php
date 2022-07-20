<?php

use App\Models\User;
use App\Notifications\NotifyUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    User::all()->each->notify(new NotifyUser());
    return 'done';
});
