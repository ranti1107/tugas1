<?php 

namespace App\Http\Controllers;
use App\Models\Provinsi;
use App\Models\Produk;

class HomeController extends Controller{

	function showBeranda(){
		$data['user'] = request()->user();
		$data['produk'] = $data['user']->produk;
		return view ('Admin.beranda', $data);
	}

	function showKategori(){
		return view ('Admin.kategori');
	}

	function showLogin(){
		return view ('Admin.login');
	}

	function showProduk(){
		return view ('Admin.produk');
	}

	function showRegister(){
		return view ('Admin.register');
	}

	function showUser(){
		return view ('Admin.user');
	}

	function testAjax(){
		$data['list_provinsi'] = Provinsi::all();
		return view('Admin.User.test-ajax', $data);
	}

}