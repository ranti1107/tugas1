@extends ('Admin.template.base')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
            <p>Halaman Kategori</p>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table id="example2" class="table table-bordered" style="border: 2px; width: 60%">
          <thead style="background-color: #DB7093; color: #000;">
          <tr>
            <th style="width: 25px"> No </th>
            <th> Nama Kategori </th>
            <th> Jumlah Produk </th>
          </tr>
          </thead>
         <tbody style="background-color: #fff; color: #000">
          <tr>
            <td>1</td>
            <td>
            	SKIN CARE
            </td>
            <td>99+</td>
          </tr>
          <tr>
            <td>2</td>
            <td>
            	MAKE UP
            </td>
            <td>99+</td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              BODY CARE
            </td>
            <td>99+</td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              HAIR CARE
            </td>
            <td>99+</td>
          </tr>
          <tr>
            <td>5</td>
            <td>
              FRAGRANCE
            </td>
            <td>99+</td>
          </tr>
          <tr>
            <td>6</td>
            <td>
              TOOLS
            </td>
            <td>99+</td>
          </tr>
       </tbody>
        </table>
    </div>
</section>
@endsection