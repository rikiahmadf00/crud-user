<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $data['result'] = User::find(Auth::user()->id);
        return view('profile.form',$data);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        return redirect('profile');
    }

    public function password(Request $request, $id){
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::find($id);
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        return redirect('profile');
    }
}
