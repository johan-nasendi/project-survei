<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function password_update(Request $request)
    {

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
        // The passwords matches
            return redirect()->back()->with("error","Kata sandi Anda saat ini tidak cocok dengan kata sandi yang Anda berikan. Silakan coba lagi.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        //Current password and new password are same
            return redirect()->back()->with("error","Kata Sandi Baru tidak boleh sama dengan kata sandi Anda saat ini. Silakan pilih kata sandi yang berbeda.");
        }

         $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        try {
            $user = new User();
            $user->password = bcrypt($request->get('new-password'));
            $user->save();
            $user->attachRole($request->role_id);
            Alert::success('Success', 'Kata sandi anda berhasil di perbarui,Silakan Login mengunakan kata sandi baru.');
            return redirect()->route('dashboard');

           }catch (\Throwable $e) {
            Alert::error('Error','Gagal memperbarui kata sandi anda,Silakan coba lagi',['error' => $e->getMessage()]);
        }
        return redirect()->back();

    }


// End Line Password

}
