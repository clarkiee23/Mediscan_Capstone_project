<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Transaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function saveUser(Request $request) {
        $user = new Users();
        $password = Hash::make($request->password);

        $user->id_number = $request->id_number;
        $user->first_name = $request->fname;
        $user->middle_name = $request->mname;
        $user->last_name = $request->lname;
        $user->suffix = $request->suffix;
        $user->sex_id = $request->sex;
        $user->position_id = $request->position;
        $user->username = $request->user;
        $user->password = $password;
        $user->role = 'user';
        $user->save();

        return back();
    }

    public function getUser(Request $request) {
        $user = Users::where('id_number', $request->input('item'))->first();
        $transaction = new Transaction();

        $transaction->id_number = $user->id;
        $transaction->stamp = $request->input('time');
        $transaction->save();

        return $user;
    }

    public function updateUser(Request $request) {
        $user = Users::find($request->id);

        $user->id_number = $request->id_number;
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->suffix = $request->suffix;
        $user->update();

        return back();
    }

    public function deleteUser(Request $request) {
        $user = Users::find($request->input('item'));

        $user->status = 'inactive';
        $user->update();

        return $user;
    }
}