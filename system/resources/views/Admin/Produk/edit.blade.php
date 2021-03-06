     @extends ('Admin.template.base')

@section('content')

<div class="container">
	<div class="row"> 
		<div class="col-md-8 mt-5">
			<div class="card">
				<div  class="card-header">
					<h2><b>Edit Data Produk</b></h2>
				</div>
					<div class="card-body">
						<form action="{{url('Admin/produk', $produk->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						@method("PUT")
						<div class="form-group">
							<label for="" class="control-label"><b>Nama</b></label>
							<input type="text" class="form-control" name="nama" value="{{$produk->nama}}">
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label"><b>Foto</b></label>
									<input type="file" class="form-control" name="foto" accept="image/*">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label"><b>Harga</b></label>
									<input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label"><b>Berat</b></label>
									<input type="text" class="form-control" name="berat" value="{{$produk->berat}}">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label"><b>Stok</b></label>
									<input type="text" class="form-control" name="stok" value="{{$produk->stok}}">
								</div>
							</div>
						</div>
					<div class="form-group">
							<label for="" class="control-label"><b>Deskripsi</b></label>
							<textarea name="deskripsi" id="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
						</div>
						<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
						</form>
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

@push('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script>
		$(document).ready(function() {
  		$('#deskripsi').summernote();
		});
	</script>
@endpush