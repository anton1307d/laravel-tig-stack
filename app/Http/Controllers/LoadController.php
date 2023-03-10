<?php

namespace App\Http\Controllers;

use App\Models\User;


class LoadController extends Controller
{
    public function index()
    {
        User::factory(100)->create();

        return User::query()->paginate();
    }
}
