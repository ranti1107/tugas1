@extends ('Admin.template.base')

@section('content')

	<div class="container">
		<div class="row"> 
			<div class="col-md-12 mt-5">
				<div class="card">
					<div  class="card-header" style="color: #4B0082; font-family: Arial;">
						<h2><b>Data User</b></h2>
						<a href="{{url('Admin/user/create')}}" class="btn float-right" style="background-color: #AE8BA1; color: #fff; font-family: Arial;"><i class="fa fa-plus" style="font-size: 10pt"><b style="font-family: Arial; font-size: 10pt;"> Tambah Data</b></i></a>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-datatable table-striped" style="background-color: #FBEDEA; color: #000">
						<thead style="background-color: #AE8BA1;">
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Jenis Kelamin</th>
							<th>EmaiJenis Kelamin
						</thead>
						<tbody>
							@foreach($list_user as $user)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
										<a href="{{url('Admin/user', $user->id)}}" class="btn btn-primary" style="width: 40px; border-radius: 5px;"><i class="fa fa-info"></i></a>
										<a href="{{url('Admin/user', $user->id)}}/edit" class="btn btn-warning" style="width: 40px; border-radius: 5px;"><i class="fa fa-edit"></i></a>
										@include('Admin.template.utils.delete', ['url'=>url('Admin/user', $user->id)])
									</div>
								</td>
								<td>{{$user->nama}}</td>
								<td>{{$user->username}}</td>
								<td>{{$user->jenis_kelamin_string}}</td>
								<td>{{$user->email}}</td>
							</tr>
							@endforeach
						</tbody>
						</table>
					</div> 
				</div>
			</div>
		</div>
	</div>


@endsection