<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function masuk()
        {
            return view('masuk');
        }
// buatcek si user udah login pa belum
    public function auth(Request $request) 
        {
            $credentials = $request->validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);

               if (Auth::attempt($credentials)){

// buat cek akun si user aktif atau engga (kalau akun udah di aktifkan di php my admin, brati langsung masuk ke halaman mereka)
                if (Auth::user()->status != 'active')
                {
                    Auth::logout();
 
                $request->session()->invalidate();
             
                $request->session()->regenerateToken();
             
                    session::flash('status','failed');
                    session::flash('message','akun kamu tidak aktif,Segera Hubungi Admin');

                    return redirect('login');
                }

                $request -> session()-> regenerate();
                
                // cek apakah dia admin
                if(Auth::user()->roles_id == 1) 
                {
                    return redirect('dashboard');
                }
                // cek apakah dia klient
                if(Auth::user()->roles_id == 2)
                {
                    return redirect('profile');
                }
               }
//    kalo login tapi salah password atau userame
               session::flash('status','failed');
               session::flash('message','invalid login');

               return redirect('login');
        }

            public function logout(Request $request)
            {

                Auth::logout();
 
                $request->session()->invalidate();
             
                $request->session()->regenerateToken();
             
                return redirect('/');

            }


            public function register()
            {
                return view('register');
            }

          public function regis(Request $request)
          {
            //validasi data masuk apa engga  ( kolom gaboleh kosong ) di register
            $validated = $request->validate([
                'username' => 'required|unique:users',
                'phone' => 'required|max:13',    
                'address' => 'required',
                'password' => 'required',
            ]);
            //ini buat nyembunyiin tulisan password di php my admin
        
        $request['password'] = Hash::make($request->password);
        //jadi user masukin data (create), trus sama si $request
        $user = User::create($request->all());
//ini buat kalo misalkan statusnya sukses untuk masukin data register, dia akan muncul 'register sukses' 
        session::flash('status','succes');
        session::flash('message','Register Sukses! , Harap tunggu persetujuan admin');
        return redirect('register');
          }  

}
