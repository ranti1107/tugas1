<?php 

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
	function showLogin(){
		return view('Admin/login');
	}

	function LoginProcess(){
	
		if(request('login_as') == 1) {
			if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])){
				return redirect('home')-> with('success', 'Login Berhasil');
			}else{
				return back()->with('danger', 'Login Gagal. Silahkan cek email dan password anda');
			}
		}
			else{
			if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
				return redirect('Admin/beranda')-> with('success', 'Login Berhasil');
			}else{
				return back()->with('danger', 'Login Gagal. Silahkan cek email dan password anda');
			}

		}
	}

	function logout(){
		Auth::logout();
		Auth::guard('user')->logout();
		Auth::guard('pembeli')->logout();
		return redirect('Admin/login');
	}

	function registration(){

	}

	function forgotPassword(){
		
	}
} ?>