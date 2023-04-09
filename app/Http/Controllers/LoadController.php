<?php

namespace App\Http\Controllers;

use App\Models\User;


class LoadController extends Controller
{
    public function index()
    {
        return User::query()->paginate();
    }
}
