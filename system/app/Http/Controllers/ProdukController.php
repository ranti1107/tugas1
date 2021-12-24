<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\User;
use Auth;
class ProdukController extends Controller {

	function index(){
		$user = request()->user();
		$data['list_produk'] = $user->produk;
		return view ('Admin.Produk.index', $data);
	}

	function create(){
		return view ('Admin.Produk.create');
	}

	function store(){

		$produk = new produk;
		$produk-> id_user = request()->user()->id;
		$produk-> nama = request('nama');
		$produk-> harga = request('harga');
		$produk-> berat = request('berat');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk->handleUploadFoto();
		$produk-> save();

		return redirect('Admin/produk')->with('success', 'Data Berhasil Ditambah');
	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('Admin.Produk.show', $data);
	}

	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view ('Admin.Produk.edit', $data);
	}

	function update(Produk $produk){

		$produk-> nama = request('nama');
		$produk-> harga = request('harga');
		$produk-> berat = request('berat');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk->handleUploadFoto();
		$produk-> save();

		return redirect('Admin/produk')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Produk $produk){
		$produk->handleDeleteFoto();
		$produk->delete();
		return redirect('Admin/produk')->with('danger', 'Data Berhasil Dihapus');
	}

	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		//$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		//$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		return view('Admin.Produk.index', $data);

	}
}