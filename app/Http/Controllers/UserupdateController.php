<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Task;

class UserupdateController extends Controller
{
    public function getUserupdate() {
        $users = Users::all()->where('status', 'active');
 
        return view('pages.admin.dashboard', compact('users'));
     }
}
