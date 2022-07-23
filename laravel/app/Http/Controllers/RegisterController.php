<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        // User::factory()->times(5)->create();
        $users = User::all();
        print_r($users->toJson());
        TestJob::dispatch('hello');
    }
}


