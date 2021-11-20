@extends ('Admin.template.base')

@section('content')

<div class="container">
	<div class="row"> 
		<div class="col-md-8 mt-5">
			<div class="card">
				<div  class="card-header">
					<b>Detail Data Produk</b>
				</div>
					<div class="card-body">
						<h2>{{$produk->nama}}</h2>
						<hr>
						<h3>{{$produk->harga}}</h3>
						@include('Admin.Produk.show.detail')
						<p>
							{!! nl2br ($produk->deskripsi) !!}
						</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-4 mt-5">
				<div class="card">
					<div class="card-body">
						<img style="width: 80%; margin-left: 35px;" src="{{url("public/$produk->foto")}}" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection