<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    // CONTROLADOR DE CUENTAS

    public function sign_in(){
        //return "Iniciar Sesión";
        return view('accounts.login');
    }

    public function sign_in_verify(Request $request){
        //$user = User::all();
        $user = User::where('email', $request->username)->get();


        if ($user /*&& Hash::check($request->password, $user->password)*/) {
            # code...
            //return view('index');
            return redirect('./products');
        }
        else{
            return "Error al iniciar sesión";
        }
        //return $user;
    }

    public function sign_up(){
        //return "Registrarse";
        return view('accounts.register');
    }

    public function sign_up_data(Request $request){
        $account = new User();
        $account->name = $request->name;
        $account->last_name = $request->last_name;
        $account->email = $request->email;
        $account->password = $request->password;
        $account->role = "administrador";
        $account->save();
        return redirect('./account/register');
    }
}
