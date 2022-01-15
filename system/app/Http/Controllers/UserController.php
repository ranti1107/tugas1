<?php 

namespace App\Http\Controllers;
use App\Http\Request\UserStoreRequest;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserController extends Controller {

	function index(){
		$data['list_user'] = User::withCount('produk')->get();
	return view ('Admin.User.index', $data);
	}

	function create(){
		return view ('Admin.User.create');
	}

	function store(UserStoreRequest $request){
		$user = new User;
		$user->nama = request('nama');
		$user->username= request('username');
		$user->email= request('email');
		$user->password= bcrypt(request('password'));
		$user->jenis_kelamin = 1;
		$user-> save();

		$userDetail = new userDetail;
		$userDetail->id_user = $user->id;
		$userDetail->no_handphone = request('no_handphone');
		$userDetail-> save();

		return redirect('Admin/user')->with('success', 'Data Berhasil Ditambah');
	}

	function show(User $user){
		//$user = User::findOrFail($user);

		$data['user'] = $user;
		return view('Admin.User.show', $data);
	}

	function edit(User $user){
		$data['user'] = $user;
		return view ('Admin.User.edit', $data);
	}

	function update(User $user){
		$user->nama = request('nama');
		$user->username= request('username');
		$user->email= request('email');
		$user->detail->no_handphone = request('no_handphone');
		if(request('password')) $user->password = bcrypt(request('password'));
		$user-> save();
		
		return redirect('Admin/user')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(User $user){
		$user->delete();
		return redirect('Admin/user')->with('danger', 'Data Berhasil Dihapus');
	}
}