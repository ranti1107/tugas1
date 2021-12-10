<?php 

namespace App\Http\Controllers;
use App\Models\Provinsi;

class HomeController extends Controller{

	function showBeranda(){
		return view ('Admin.beranda');
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

}