@extends ('Admin.template.base')

@section('content')

<div class="container">
	<div class="row"> 
		<div class="col-md-12 mt-5">
			<div class="card">
				<div  class="card-header">
					<b>Detail Data Produk</b>
				</div>
					<div class="card-body">
						<h2>{{$produk->nama}}</h2>
						<hr>
						<h3>Rp. {{$produk->harga}}</h3>
						<p>
							Stok : {{$produk->stok}}  |
							Berat : {{$produk->berat}} kg |
							Seller : {{$produk->seller->username}} |
							Diposting : {{$produk->created_at->diffForHumans()}}
						</p>
						<p>
							{!! nl2br ($produk->deskripsi) !!}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection