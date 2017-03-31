    @extends('templates/header')
	
	@section('content')
	
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Produk
        <small>UIN Mens Fashion</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('produk') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('produk/add') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
		</div>
        <div class="box-body">
			<table class="table table-stripped">
			 <thead>
				<tr>
					<th>No</th>
					<th>Foto</th>
					<th>ID Produk</th>
					<th>Nama Produk</th>
					<th>Kategori Produk</th>
					<th>Deskripsi</th>
					<th>Harga</th>
					<th>Action</th>
				</tr>
			 </thead>
			 <tbody>
				@foreach ($result as $row)
				<tr>
					<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
					<td>
						<img src="{{ asset('uploads/'.@$row->foto) }}" width="80px" class="img" />
					</td>
					<td>{{ $row->id_prod }}</td>
					<td>{{ $row->nama_prod }}</td>
					<td>{{ $row->kategori->nama_kat }}</td>
					<td>{{ $row->deskripsi }}</td>
					<td>IDR {{ $row->harga }}</td>
					<td>
						<a href="{{ url("produk/$row->id_prod/edit") }}" class="btn btn-sm btn-warning">
						<i class="fa fa-pencil"></i></a>
						<form action="{{ url("produk/$row->id_prod/delete") }}"
						method="POST" style ="display:inline;">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
						</form>
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