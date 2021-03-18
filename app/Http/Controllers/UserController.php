<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function edit(User $user) //edit form
    {
        # code...
    }
    public function settings(Request $request, User $user) //update
    {

    }
}
