@extends ('Admin.template.base')

@section('content')

<div class="container">
	<div class="row"> 
		<div class="col-md-12 mt-5">
			<div class="card">
				<div  class="card-header">
					<b>Detail Kategori</b>
				</div>
					<div class="card-body">
						<h3>{{$kategori->nama}}</h3>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection