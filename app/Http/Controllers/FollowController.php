<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follow;
use App\Models\User;

class FollowController extends Controller
{
    public function index(Followees $followees)
    {
        return view('posts.index')->with(['followers' => $followees->getByfollowees()]);
    }
}
