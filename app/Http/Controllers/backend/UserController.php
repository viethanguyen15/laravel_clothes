<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function getUser() {
        // $data['users'] = User::all();
        $data['users'] = User::orderBy('id', 'DESC')->paginate(2);
        //dd($data['users'])->all();
        return view('backend.user.listuser', $data);
    }

    function getAddtUser() {
        return view('backend.user.adduser');
    }

    function getEditUser($idUser) {
        //tim ban ghi trong model User
        $data['user'] = User::find($idUser);
        return view('backend.user.edituser', $data);
    }
    
    function postAddtUser(request $r) {
        //dd($r->all());
        $user = new User();
        $user->email = $r->email;
        $user->password = bcrypt($r->password);
        $user->full = $r->full;
        $user->address = $r->address;
        $user->phone = $r->phone;
        $user->level = $r->level;
        $user->save();
        return redirect('/admin/user')->with('newNotified', 'new record created');
    }

    function postEditUser(request $r, $idUser) {
        $user = User::find($idUser);
        $user->email = $r->email;
        $user->password = bcrypt($r->password);
        $user->full = $r->full;
        $user->address = $r->address;
        $user->phone = $r->phone;
        $user->level = $r->level;
        $user->save();
        return redirect('/admin/user')->with('newNotified', 'update record created');
    }

    function deleteUser($idUser)
    {
        User::find($idUser)->delete();
        return redirect('/admin/user')->with('newNotified', 'record delete');
    }
}
