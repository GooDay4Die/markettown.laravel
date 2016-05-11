<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

use App\Http\Requests;

class UserController extends Controller
{
    public function postSignUp(Request $request )
    {
        $messages = array(
            'password.same' => 'Пароли не совпадают!',
        );
        $this->validate($request, [
            'email' => 'required|unique:users|email',
            'name' => 'required|max:120',
            'password' => 'required|min:6|same:password1'
        ],$messages);

        $email = $request['email'];
        $name = $request['name'];
        $password = bcrypt($request['password']);
        $subscribe = $request['subscribe'];


        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->password = $password;
        $user->subscribe = $subscribe;

        $user->save();
        \Auth::login($user);

        return redirect()->route('ok');
    }
}
