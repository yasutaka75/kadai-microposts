<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    public function store($id)
    {
        \Auth::user()->follo($id);
        return back();
    }
    
    public function destroy($id)
    {
        \Auth::user()->unfollow($id);
        returnback();
    }
}
