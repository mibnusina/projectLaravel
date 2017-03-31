    @extends('templates/header')
	
	@section('content')
	
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pesanan
        <small>UIN Mens Fashion</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('produk') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pesanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        
        <div class="box-body">
			<table class="table table-stripped">
			 <thead>
				<tr>
					<th>No</th>
					<th>Nama Pelanggan</th>
					<th>Nomor Telepon</th>
					<th>Alamat Pelanggan</th>
					<th>ID Produk</th>
					<th>Konfirmasi Kepada Pelanggan</th>
					<th>Action</th>
				</tr>
			 </thead>
			 <tbody>
				@foreach ($result as $row)
				<tr>
					<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
					<td>{{ $row->nama_pelanggan }}</td>
					<td>{{ $row->notelp }}</td>
					<td>{{ $row->alamat }}</td>
					<td>{{ $row->id_prod }}</td>
					<td>{{ $row->status }}</td>
					<td>
						<a href="{{ url("pemesanan/$row->id_pemesanan/edit") }}" class="btn btn-sm btn-warning">
						<i class="fa fa-pencil"> Kirim Konfirmasi</i></a>
						
					</td>					
				</tr>
				@endforeach
			 </tbody>
			</table>
        </div>
        <!-- /.box-body -->
        
       </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection