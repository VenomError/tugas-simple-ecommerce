<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function loginProcess(Request $request)
    {

        try {
            $data = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);
            if (Auth::attempt($data, $request->get('remember'))) {
                session()->flash('success', "Login Berhasil");
            } else {
                session()->flash('error', "Login Gagal");
            }
            return redirect('/account');
        } catch (ValidationException $err) {
            session()->flash('error', $err->getMessage());
            throw $err;
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
            // throw $th;
        }
    }

    public function registerProcess(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);
            $user = new User();
            $user->fill($data);
            if ($user->save()) {
                session()->flash('success', "Registrasi Akun Berhasil , Silahkan Login");
            }
            return back();
        } catch (ValidationException $err) {
            session()->flash('error', $err->getMessage());
            throw $err;
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
            // throw $th;
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/auth');
    }
}
