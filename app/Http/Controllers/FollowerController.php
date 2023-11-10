<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function store(User $user)
    {

        //CREAR UN NUEVO SEGUIDOR
    $user->followers()->attach(auth()->user()->id, ['created_at'=>Carbon::now()]);

    return back();
    }


    public function destroy(User $user)
    {

             //dejar de seguir
    $user->followers()->detach(auth()->user()->id, ['created_at'=>Carbon::now()]);

    return back();

    }
}
